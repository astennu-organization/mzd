@extends('layout.master')

@section('custom-css')
    <style>
        body {
            height: 100vh;
            background: -webkit-gradient(linear,
                    left bottom,
                    left top,
                );
            background: linear-gradient(to top, #c587e2 0%, #7456AC 100%);
        }

        #container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            padding: 0 20%;
        }

        @media (max-width: 968px) {
            #container {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
        }

        #container .item {
            position: relative;
            width: 240px;
            height: 240px;
            cursor: pointer;
            z-index: 0;
            margin: 20px;
        }

        @media (max-width: 968px) {
            #container .item {
                width: 100%;
            }
        }

        #container .item .content {
            height: 100%;
            width: 100%;
            border: 2px solid #e8e8ee;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            padding: 10px 15px;
            border-radius: 4px;
            background: #fff;
            -webkit-transform: rotate(0) scale(1);
            transform: rotate(0) scale(1);
            -webkit-transition: all 0.2s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.2s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3);
        }

        #container .item .content h2 {
            font-weight: 600;
            color: #5a5863;
            -webkit-transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
        }

        #container .item .content:after {
            position: absolute;
            bottom: -2px;
            right: -2px;
            content: "";
            width: calc(100% + 4px);
            height: 4px;
            background: #8b00fd;
            border-radius: 0 0 4px 4px;
            -webkit-transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
        }

        #container .item .previews {
            position: relative;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        #container .item .previews:nth-child(2) .preview-image {
            right: 0;
        }

        #container .item .previews .preview-image {
            width: 160px;
            height: 110px;
            -webkit-transition: all 0.2s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.2s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            position: absolute;
            bottom: 10px;
            left: 0;
            overflow: hidden;
            border-radius: 4px;
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3);
        }

        #container .item .previews .preview-image img {
            width: 140%;
        }

        #container .item:hover {
            z-index: 5;
        }

        #container .item:hover .content {
            background: #5a5863;
            border: 2px solid #5a5863;
            -webkit-transform: rotate(0) scale(1.2);
            transform: rotate(0) scale(1.2);
            -webkit-animation: shake 0.4s 1;
            animation: shake 0.4s 1;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
            -webkit-box-shadow: -27px 18px 80px 0 rgba(0, 0, 0, 0.3);
            box-shadow: -27px 18px 80px 0 rgba(0, 0, 0, 0.3);
            -webkit-transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
        }

        #container .item:hover .content:after {
            width: 0;
            -webkit-transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
        }

        #container .item:hover .content h2 {
            color: #e8e8ee;
            -webkit-transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.3s cubic-bezier(0.28, 0.05, 0.65, 0.97);
        }

        #container .item:hover .previews .preview-image {
            -webkit-transition: all 0.2s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            transition: all 0.2s cubic-bezier(0.28, 0.05, 0.65, 0.97);
            -webkit-box-shadow: -8px 5px 30px 0 rgba(0, 0, 0, 0.2);
            box-shadow: -8px 5px 30px 0 rgba(0, 0, 0, 0.2);
        }

        #container .item:hover .previews .preview-image:nth-child(1) {
            -webkit-transform: rotate(6deg) translate(-150px, -100px);
            transform: rotate(6deg) translate(-150px, -100px);
            -webkit-transition-delay: 0.4s;
            transition-delay: 0.4s;
        }

        #container .item:hover .previews .preview-image:nth-child(2) {
            -webkit-transform: rotate(6deg) translate(-120px, 0);
            transform: rotate(6deg) translate(-120px, 0);
            -webkit-transition-delay: 0.45s;
            transition-delay: 0.45s;
        }

        #container .item:hover .previews .preview-image:nth-child(3) {
            -webkit-transform: rotate(-7deg) translate(-40px, 100px);
            transform: rotate(-7deg) translate(-40px, 100px);
            -webkit-transition-delay: 0.55s;
            transition-delay: 0.55s;
        }

        #container .item:hover .previews .preview-image:nth-child(4) {
            -webkit-transform: rotate(-8deg) translate(130px, 70px);
            transform: rotate(-8deg) translate(130px, 70px);
            -webkit-transition-delay: 0.5s;
            transition-delay: 0.5s;
        }

        #container .item:hover .previews .preview-image:nth-child(5) {
            -webkit-transform: rotate(-6deg) translate(180px, -40px);
            transform: rotate(-6deg) translate(180px, -40px);
            -webkit-transition-delay: 0.6s;
            transition-delay: 0.6s;
        }

        @-webkit-keyframes shake {
            0% {
                -webkit-transform: rotate(3deg) scale(1.2);
                transform: rotate(3deg) scale(1.2);
            }

            20% {
                -webkit-transform: rotate(-3deg) scale(1.2);
                transform: rotate(-3deg) scale(1.2);
            }

            40% {
                -webkit-transform: rotate(3deg) scale(1.2);
                transform: rotate(3deg) scale(1.2);
            }

            60% {
                -webkit-transform: rotate(-3deg) scale(1.2);
                transform: rotate(-3deg) scale(1.2);
            }

            80% {
                -webkit-transform: rotate(3deg) scale(1.2);
                transform: rotate(3deg) scale(1.2);
            }

            100% {
                -webkit-transform: rotate(0) scale(1.2);
                transform: rotate(0) scale(1.2);
            }
        }

        @keyframes shake {
            0% {
                -webkit-transform: rotate(3deg) scale(1.2);
                transform: rotate(3deg) scale(1.2);
            }

            20% {
                -webkit-transform: rotate(-3deg) scale(1.2);
                transform: rotate(-3deg) scale(1.2);
            }

            40% {
                -webkit-transform: rotate(3deg) scale(1.2);
                transform: rotate(3deg) scale(1.2);
            }

            60% {
                -webkit-transform: rotate(-3deg) scale(1.2);
                transform: rotate(-3deg) scale(1.2);
            }

            80% {
                -webkit-transform: rotate(3deg) scale(1.2);
                transform: rotate(3deg) scale(1.2);
            }

            100% {
                -webkit-transform: rotate(0) scale(1.2);
                transform: rotate(0) scale(1.2);
            }
        }

        /*# sourceMappingURL=style.css.map */

    </style>
