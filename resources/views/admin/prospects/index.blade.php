@extends('layouts.app')

@section('content')
        <div class="container">
            @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session ('success')  }}
                        </div>

             @endif

            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-flex">
                        <h1>Prospects <small class="text-muted">Showing All prospects</small></
                        <div class="ml-auto">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                  Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                  <li><a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Create prospect</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>


            @if ($prospect->count())
                {{ $prospects->links() }}
                @foreach ($prospects as $prospect)
                    @include('admin.prospects.partials.prospect-card', ['prospect' => $prospect])
                @endforeach
            @endif
                 {{-- @if ($prospects->count())
                     <table class="table table-hover">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Created At</th>
                                 <th>Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($prospects as $prospect)
                                <tr>
                                    <td>{{ $prospect->name}}</td>
                                    <td>{{ $prospect->email}}</td>
                                    <td>{{ $prospect->pretty_c reated }}</td>
                                </tr>
                             @endforeach
                         </tbody>
                     </table>
                 @endif --}}
        </div>
@endsection
