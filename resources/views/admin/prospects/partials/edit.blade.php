@extends('layout.app')

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex">
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                          Actions
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.dashboard') }}">View Dashboard</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin.prospects.show') }}">View Prospect</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
