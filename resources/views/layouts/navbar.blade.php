<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
        />

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .container{
            max-width: 1280px;
            margin: 0 auto;
            height: 100%;
            overflow: hidden;
        }
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            /* text-align: center; */
            font-size: 18px;
            background: #fff;
            
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .card-text {
            font-size: 14px;
        }

        .akun {
            font-size: 14px
        }

        .phone {
            max-height: 14px;
        }

        @media (min-width: 992px) {
            .job {
                width: 400px;
            }

            .brands {
                width: 200px
            }

            .info {
                font-size: 40px;
                text-align: center
            }

            .akun {
                font-size: 20px
            }

            .card-text {
                font-size: 18px
            }

            .phone {
                max-height: 20px;
            }
        }
    </style>
</head>
<body style="">
    <div id="navbar" class="border-bottom" style="background-color: #ebf2ff">
        <img src="/assets/logo.png" class="mx-auto d-block img-fluid w-auto py-3" alt="logo">
    </div>
    <main class="pb-4">
        @yield('content')
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            new Swiper('.swiper-container', {
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 1.2,
                paginationClickable: true,
                spaceBetween: 20,
                breakpoints: {
                    1920: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    480: {
                        slidesPerView: 3,
                        spaceBetween: 10
                    }
                }
            });
        });
    </script>
</body>
</html>
