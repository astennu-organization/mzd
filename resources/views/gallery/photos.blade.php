@extends('layout.master')

@section('custom-css')
    <style>
        .card-img-overlay {
            background: rgba(0, 0, 0, 0.2);
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
            opacity: 0;
        }

        .card-img-overlay:hover {
            cursor: pointer;
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        img {
            height: 500px;
        }

    </style>
@endsection

@section('title', 'Галерија | Фотографии')

@section('content')
    @include('layout.navbar')
    <div class="content">
        @if ($photos->count())
            <div class="container">
                <div class="row">
                    @foreach ($photos as $photo)
                        <div class="col-md-4 mb-5">
                            <div class="card text-white">
                                <img src="{{ asset('/photos/' . $photo->photo) }}" class="card-img hover" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{ $photo->title }}</h5>
                                    <hr>
                                    <p class="card-text">
                                        Датум: {{ $photo->created_at->format('jS F Y h:i:s A') }}
                                        <br>
                                        Извор: {{ $photo->moderator->name }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
