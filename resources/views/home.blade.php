@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-bottom: 10px">
            <h2>{!! $posts->total() !!} Posts</h2>
        </div>

        @foreach ($posts as $post)
            <div class="col-md-8" style="margin-bottom: 10px">
                <div class="card">
                    <div class="card-header">
                        <a href="{!! route('post', ['post' =>  $post->id]) !!}">
                            <b>({{ $post->id }})</b> {{ $post->title }}
                        </a>
                    </div>
                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->render() }}
    </div>
</div>
@endsection
