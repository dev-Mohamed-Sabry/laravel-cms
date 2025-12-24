@extends('layouts.auth')

@section('styles')
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    {{-- Swal --}}
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.26.17/dist/sweetalert2.min.css
" rel="stylesheet">
@endsection

@section('content')
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

            @if (session('success'))
                <div class="row w-100">
                    <div class="container col-10 align-content-center">
                        <div class=" text-center alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
            @endif

            <div class="w-100 col-12">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title">Posts</h4> --}}
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Title </th>
                                        <th> Description </th>
                                        <th> Category </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {{-- Testing --}}
                                    {{-- @php
                                        $posts = collect();
                                    @endphp --}}
                                    @forelse ($posts as $post)
                                        <tr>
                                            {{-- Image --}}
                                            <td class="py-1">
                                                <img src=" {{ $post->image }}" alt="image" />
                                            </td>
                                            {{-- Title --}}
                                            <td> {{ $post->title }} </td>
                                            {{-- Description --}}
                                            <td>
                                                {{ Str::limit(strip_tags($post->description), 15, '...') }}
                                            </td>
                                            <td>
                                                {{ $post->category->name }}
                                            </td>
                                            {{-- Status --}}
                                            <td> {{ $post->is_publish == 1 ? '🟢 Published' : '🟡 Draft' }} </td>
                                            <td>
                                                {{-- View --}}
                                                <a href="{{ route('posts.show', $post->id) }} " type="button"
                                                    class="btn btn-success btn-xs"><i class="fa-solid fa-eye"></i></a>
                                                {{-- Edit --}}
                                                <a href="" type="button" class="btn btn-info btn-xs"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                {{-- Delete --}}
                                                <a href="" type="button" class="btn btn-danger btn-xs"><i
                                                        class="fa-solid fa-trash "></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="row w-100">
                                            <div class="container col-10 align-content-center">
                                                <div class=" text-center alert alert-info alert-dismissible fade show mt-3"
                                                    role="alert">
                                                    No Posts Found
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </tbody>
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
