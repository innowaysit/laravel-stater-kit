@extends('layouts.mazer-admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Permissions</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <div class="row justify-content-end">
            <div class="mx-3">
                <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">New Permission</a>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                @forelse($permissions as $permission)
                    <div class="btn btn-outline-primary">{{ $permission->name }}</div>
                @empty
                    <div class="alert alert-light" role="alert">
                        No permissions found
                    </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection
