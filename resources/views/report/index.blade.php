@extends('layout.master')

@section('custom-css')
<style>
    input:focus ~ label,
textarea:focus ~ label,
input:valid ~ label,
textarea:valid ~ label {
    font-size: 0.75em;
    color: #8e44ad;
    top: -2.25rem;
    -webkit-transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
    transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
}

.styled-input {
    float: left;
    width: 100%;
    margin: 2rem 0 1rem;
    position: relative;
}

.styled-input label {
    color: #999;
    padding: 1rem;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transition: all 0.25s cubic-bezier(0.2, 0, 0.03, 1);
    transition: all 0.25s cubic-bezier(0.2, 0, 0.03, 1);
    pointer-events: none;
}

.styled-input.wide {
    width: 100%;
}

input,
textarea {
    background: #f5f5f5;
    padding: 1rem 1rem;
    border: 0;
    width: 100%;
    font-size: 1rem;
}

input ~ span,
textarea ~ span {
    display: block;
    width: 0;
    height: 3px;
    background: #8e44ad;
    position: absolute;
    bottom: 0;
    left: 0;
    -webkit-transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
    transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
}

input:focus,
textarea:focus {
    outline: 0;
}

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
    transition: all 0.125s cubic-bezier(0.2, 0, 0.03, 1);
}

textarea {
    width: 100%;
    min-height: 15em;
}

</style>
@endsection

@section('title', 'Пријави Случај')

@section('content')
    @include('layout.navbar')
    <div class="container content mb-5">
        <div class="row">
            <h2 class="mb-3">Пријави Случај</h2>
            <div class="col-md-12">
                <form action="" method="">
                    @csrf
                    <div class="styled-input">
                        <input type="text" name="name" value="{{ old('name') }}" required />
                        <label>Име / Анонимно</label>
                        <span></span>
                    </div>
                    <div class="styled-input">
                        <input type="text" name="email" value="{{ old('email') }}" required />
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
                        <label>Порака</label>
                        <span></span>
                    </div>

                    <button type="submit" class="btn btn-outline-dark text-uppercase rounded-pill">Пријави</button>
                </form>
            </div>
        </div>
    </div>
@endsection
