@extends('layout.master')

@section('custom-css')

@endsection

@section('title', $post->title)

@section('content')
    @include('layout.navbar')
    <div class="content">
        <div class="container">
            <p>{{ $post->title }}</p>
            <img src="{{ asset('/photos/' . $post->image) }}" alt="{{ $post->title }}">
            <p>{{ $post->content }}</p>
            <p>
                Датум: {{ $post->created_at->format('jS F Y h:i:s A') }}
                <br>
                Извор: {{ $post->moderator->name }}
            </p>
        </div>
    </div>
    </div>
@endsection
