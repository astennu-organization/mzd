@extends('layout.master')

@section('custom-css')
<style>
    h3 {
        font-weight: 500;
        font-size: 24px;
    }
</style>
@endsection

@section('title', $post->title)

@section('content')
    @include('layout.navbar')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">

                    <h1>{{ $post->title }}</p>
                    <img src="{{ asset('/photos/' . $post->image) }}" alt="{{ $post->title }}">
                    <h3>{{ $post->content }}</h3>
                    <hr>
                    <p class="text-muted date">
                        Датум: {{ $post->created_at->format('jS F Y h:i:s A') }}
                        <br>
                        Извор: {{ $post->moderator->name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
