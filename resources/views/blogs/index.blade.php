@extends('layouts.admin')


@section('content')


    <div class="my-2">
        <h1>Blog list</h1>
    </div>


    @can('blog-create')
        <div class="row justify-content-end">
            <div class="mx-3">
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mt-2">Create Blog</a>
            </div>
        </div>
    @endcan

    <div class="row my-2">
        @foreach ($blogs as $blog)
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $blog->photo) }}" class="card-img-top" alt="" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">
                            <span class="badge badge-primary">{{ $blog->status }}</span>
                            @can('blog-edit')
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm rounded">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            @endcan
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


@endsection
