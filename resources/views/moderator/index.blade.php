@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Модератор | Почетна')

@section('content')

    <div class="container mt-5">
        <div class="text-center float-right">
            <a href="{{ route('moderator.logout') }}" class="btn btn-dark">Одјави се</a>
            <a href="{{ route('home.index') }}" class="btn btn-dark">Почетна</a>
        </div>
        <div class="row mt-5">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            {{-- Photo Upload --}}
            <div class="col-md-6 my-2">
                <h3 class="text-center">Прикачи фотографија</h3>
                <form action="{{ route('photo.gallery.upload') }}" class="form-image-upload" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <strong>Наслов:</strong>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Фотографија:</strong>
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <br />
                                <button type="submit" class="btn purple-btn">Прикачи</button>
                                <a href="{{ route('photo.gallery.index') }}" class="btn purple-btn">Фотографии</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Video Upload --}}
            <div class="col-md-6 my-2">
                <h3 class="text-center">Прикачи видео</h3>
                <form action="{{ route('video.gallery.upload') }}" class="form-image-upload" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <strong>Наслов:</strong>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Видео:</strong>
                                <input type="file" name="video" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <br />
                                <button type="submit" class="btn purple-btn">Прикачи</button>
                                <a href='{{ route('video.gallery.index') }}' class="btn purple-btn">Видеа</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- News Create --}}
            <div class="col-md-6 my-5">
                <h3 class="text-center">Креирај новост</h3>
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <strong>Наслов:</strong>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Фотографија:</strong>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Содржина:</strong>
                                <textarea class="form-control" name="content" style="height: 100px"></textarea>
                            </div>

                            <div class="form-group text-center">
                                <br />
                                <button type="submit" class="btn purple-btn">Креирај</button>
                                <a href="{{ route('news.index') }}" class="btn purple-btn">Новости</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
