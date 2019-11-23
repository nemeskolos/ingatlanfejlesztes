@extends('layouts.app')
<title>Keresés</title>
@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/style/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="jumbotron text-center img" style="margin-bottom:0">

  <h1>Ingatlan közvetítő</h1>
  <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>
</div>

<p></p>
<p></p>
<div class="container">
<div class="row">
    
@if(count(@posts)>0)
@foreach($posts as @post)

{{ $post->city }}

@endforeach
@endif



</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
      <p class="post-info">2019 © SZTE <br>
        Info-Bionika || Rendszerfejlesztés
      </p>
    </div>

@endsection