@extends('component.app')

@section('title')

@endsection

@push('addons-css')

@endpush

@section('content')
<section class="container mt-2">
    <div class="row justify-content-center text-center">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-5">
            <div class="col-12">
                <h2>{{ $projects->name }}</h2>
            </div>
            <div class="col-12 d-grid mt-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTask">Add Task</button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" id="task">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-5">
            <div class="card">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 75%; text-align: justify;">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo doloremque, laboriosam illo earum praesentium tempora. Harum fugit cumque earum ipsa aspernatur, laudantium beatae illo tempora architecto totam modi quas expedita iusto consequuntur aut nostrum voluptates hic natus asperiores, dolorem veniam, sed quisquam ducimus! Provident illum sed architecto, quo minus eius aperiam dicta in ratione, facere dolorum sint praesentium ab velit dolore pariatur eligendi! Commodi reiciendis exercitationem eos, nemo pariatur natus voluptatum molestias, rerum unde aspernatur saepe, modi ut. Consequuntur blanditiis enim voluptatum adipisci! Maiores illum at rerum fugiat, sint, cum cumque nesciunt vitae odio iste numquam sed delectus eos iure!
                        </th>
                        <td>
                            delete
                        </td>
                    </tr>
                    <tr>
                        <th>
                            tes
                        </th>
                        <td>
                            delete
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

@include('component.modal.add-project')

@endsection

@push('addons-js')
    <script src="{{ asset('./js/add-project.js?version=').$versions->version }}"></script>
    <script src="{{ asset('./js/get-project.js?version=').$versions->version }}"></script>
@endpush
