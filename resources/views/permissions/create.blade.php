@extends('layouts.admin')


@section('content')

    <div class="container">
        <form action="{{ route('admin.permissions.store') }}" method="post">
            @csrf
            <div class="row justify-content-end">
                <button type="submit" class="col-2 btn btn-primary">Submit</button>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name">Permission Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="e.g. blog-write"/>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
