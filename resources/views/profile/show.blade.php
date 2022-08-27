@extends('layouts.admin')


@section('content')
    <div class="row my-2">
        <div class="col-12 col-md-4">
            <div class="card shadow-none card-block card-stretch card-height">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="profile-img position-relative">
                            <img src="{{ asset('storage/' . $user->photo) }}" class="img-fluid rounded bg-gray avatar-110"
                                alt="profile-image">
                        </div>
                        <div class="ml-3">
                            {{-- <p class="mb-2">UI/UX Designer</p> --}}
                            <h4 class="mb-1">{{ $user->name }}</h4>
                            <i class="fa fa-envelope mr-1"></i> {{ $user->email }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="list-group">
                <a href="{{ route('profile.edit', $user) }}" class="list-group-item list-group-item-action">
                    <i class="fa fa-cog mr-1"></i> Edit
                    Profile</a>
                <a href="#" class="list-group-item list-group-item-action text-orange"
                    onclick="return $('#logout-form').submit();"><i class="fa fa-power-off mr-1"></i>
                    Logout</a>
            </div>
        </div>

    </div>
@endsection
