@extends('layouts.auth')


@section('content')
    @if (session('success'))
        <div class="row w-100">
            <div class="container col-10 align-content-center">
                <div class=" text-center alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
    @endif




    <div class="main-panel  row w-100 p-0 m-0">
        <div class="content-wrapper row w-100 m-0">
            <div class="page-header">
                <h3 class="page-title"> Posts </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="{{ route('posts.index') }}"
                                class="text-decoration-none">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Posts</li>
                    </ol>
                </nav>
            </div>
            <div class="w-100 col-12">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Posts</h4>
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Title </th>
                                        <th> Description </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>

                                @foreach ($posts as $post)
                                    {{-- @dd($post) --}}
                                    <tbody>
                                        <tr>
                                            {{-- Image --}}
                                            <td class="py-1">
                                                <img src=" {{ $post->gallery ? asset('uploads/posts/' . $post->gallery?->image) : asset('uploads/no_user/no_user.jpg') }}"
                                                    alt="image" />
                                            </td>
                                            {{-- Title --}}
                                            <td> {{ $post->title }} </td>
                                            {{-- Description --}}
                                            <td>
                                                {!! $post->description !!}
                                            </td>
                                            {{-- Status --}}
                                            <td> {{ $post->is_publish == 1 ? 'Published' : 'Draft' }} </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-xs">View</button>
                                                <button type="button" class="btn btn-info btn-xs">Edit</button>
                                                <button type="button" class="btn btn-danger btn-xs">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">

                </div>
            </div>
        </div>
        <div>
            <!-- content-wrapper ends -->

        </div>
    @endsection
