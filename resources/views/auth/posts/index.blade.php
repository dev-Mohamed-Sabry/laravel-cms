@extends('auth.dashboard')


@section('content')
    @if (session('success'))
        <div class=" text-center alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection
