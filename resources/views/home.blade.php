@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>

                    <a href="{{ route('admin.roles.index') }}" class="btn btn-primary m-1">Roles</a>
                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-primary m-1">Permissions</a>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary m-1">Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
