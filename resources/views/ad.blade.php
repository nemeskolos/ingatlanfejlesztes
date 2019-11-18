@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/style/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="jumbotron text-center img" style="margin-bottom:0">

  <h1>Ingatlan közvetítő</h1>
  <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>
</div>

<p></p>

<div class="container">
  <form class="form-inline my-2 my-lg-0" action="/ad" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Város" aria-label="Search" name="city">
    <button class="btn btn-secondary btn-vs active" type="submit">Keresés</button>
  </form>

  <p></p>
  <div class="row">




    @foreach ($advertisement as $advertisementValue)
    <div class="col">

      <div class="card" style="width: 18rem;">
        <img src="http://127.0.0.1:8000/asd.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$advertisementValue->price}}</h5>
          <p class="card-text">{{$advertisementValue->city}}</p>
          <p class="card-text">{{$advertisementValue->county}}</p>
          <p class="card-text">{{$advertisementValue->rooms}}</p>
        </div>
      </div>
    </div>

    @endforeach

  </div>

</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p class="post-info">2019 © SZTE <br>
    Info-Bionika || Rendszerfejlesztés
  </p>
</div>

@endsection