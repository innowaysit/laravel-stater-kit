@extends('layouts.mazer-admin')


@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Permissions</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New Permission</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <form action="{{ route('admin.permissions.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name">Permission Name</label>
                        <input id="name" name="name" type="text" class="form-control"
                            placeholder="e.g. blog-write" />
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
