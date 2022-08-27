@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            {{-- @can('view-dashboard') --}}
            <div class="col-12 col-md-3 ">
                <div class="card p-2"> <a href="{{ route('admin.dashboard.index') }}"
                        class="d-flex justify-content-start btn ">
                        <span style="font-size: 20px;color:rgb(214, 92, 62)" class="mr-2"><i
                                class="fas fa-tachometer-alt"></i></span>
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
                                <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                        class="fas fa-list"></i> </span>Manage Permissions
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2">
                            <a href="{{ route('admin.roles.index') }}" class="d-flex justify-content-start btn  ">
                                <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                        class="fas fa-plus"></i> </span>Manage Roles
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2">
                            <a href="{{ route('admin.users.index') }}" class="d-flex justify-content-start btn  ">

                                <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                        class="fas fa-search"></i> </span>Manage Users
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
            <div class="col-12 col-md-3 ">
                <div class="card p-2"> <a href="{{ route('admin.dashboard.index') }}"
                        class="d-flex justify-content-start btn ">
                        <span style="font-size: 20px;color:rgb(214, 92, 62)" class="mr-2"><i
                                class="fas fa-sign-out-alt fa-rotate-180"></i></span>
                        Log out</a>
                </div>
            </div>

            @if (auth()->user()->hasAnyPermission(['wallet-transaction-create', 'wallet-transaction-report']))
                <div class="p-2 col-12 col-md-12 m-1">
                    <h5 class="mb-3">WALLET</h5>
                    <div class="row">
                        @can('wallet-transaction-create')
                            <div class="col-12 col-md-3 ">
                                <div class="card p-2">
                                    <a href="{{ route('admin.wallet-transaction.create') }}"
                                        class="d-flex justify-content-start btn  ">
                                        <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                                class="fas fa-plus"></i> </span>New Transaction
                                    </a>
                                </div>
                            </div>
                        @endcan
                        @can('wallet-transaction-create')
                            <div class="col-12 col-md-3 ">
                                <div class="card p-2">
                                    <a href="{{ route('admin.wallet-transaction.index') }}"
                                        class="d-flex justify-content-start btn  ">
                                        <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                                class="fas fa-list"></i> </span>Wallet All Transaction
                                    </a>
                                </div>
                            </div>
                        @endcan
                        @can('wallet-transaction-report')
                            <div class="col-12 col-md-3 ">
                                <div class="card p-2">
                                    <a href="{{ route('admin.wallet.reports') }}" class="d-flex justify-content-start btn  ">
                                        <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                                class="fas fa-wallet"></i> </span> Report
                                    </a>
                                </div>
                            </div>
                        @endcan

                    </div>
                </div>
            @endif

        </div>

    </div>
@endsection
