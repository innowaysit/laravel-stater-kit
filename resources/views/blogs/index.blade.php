@extends('layouts.mazer-admin')


@section('content')


    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>


    @can('admin-blog-create')
        <div class="row justify-content-end my-2">
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
