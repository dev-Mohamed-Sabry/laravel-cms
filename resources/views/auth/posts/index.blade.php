@extends('layouts.auth')


@section('content')
    @if (session('success'))
        <div class="row w-100">
            <div class="container col-8 align-content-center">
                <div class=" text-center alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
    @endif




    <div class="main-panel">
        <div class="content-wrapper">
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
            <div class="row">
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
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{ asset('assets/website/images/faces-clipart/pic-1.png') }}"
                                                alt="image" />
                                        </td>
                                        <td> Herman Beck </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
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
