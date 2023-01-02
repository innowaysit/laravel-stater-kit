@extends('layouts.mazer-admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit role</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row my-2 mx-2 card p-4">
        <div class="col-12">
            <form action="{{ route('admin.roles.update', $role->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="d-flex float-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="name">Role Name</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="e.g. Manager"
                                value="{{ $role->name }}" />
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <h3>Permissions</h3>
                    </div>
                    @foreach ($permissions as $permission)
                        <div class="col-12 col-md-4">
                            <div class="form-check mb-3">
                                <input id="permissions_{{ $permission->id }}" @if (in_array($permission->id, $role->permissions->pluck('id')->toArray())) checked @endif
                                    name="permissions[]" type="checkbox" class="form-check-input"
                                    value="{{ $permission->id }}" />
                                <label id="permissions_label" class="form-check-label"
                                    for="permissions_{{ $permission->id }}">{{ $permission->name }}</label>
                            </div>
                        </div>
                    @endforeach


                </div>
            </form>
        </div>
    </div>

@endsection
