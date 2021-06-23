@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'За Нас | Контакт')

@section('content')
    @include('layout.navbar')
    <div class="container content mb-5">
        <div class="row">
            <h2 class="mb-3">Контактирај не</h2>
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                @if (Session::has('error'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">
                        {{ Session::get('error') }}</p>
                @endif
                @if (Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('success') }}</p>
                @endif
                <form action="{{ route('about.contact.store') }}" method="POST">
                    @csrf
                    <div class="styled-input">
                        <input type="text" name="name" value="{{ old('name') }}" required />
                        <label>Име</label>
                        <span></span>
                    </div>
                    <div class="styled-input">

                        <input type="email" name="email" value="{{ old('email') }}" required />
                        <label>Е-пошта</label>
                        <span></span>
                    </div>
                    <div class="styled-input">
                        <input type="tel" name="telephone" value="{{ old('telephone') }}" required />
                        <label>Телефон</label>
                        <span></span>
                    </div>
                    <div class="styled-input wide">
                        <textarea name="message" value="{{ old('message') }}"></textarea>
                        <label>Вашата порака</label>
                        <span></span>
                    </div>

                    <button type="submit" class="btn btn-outline-dark text-uppercase rounded-pill">Испрати</button>
                </form>
            </div>
        </div>
    </div>
@endsection
