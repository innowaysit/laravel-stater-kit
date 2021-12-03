@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary btn-sm">New Permission</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Permission</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($permissions as $permission)
                            <tr>
                                <td scope="row"></td>
                                <td>{{ $permission->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No permissions found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
