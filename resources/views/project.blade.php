@extends('component.app')

@section('title')

@endsection

@push('addons-css')

@endpush

@section('content')
<section class="container mt-2">
    <div class="row justify-content-end">
        <div class="col-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProject">Add Project</button>
        </div>
    </div>
    <div class="row" id="projects">
        
    </div>
</section>

@include('component.modal.add-project')

@endsection

@push('addons-js')
    <script src="{{ asset('./js/add-project.js?version=').$versions->version }}"></script>
    <script src="{{ asset('./js/get-project.js?version=').$versions->version }}"></script>
@endpush