@endsection

@section('title', 'Галерија | Почетна')

@section('content')
    @include('layout.navbar')
    <div id="container">
        <div class="item">
            <a href="{{ route('gallery.photos') }}">

                <div class="content">
                    <h2>Слики</h2>
                </div>

                <div class="previews">
                    <div class="preview-image">
                        <img src="https://i.ytimg.com/vi/c7oV1T2j5mc/maxresdefault.jpg">
                    </div>
                    <div class="preview-image">
                        <img src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg">
                    </div>
                    <div class="preview-image">
                        <img
                            src="http://thirtyoneseventyfive.com/wp-content/uploads/2018/07/archaicawful-landscape-photo-ideas-design-garden-creative-landscapes-contest-viewbug.jpg">
                    </div>
                    <div class="preview-image">
                        <img
                            src="https://cdn.fstoppers.com/styles/large/s3/lead/2018/07/take_better_shots_with_your_drone_landscape_photos.jpg">
                    </div>
                    <div class="preview-image">
                        <img src="https://d31fr2pwly4c4s.cloudfront.net/8/6/c/1080632_0_landscape-photography_400.jpg">
                    </div>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="{{ route('gallery.videos') }}">
                <div class="content">
                    <h2>Видеа</h2>
                </div>

                <div class="previews">
                    <div class="preview-image">
                        <img src="https://cdn.mos.cms.futurecdn.net/raYa9qNMVG8wDY4L3qp9c8.jpg">
                    </div>
                    <div class="preview-image">
                        <img
                            src="https://www.popphoto.com/sites/popphoto.com/files/styles/1000_1x_/public/images/2018/07/00-otherworldly-national-park.jpg?itok=1bxhktRC&fc=50,50">
                    </div>
                    <div class="preview-image">
                        <img src="https://www.adorama.com/alc/wp-content/uploads/2016/07/americanwest-mezz-1024x576.jpg">
                    </div>
                    <div class="preview-image">
                        <img
                            src="https://www.nationalgeographic.com/content/dam/photography/photos/000/675/67547.ngsversion.1467941445762.adapt.1900.1.jpg">
                    </div>
                    <div class="preview-image">
                        <img
                            src="https://i2.wp.com/fotogr8.com/wp-content/uploads/2016/08/jeffrey-swanson-landscape-photographer.jpg?resize=600%2C397&ssl=1">
                    </div>
                </div>
            </a>
        </div>

    </div>
@endsection
