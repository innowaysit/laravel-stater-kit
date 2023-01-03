@extends('layouts.mazer-admin')


@section('content')
    <div class="row my-2">
        <div class="col-12 col-md-4">
            <div class="card shadow-none">
                <div class="card-body p-3">
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $user->photo) }}" class="img-fluid rounded w-50"
                            alt="profile-image">
                    </div>
                    <div class="">
                        {{-- <p class="mb-2">UI/UX Designer</p> --}}
                        <h4 class="mb-1">{{ $user->name }}</h4>
                        <i class="fa fa-envelope me-1"></i> {{ $user->email }}
                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="list-group">
                <a href="{{ route('profile.edit', $user) }}" class="list-group-item list-group-item-action py-3">
                    <i class="fa fa-cog me-1"></i> Edit
                    Profile</a>
                <a href="#" class="list-group-item text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fa fa-power-off me-1 text-danger"></i>
                    Logout</a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
            </div>
        </div>

    </div>
@endsection
