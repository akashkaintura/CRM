@extends('layout.app')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex">
                <h1>Edit Prospects <small class="text-muted">{{ $prospects->name }}</small></h1>
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                          Actions
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">View Dashboard</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.show', ['prospect' => $prospect->id]) }}">View Prospect</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Update Profile --}}
    <div class="row">
        <div class="col-sm-4">
            {{-- Placeholder for image--}}
            <div class="card mt-3">
                <div class="card-body">
                    @if ($prospect->profile_image)
                    <img src="{{ Storage::url($project->profile_image) }}" alt="">
                    @endif
                    <hr>
                    <button class="btn btn-outline-primary btn-sm btn-block">Uplaod New Image</button>
                    <button class="btn btn-outline-danger btn-sm btn-block"><i class="fas fa-trash">Delete Profile Image</i></button>

                </div>
            </div>
        </div>
        <div class="col-sm-8">

        </div>
    </div>
    <div class="card mt-3">
        <div class="card">

            <h5>Edit Personal Details</h5>
            <hr>
            @if ($errors->count())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('admin.prospects.update', ['prospect' => $prospect->id]  )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">

                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">

                        <label for="">Profile  Image</label>
                        <input type="file" class="form-control-file" name="profile_image">
                    </div>

                    <button  class="btn btn-primary float-right">
                        Create Prospect
                    </button>
                </form>
        </div>
    </div>

    {{-- update Contact Details --}}
</div>
@endsection
