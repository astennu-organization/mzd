@extends('layout.master')

@section('custom-css')
@endsection

@section('title', 'Галерија | Видеа')

@section('content')
    @include('layout.navbar')
    <div class="content">
        @if ($videos->count())

            <div class="container">
                <div class="row text-center">
                    @foreach ($videos as $video)
                        <div class="col-xl-6 col-lg-12 col-md-12 mb-5">
                            <video width="560" height="315" controls>
                                <source src="{{ asset('/videos/' . $video->video) }}" type="video/mp4">
                            </video>
                            <p class="text-muted">{{ $video->title }}</p>
                            <small class="text-muted date">
                                Датум: {{ $video->created_at->format('jS F Y h:i:s A') }}
                                <br>
                                Извор: {{ $video->moderator->name }}
                            </small>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
