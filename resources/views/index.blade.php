@extends('layouts.app')

@section('content')

<div class="container">
  <form class="form-inline my-2 my-lg-0" action="/ad" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Város" aria-label="Search" name="city">
    <button class="btn btn-secondary btn-vs active" type="submit">Keresés</button>
  </form>
  <div class="row">

    @foreach ($advertisement->chunk(3) as $advertisement)
    @foreach ($advertisement as $advertisementValue)

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="http://127.0.0.1:8000/asd.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$advertisementValue->price}}</h5>
          <p class="card-text">{{$advertisementValue->city}}</p>
          <a href="#{{$advertisementValue->id}}" class="btn btn-primary">Megtekintés</a>
        </div>
      </div>
    </div>
    @endforeach
    @endforeach
  </div>

  <div class="container">

    <div class="row">

    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
      <p class="post-info">2019 © SZTE <br>
        Info-Bionika || Rendszerfejlesztés
      </p>
    </div>

    @endsection



   