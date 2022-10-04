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
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-5">
            <a href="" class="link-dark text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-uppercase">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt!</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

@include('component.modal.add-project')

@endsection

@push('addons-js')
@endpush
