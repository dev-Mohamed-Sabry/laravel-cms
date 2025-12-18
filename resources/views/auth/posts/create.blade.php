@extends('layouts.auth')



@section('title', 'Create Post')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endsection


@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter Post Description',
                height: 250,
            });
        })
    </script>
@endsection

@section('content')
    <div class="row w-100 ">
        <div class="page-header mb-0 mt-5 p-4 bg-light ">
            <h3 class="page-title mx-3">Posts</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ">
                        <a href="{{ route('posts.create') }}" class="text-decoration-none">Posts</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid page-body-wrapper  ">
            <!-- partial -->
            <div class="col-12 grid-margin stretch-card ">
                <div class="card ">
                    <div class="card-body bg-light ms-3">
                        <h4 class="card-title mb-5">Create Post Form</h4>

                        {{-- Validataion Errors If Exist --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- Validataion success If Exist --}}
                        @if (session('success'))
                            <div class=" text-center alert alert-success alert-dismissible fade show mt-3" role="alert">
                                {{ session('success') }}

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form class="forms-sample" method="post" action="{{ route('posts.store') }} "
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Title -->
                            <div class="col-md-10 mb-3">
                                <label for="title" class="form-label fw-semibold">Title</label>
                                <input type="text" name="title" id="title" class="form-control form-control-lg"
                                    placeholder="Enter Title">
                            </div>

                            <!-- Description -->
                            <div class="col-md-10 mb-3 bg-none">
                                <label for="summernote" class="form-label fw-semibold">Description</label>
                                <textarea id="summernote" name="description" class="form-control" rows="6"></textarea>
                            </div>

                            <!-- Category -->

                            <div class="col-md-10 mb-3">
                                <label for="category" class="form-label fw-semibold">Categories</label>
                                <select name="category" id="category" class="form-select">
                                    <option disabled selected>Choose Category</option>
                                    @if (count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <!-- Publish Status -->
                            <div class="col-md-10 mb-3">
                                <label for="is_publish" class="form-label fw-semibold">Status</label>
                                <select name="status" id="is_publish" class="form-select">
                                    <option disabled selected>Choose Status</option>
                                    <option value="1">🟢 Publish</option>
                                    <option value="0">🟡 Draft</option>
                                </select>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-10 mb-4">
                                <label for="file" class="form-label fw-semibold">Image Upload </label>
                                <div class="input-group">
                                    <input type="file" name="file" id="file" class="form-control"
                                        accept="image/png, image/jpeg, image/jpg, image/webp">
                                </div>
                                <small class="text-muted d-block mt-1">
                                    Allowed formats: JPG, PNG – Max size 2MB
                                </small>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">


            <!-- main-panel ends -->

        @endsection
