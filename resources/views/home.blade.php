@extends('layouts.app')
<title>Profil</title>
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="/style/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Profil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Üdvözöljük!
                    <p></p>
                    <a href="advadd" class="text-white bg-dark" >Hirdetés feladás</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
      <p class="post-info">2019 © SZTE <br>
        Info-Bionika || Rendszerfejlesztés
      </p>
    </div>

@endsection
