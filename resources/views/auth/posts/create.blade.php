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
        $('#summernote').summernote({
            placeholder: 'Enter Post Description',
            tabsize: 2,
            height: 170,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection

@section('content')
    <div class="row w-100 ">

        <div class="page-header mb-0 mt-5 p-4 bg-light ">
            <h3 class="page-title mx-3">Posts</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ">
                        <a href="{{ route('posts.index') }}" class="text-decoration-none">Posts</a>
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
                        {{-- <p class="card-description"> Post Details</p> --}}
                        <form class="forms-sample">
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
                                <label for="category" class="form-label fw-semibold">Category</label>
                                <select name="category" id="category" class="form-select">
                                    <option disabled selected>Choose Category</option>
                                </select>
                            </div>

                            <!-- Publish Status -->
                            <div class="col-md-10 mb-3">
                                <label for="is_publish" class="form-label fw-semibold">Status</label>
                                <select name="is_publish" id="is_publish" class="form-select">
                                    <option disabled selected>Choose Status</option>
                                    <option value="1">🟢 Publish</option>
                                    <option value="0">🟡 Draft</option>
                                </select>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-10 mb-4">
                                <label class="form-label fw-semibold">Post Image</label>

                                <div class="input-group">
                                    <input type="file" name="img[]" class="form-control">
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
            {{-- </div> --}}
        @endsection
