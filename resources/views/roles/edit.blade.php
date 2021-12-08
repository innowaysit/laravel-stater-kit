@extends('layouts.admin')


@section('content')

    <div class="container">
        <form action="{{ route('admin.roles.update', $role->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row justify-content-end">
                <button type="submit" class="col-2 btn btn-success">Update</button>
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
                            <input id="permissions" @if (in_array($permission->id, $role->permissions->pluck('id')->toArray())) checked @endif name="permissions[]" type="checkbox"
                                class="form-check-input" value="{{ $permission->id }}" />
                            <label id="permissions_label" class="form-check-label"
                                for="permissions">{{ $permission->name }}</label>
                        </div>
                    </div>
                @endforeach


            </div>
        </form>
    </div>

@endsection
