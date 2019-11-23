@extends('layouts.app')
<title>Sikeres</title>
@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>GYIK</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/style/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/style/style.css">


</head>

<body>

    <div class="container">


        <div class="jumbotron text-center img" style="margin-bottom:0">

            <h1>Ingatlan közvetítő</h1>
            <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>
        </div>

        <!--sikeres hirdetés-->
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Sikeres hirdetés feladás</h4>
            <p>Köszönjük, hogy oldalunkat választottad ingatlan eladásod közvetítéséhez!<br>
                Hirdetésedet rögzítettük. Munkatársaink ellenőrzik a feltöltött adatokat<br>
                és jóváhagyás után megjelenik az oldalon.</p>
            <hr>
            <p class="mb-0">Ezt követően bármikor szerkesztheted a hirdetés adatait.</p>

        </div>


        <!--sikeres hirdetés-->



</body>

</html>
<a href="home" type="button" class="btn btn-sacondary btn-lg btn-block">Vissza a profilra</a>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p class="post-info">2019 © SZTE <br>
        Info-Bionika || Rendszerfejlesztés
    </p>
</div>

@endsection