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
  <div class="form-inline my-2 my-lg-0" action="/ad" method="get">
  <form action="/search" method="get">
  <input class="input-control mr-sm-2" type="search" placeholder="Város" aria-label="Search" name="citysearch">
    <span>
      <button class="btn btn-secondary btn-vs active" type="submit">Keresés</button>
    </span>
</form>
  </div>

  <p></p>
  <div class="row">


    @foreach ($advertisement as $advertisementValue)

    <div class="col">

      <div class="card" style="width: 18rem;">
        @if (($advertisementValue->rooms == 2 && $advertisementValue->price >= 12500000))
        <img src="http://127.0.0.1:8000/asd.jpeg" class="card-img-top" alt="...">
        @elseif(($advertisementValue->rooms == 2 && $advertisementValue->price < 12500000))
         <img src="http://127.0.0.1:8000/asd2cheap.jpg" class="card-img-top" alt="...">
          @elseif(($advertisementValue->rooms == 3 && $advertisementValue->price >= 15000000))
          <img src="http://127.0.0.1:8000/asd3.jpg" class="card-img-top" alt="...">
          @elseif(($advertisementValue->rooms == 3 && $advertisementValue->price < 15000000)) 
          <img src="http://127.0.0.1:8000/asd3cheap.jpg" class="card-img-top" alt="...">
            @elseif(($advertisementValue->rooms == 1 && $advertisementValue->price >= 10000000))
            <img src="http://127.0.0.1:8000/ads1.jpeg" class="card-img-top" alt="...">
            @elseif(($advertisementValue->rooms == 1 && $advertisementValue->price < 10000000)) 
            <img src="http://127.0.0.1:8000/asdcheap1.jpeg" class="card-img-top" alt="...">
              @else
              <img src="http://127.0.0.1:8000/asdbig.jpg" class="card-img-top" alt="...">
              @endif





              <div class="card-body">

                <p class="card-text">Ár(HUF): {{$advertisementValue->price}}</p>
                <p class="card-text">Város: {{$advertisementValue->city}}</p>
                <p class="card-text">Megye: {{$advertisementValue->county}}</p>
                <p class="card-text">Szobák száma: {{$advertisementValue->rooms}}</p>
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