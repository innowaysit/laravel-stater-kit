@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">New User</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td><a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-primary btn-sm">edit</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No users found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
