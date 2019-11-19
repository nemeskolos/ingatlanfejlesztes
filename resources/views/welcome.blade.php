<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ingatlan közvetítés</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/style/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
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
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
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
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Bejelentkezés</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Regisztráció</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="jumbotron text-center img" style="margin-bottom:0">

            <h1>Ingatlan közvetítő</h1>
            <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>
            <a href="/ad" class="badge badge-light">Hirdetések</a>
            <a href="/faq" class="badge badge-light">GYIK</a>
            <a href="/contact_us" class="badge badge-light">Kapcsolat</a>
        </div>
        </div>

       
    </div>
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
      <p class="post-info">2019 © SZTE <br>
        Info-Bionika || Rendszerfejlesztés
      </p>
    </div>
</body>

</html>