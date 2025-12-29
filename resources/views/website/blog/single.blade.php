@extends('layouts.website')


@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Post Details</h1>
                        <p>{{ $post->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post post-single">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i>
                                    {{ optional($post->created_at)->format('d M Y H:i') ?? 'Not Available' }}

                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY ADMIN
                                </li>
                                <li>
                                    <i class="ion-pricetags"> </i>{{ $post?->category?->name ?? 'No Category' }}
                                </li>

                            </ul>
                        </div>
                        <div class="post-thumb" style="text-align: center">
                            <img class="img-fluid" src="{{ $post->image }}" alt="post-Image"
                                style="width: 700px; height:300px;">
                        </div>
                        <div class="post-content post-excerpt">
                            <p> Description: </p>
                            <p>{!! $post->description !!}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
