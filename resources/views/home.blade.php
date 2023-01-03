@extends('layouts.mazer-admin')

@section('heading')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            {{-- @can('view-dashboard') --}}
            <div class="col-12 col-md-3">
                <div class="card p-2"> <a href="{{ route('admin.dashboard.index') }}"
                        class="d-flex justify-content-start btn btn-default">
                        <div style="" class="me-3"><i
                                class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a>
                </div>
            </div>
            {{-- @endcan --}}



            {{-- @if (auth()->user()->hasAnyPermission(['admin-roles-list', 'admin-permissions-list', 'admin-users-list'])) --}}
            <div class="p-2 col-12 col-md-12 m-1">
                <h5 class="mb-3">Administration</h5>
                <div class="row">

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2"> <a href="{{ route('admin.permissions.index') }}"
                                class="d-flex justify-content-start btn  ">
                                <div style="" class="me-3"><i
                                        class="fas fa-list"></i> </div>Manage Permissions
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2">
                            <a href="{{ route('admin.roles.index') }}" class="d-flex justify-content-start btn  ">
                                <div style="" class="me-3"><i
                                        class="fas fa-plus"></i> </div>Manage Roles
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2">
                            <a href="{{ route('admin.users.index') }}" class="d-flex justify-content-start btn  ">

                                <div style="" class="me-3"><i
                                        class="fas fa-search"></i> </div>Manage Users
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
            <div class="col-12 col-md-3 ">
                <div class="card p-2"> <a href="{{ route('profile.show', auth()->user()->id) }}"
                        class="d-flex justify-content-start btn ">
                        <div style=""  class="me-3"><i
                                class="fas fa-sign-out-alt fa-rotate-180"></i></div>
                        Log out</a>
                </div>
            </div>

        </div>

    </div>
@endsection
