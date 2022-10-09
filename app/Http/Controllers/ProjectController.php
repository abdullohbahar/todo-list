<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Project;
use App\Models\Version;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $version = Version::first();

        $data = [
            'versions' => $version,
        ];

        return view('project', $data);
    }

    public function getProject()
    {
        $projects = Project::get();

        $response = [
            'status' => 200,
            'message' => "OK",
            'data' => $projects
        ];

        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validateData = Validator::make($request->all(), [
                'name' => 'required|unique:projects,name',
            ]);

            if ($validateData->fails()) {
                $response = [
                    'status' => 400,
                    'errors' => $validateData->getMessageBag()
                ];
            } else {
                $validateData = [
                    'name' => $request->input('name'),
                    'slug' => Str::slug($request->input('name')),
                    'client' => $request->input('client'),
                    'deadline' => $request->input('deadline'),
                ];
                Project::create($validateData);

                $response = [
                    'status' => 200,
                    'message' => "OK",
                ];
            }
        } catch (Exception $e) {
            $response = [
                'Exception Message' => $e->getMessage(),
                'Exception Code' => $e->getCode(),
                'Exception String' => $e->__toString()
            ];
        }

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
