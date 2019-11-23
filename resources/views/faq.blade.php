@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">


<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GYIK</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="/style/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <div class="container">


    <div class="jumbotron text-center img" style="margin-bottom:0">

      <h1>Ingatlan közvetítő</h1>
      <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>
    </div>

    <!--  Gyakran ismetelt kerd kezdo-->
    <h1 class="dis">Gyakran ismételt kérdések</h1>

    <ul class="list-unstyled">
      <li>Közvetítői díj?</li>
      <ul>
        <li>Nincs közvetítői díj</li>

      </ul>
      <li>Hogyan adhatok fel hírdetést?</li>
      <ul>
        <li>1.Regisztráció</li>
        <li>2.Belépés</li>
        <li>3.Hirdetés feladás</li>
      </ul>
      </li>
      
    </ul>

    <!--  Gyakran ismetelt kerd vege-->




    <div class="jumbotron text-center" style="margin-bottom:0">
      <p class="post-info">2019 © SZTE <br>
        Info-Bionika || Rendszerfejlesztés
      </p>
    </div>


  </div>
</body>

</html>

@endsection