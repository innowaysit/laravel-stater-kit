@extends('layouts.mazer-admin')

@section('heading')
    Role management
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Roles</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row my-2 justify-content-end">
        <div class="mx-auto">
            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm">New Role</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Roles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($roles as $role)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td><a href="{{ route('admin.roles.edit', $role->id) }}"
                                                class="btn btn-primary btn-sm">edit</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No roles found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
