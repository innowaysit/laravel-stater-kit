@extends('layouts.mazer-admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Role</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row my-2 mx-2 card p-4">
        <form action="{{ route('admin.roles.store') }}" method="post">
            @csrf
            <div class="d-flex float-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name">Role Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="e.g. Manager" />
                    </div>
                </div>
            </div>
            <br>
            <h3>Permissions</h3>
            <div class="row">
                @foreach ($permissions as $permission)
                    <div class="col-12 col-md-4">
                        <div class="form-check mb-3">
                            <input id="permissions" name="permissions[]" type="checkbox" class="form-check-input"
                                value="{{ $permission->id }}" />
                            <label id="permissions_label" class="form-check-label"
                                for="permissions">{{ $permission->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </form>
    </div>

@endsection
