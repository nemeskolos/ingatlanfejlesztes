<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hirdetések kezelése</title>

    <!-- Fonts -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #495057;
            border-radius: .3rem;
        }

        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: fixed;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 40px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

            {
            font-family: 'Lato', sans-serif;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>

</head>

<body>

    <video autoplay muted loop id="myVideo">
        <source src="videoplayback.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="content">
        <h1>Ingatlanközvetítés</h1>
        <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>

        <div class="jumbotron text-center img" style="margin-bottom:0">

            <!--ide jön a kód-->

            <body>
                <div class="container">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <h3 class="jumbotron">Képfeltöltés</h3>
                    <form method="post" action="{{url('form')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <p type="text" class="form-controll offset-md-4">Töltsön fel egy képet a házról!(MAX 2MB)</p>
                        <div class="input-group control-group increment">
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-dark" style="margin-top:10px">Mehet</button>

                    </form>
                </div>


                <script type="text/javascript">
                    $(document).ready(function() {

                        $(".btn-success").click(function() {
                            var html = $(".clone").html();
                            $(".increment").after(html);
                        });

                        $("body").on("click", ".btn-danger", function() {
                            $(this).parents(".control-group").remove();
                        });

                    });
                </script>

        </div>

        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            @if (Route::has('login'))
            <div class="overlay-content">
                @auth
                <a href="{{ url('/') }}">Kezdőlap</a>
                <a href="{{ url('/home') }}">Profil</a>
                <a href="{{ url('/ad') }}">Hirdetések</a>
                <a href="{{ url('/faq') }}">GYIK</a>
                <a href="{{ url('/contact_us') }}">Kapcsolat</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Kijelentkezés') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @else

                <a href="{{ route('login') }}">Bejelentkezés</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Regisztráció</a>
                <a href="{{ url('/') }}">Kezdőlap</a>
                <a href="{{ url('/ad') }}">Hirdetések</a>
                <a href="{{ url('/faq') }}">GYIK</a>
                <a href="{{ url('/contact_us') }}">Kapcsolat</a>
                @endif
                @endauth
            </div>
            @endif
        </div>


        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menü</span>

        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>

    </div>
</body>

</html>