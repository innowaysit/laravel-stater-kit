@extends('layouts.admin')


@section('content')

    <div class="container">
        <form action="{{ route('admin.roles.store') }}" method="post">
            @csrf
            <div class="row justify-content-end">
                <button type="submit" class="col-2 btn btn-primary">Submit</button>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name">Role Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="e.g. Manager"/>
                    </div>
                </div>
                <h3>Permissions</h3>
                @foreach ($permissions as $permission)
                <div class="col-12 col-md-4">
                    <div class="form-check mb-3">
                        <input id="permissions" name="permissions[]" type="checkbox" class="form-check-input" value="{{ $permission->id }}" />
                        <label id="permissions_label" class="form-check-label" for="permissions">{{ $permission->name }}</label>
                    </div>
                </div>
                @endforeach
            </div>
        </form>
    </div>

@endsection
