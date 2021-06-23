@extends('layout.master')

@section('custom-css')

@endsection

@section('title', 'Модератор | Почетна')

@section('content')

    <div class="container mt-5">
        <div class="text-center float-right">
            <a href="{{ route('moderator.logout') }}" class="btn btn-dark">Logout</a>
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
                <h3 class="text-center">Photo Gallery Upload</h3>
                <form action="{{ route('photo.gallery.upload') }}" class="form-image-upload" method="POST"
                    enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <strong>Photo:</strong>
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <br />
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Video Upload --}}
            <div class="col-md-6 my-2">
                <h3 class="text-center">Video Gallery Upload</h3>
                <form action="{{ route('video.gallery.upload') }}" class="form-image-upload" method="POST"
                    enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <strong>Video:</strong>
                                <input type="file" name="video" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <br />
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- News Create --}}
            <div class="col-md-6 my-5">
                <h3 class="text-center">News Creator</h3>
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <strong>Content:</strong>
                                <input type="text" name="content" class="form-control" placeholder="Content">
                            </div>

                            <div class="form-group text-center">
                                <br />
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
