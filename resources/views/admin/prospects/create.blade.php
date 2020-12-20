@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">

                    <h1>Create Prospects</h1>

                    <div class="ml-auto">

                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">Dashboard</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
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




                <form action="{{ route('admin.prospects.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
    </div>
@endsection
