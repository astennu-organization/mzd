@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'За Нас | Контакт')

@section('content')
    @include('layout.navbar')
    <div class="container content">
        <div class="row">
            <h2 class="mb-3">Контактирај не</h2>
            <div class="col-md-12">
                <form action="" method="">
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
                      <textarea name="message" value="{{ old('message') }}" required></textarea>
                      <label>Вашата порака</label>
                      <span></span>
                    </div>
                    
                    <button type="submit" class="btn btn-outline-dark text-uppercase rounded-pill">Испрати</button>
                </form>
            </div>
        </div>
    </div>w
@endsection
