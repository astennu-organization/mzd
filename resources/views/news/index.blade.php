@extends('layout.master')

@section('custom-css')
    <style>
        img {
            height: 250px;
        }

        a {
            color: unset;
        }

        a:hover {
            color: unset;
        }

        .go-corner {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 32px;
            height: 32px;
            overflow: hidden;
            top: 0;
            right: 0;
            background-color: #00838d;
            border-radius: 0 4px 0 32px;
        }

        .go-arrow {
            margin-top: -4px;
            margin-right: -4px;
            color: white;
            font-family: courier, sans;
        }

        .card4 {
            display: block;
            top: 0px;
            position: relative;
            background-color: #fff;
            border-radius: 4px;
            padding: 16px 0;
            text-decoration: none;
            overflow: hidden;
            border: 1px solid #ccc;
        }

        .card4 .go-corner {
            background-color: #a92ed9;
            height: 100%;
            width: 50px;
            padding-right: 9px;
            border-radius: 0;
            transform: skew(6deg);
            transition: 0.3s;
            margin-right: -80px;
            align-items: start;
            background-image: linear-gradient(-45deg, #8f479a 1%, #a92ed9 100%);
        }

        .card4 .go-arrow {
            font-size: 50px;
            transform: skew(-6deg);
            margin-left: -2px;
            opacity: 0;
        }

        .card4:hover {
            border: 1px solid #a92ed9;
        }

        .card4:hover .go-corner {
            margin-right: -27px;
        }

        .card4:hover .go-arrow {
            opacity: 1;
        }

    </style>
@endsection

@section('title', 'Новости | Почетна')

@section('content')
    @include('layout.navbar')
    <div class="content">
        <div class="container">
            <div class="row">
                @if ($news->count())
                    @foreach ($news as $post)
                        <div class="col-md-4 mb-3">
                            <a href="{{ route('news.show', $post->id) }}">
                                <div class="card card4">
                                    <div class="card-body">
                                        <h5 class=" card-title">{{ $post->title }}</h5>
                                        <img src="{{ asset('/photos/' . $post->image) }}" alt="{{ $post->title }}">
                                        <p class="card-text pt-3">
                                            {{-- Trim long text. --}}
                                            @php
                                                $s = $post->content;
                                                if (strlen($s) > 50) {
                                                    $offset = 50 - 3 - strlen($s);
                                                    $s = substr($s, 0, strrpos($s, ' ', $offset)) . '....';
                                                    echo $s;
                                                } else {
                                                    echo $s;
                                                }
                                            @endphp
                                        </p>
                                        <hr>
                                        <small class="card-text text-muted date">
                                            Датум: {{ $post->created_at->format('jS F Y h:i:s A') }}
                                            <br>
                                            Извор: {{ $post->moderator->name }}
                                        </small>
                                        <br>
                                        <div class="dimmer"></div>
                                        <div class="go-corner" href="#">
                                            <div class="go-arrow">
                                                →
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
