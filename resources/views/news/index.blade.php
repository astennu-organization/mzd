@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Новости | Почетна')

@section('content')
    @include('layout.navbar')
    <div class="content">
        <div class="container">
            <div class="row">
                @if ($news->count())
                    @foreach ($news as $post)
                        <div class="col-md-4 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class=" card-title">{{ $post->title }}</h5>
                                    <img src="{{ asset('/photos/' . $post->image) }}" alt="{{ $post->title }}">
                                    <p class=" card-text text-center">
                                        {{-- Trim long text. --}}
                                        @php
                                            $s = $post->content;
                                            if (strlen($s) > 50) {
                                                $offset = 50 - 3 - strlen($s);
                                                $s = substr($s, 0, strrpos($s, ' ', $offset)) . 'Прегледај за целосна содржина!';
                                                echo $s;
                                            } else {
                                                echo $s;
                                            }
                                        @endphp
                                    </p>
                                    <hr>
                                    <small class="card-text text-center small">Датум: {{ $post->created_at }}</small>
                                    <br>
                                    <small class="card-text text-center small">Модератор:
                                        {{ $post->moderator->email }}</small>
                                    <div class="text-center">
                                        <a href="#" class="btn custom-primary-bg text-light my-3">Прегледај</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
