@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm">New Role</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-hover table-light">
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
                                <td scope="row"></td>
                                <td>{{ $role->name }}</td>
                                <td><a href="{{ route('admin.roles.edit',$role->id) }}" class="btn btn-primary btn-sm">edit</a></td>
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

@endsection
