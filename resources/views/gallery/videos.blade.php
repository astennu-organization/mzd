@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Галерија | Видеа')

@section('content')
    @include('layout.navbar')
    <div class="content">
        @if ($videos->count())

            @foreach ($videos as $video)
                <div class="container">
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('/videos/' . $video->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class='text-center'>
                            <small class='text-muted'>{{ $video->title }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
