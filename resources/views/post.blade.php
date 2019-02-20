@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-bottom: 10px">
            <div class="card">
                <div class="card-body">
                    <h2><b>({{ $post->id }})</b> {{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-bottom: 10px">

            @foreach ($comments as $comment)
                <div style="margin-bottom: 10px">
                    <strong>#{{ $comment->id }}</strong> <b>{{ $comment->user->name }}</b> {{ $comment->content }}
                </div>
            @endforeach

            {{ $comments->render() }}
        </div>
    </div>
</div>
@endsection
