@extends('layouts.app')


@section('content')

    <div class="container">
        <form action="{{ route('admin.users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row justify-content-end">
                <button type="submit" class="col-2 btn btn-success">Update</button>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">User Name</label>
                        <input id="name" name="name" type="text" class="form-control"  value="{{ old('', $user->name) }}"/>
                        @error('name')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 col-12">
                    <label id="email_label" for="email">Email Address</label>
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('', $user->email) }}" />
                    @error('email')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <h3>Roles</h3>
                @foreach ($roles as $role)
                <div class="col-12 col-md-4">
                    <div class="form-check mb-3">
                        <input id="roles"
                        @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif
                         name="roles[]" type="checkbox" class="form-check-input" value="{{ $role->id }}"
                       />
                        <label id="roles_label" class="form-check-label" for="roles">{{ $role->name }}</label>
                    </div>
                </div>
                @endforeach
            </div>
        </form>
    </div>

@endsection
