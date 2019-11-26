<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kapcsolat</title>

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

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="text-dark">Kapcsolat</h1>
                <p class="text-dark">
                    <div class="row">

                        <div class="column">
                            <div class="card" style="width: 16rem; height: 13rem;">
                                <div style="width:100%; text-align:center">
                                    <img src="http://hirdetes2019.tk/contactus.jpg" class="card-img-top:center" alt="..." style="max-width: 8rem;">
                                </div>
                                <div class="card-body">
                                    <h5 class="text-dark">Ügyintéző</h5>
                                    <p class="text-dark">Várady Tamás </p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card" style="width: 16rem; height: 13rem;">
                                <div style="width:100%; text-align:center">
                                    <img src="http://hirdetes2019.tk/contactphone.jpg " class="card-img-top:center" alt="..." style="max-width: 8rem;">
                                </div>
                                <div class="card-body">
                                    <h5 class="text-dark">Telefon</h5>
                                    <p class="text-dark">+3630/123-4567 </p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card" style="width: 16rem; height: 13rem;">
                                <div style="width:100%; text-align:center">
                                    <img src="http://hirdetes2019.tk/contactemail.jpg" class="card-img-top:center" alt="..." style="max-width: 8rem;">
                                </div>
                                <div class="card-body">
                                    <h5 class="text-dark">E-mail</h5>
                                    <p class="text-dark">2019.info-bionika@rf.hu </p>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card" style="width: 16rem; height: 13rem;">
                                <div style="width:100%; text-align:center">
                                    <img src="http://hirdetes2019.tk/contactskype.jpg" class="card-img-top:center" alt="..." style="max-width: 8rem;">
                                </div>
                                <div class="card-body">
                                    <h5 class="text-dark">Skype</h5>
                                    <p class="text-dark">ingatlan_bionika </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </p>
            </div>
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