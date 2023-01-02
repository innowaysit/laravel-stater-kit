@extends('layouts.mazer-admin')


@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New User</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card mx-2 my-2 p-4">
        <form action="{{ route('admin.users.store') }}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-12 clearfix">
                    <div class="float-start">Create User</div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">User Name</label>
                        <input id="name" name="name" type="text" class="form-control" />
                        @error('name')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 col-12">
                    <label id="email_label" for="email">Email Address</label>
                    <input id="email" name="email" type="email" class="form-control" />
                    @error('email')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 col-12">
                    <label id="password_label" for="password">Password</label>
                    <input id="password" name="password" type="password" class="form-control" />
                    @error('password')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 col-12">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" />
                </div>

                <div class="col-12 my-2">
                    <h3>Roles</h3>
                </div>
                @foreach ($roles as $role)
                    <div class="col-12 col-md-4">
                        <div class="form-check mb-3">
                            <input id="roles" name="roles[]" type="checkbox" class="form-check-input"
                                value="{{ $role->id }}" />
                            <label id="roles_label" class="form-check-label" for="roles">{{ $role->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>
    </div>
@endsection
