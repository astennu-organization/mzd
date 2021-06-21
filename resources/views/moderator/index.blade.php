@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Модератор | Почетна')

@section('content')
    <div class="text-center">
        <a href="{{ route('moderator.logout') }}" class="btn">Logout</a>
    </div>
@endsection
