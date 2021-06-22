@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Галерија | Слики')

@section('content')
    @include('layout.navbar')
    <div class="content">
        @if ($photos->count())

            @foreach ($photos as $photo)
                <div class="container">
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <img class="img-responsive" alt="" src="{{ asset('/photos/' . $photo->photo) }}" />
                        <div class='text-center'>
                            <small class='text-muted'>{{ $photo->title }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
