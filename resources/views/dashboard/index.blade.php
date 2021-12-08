@extends('layouts.admin')

@section('content')
    <div class="my-2">
        <h1>Dashboard <i class="fas fa-meteor    "></i></h1>
    </div>
    <div class="row my-2">
        <div class="col-12 col-md-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-comment  svg-icon mr-3 text-secondary"></i>
                        <div class="pl-3 border-left">
                            <h5 class="mb-1">Blogs</h5>
                            <p class="mb-0">{{ $blogs }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-users-cog  svg-icon mr-3 text-secondary"></i>
                        <div class="pl-3 border-left">
                            <h5 class="mb-1">Roles</h5>
                            <p class="mb-0">{{ $roles }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user-alt svg-icon mr-3 text-secondary"></i>
                        <div class="pl-3 border-left">
                            <h5 class="mb-1">Users</h5>
                            <p class="mb-0">{{ $users }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
