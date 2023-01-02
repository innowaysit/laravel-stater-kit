@extends('layouts.mazer-admin')


@section('content')


    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New Blog</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card p-4 m-2">
        <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>


            <div class="mb-3">
                <label id="title_label" for="title">Title</label>
                <input id="title" name="title" type="text" class="form-control" />
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="photo">Blog Header Photo</label>
                <div class="custom-file">

                    <div class="input-group mb-3 d-flex">
                        <img id="output" height="100" width="200" class="img-fluid rounded" />
                        <input id="photo" name="photo" type="file" class="custom-file-input1 p-2" accept="image/*"
                            aria-label="File Upload" onchange="loadFile(event)" />
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <script>
                        var loadFile = function(event) {
                            var reader = new FileReader();
                            reader.onload = function() {
                                var output = document.getElementById('output');
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(event.target.files[0]);
                        };
                    </script>
                </div>
            </div>

            <div class="mb-3">
                <label id="video_label" for="video">Video Link</label>
                <input id="video" name="video" type="text" class="form-control" />
                @error('video')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label id="content_label" for="content" class="required">Content</label>
                <textarea id="content" name="content" rows="5" class="form-control"></textarea>
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="select">
                <label id="status_label" for="status">Status</label>
                <div class="input-group mb-3">
                    <select id="status" name="status" class="form-control form-select" aria-label="Status">
                        <option></option>
                        <option value="ACTIVE">ACTIVE</option>
                        <option value="INACTIVE">INACTIVE</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>



        </form>
    </div>


@endsection
