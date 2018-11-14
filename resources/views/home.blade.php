@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($newestPosts as $post)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>({{ $post->id }})</b> {{ $post->title }}</div>
                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
