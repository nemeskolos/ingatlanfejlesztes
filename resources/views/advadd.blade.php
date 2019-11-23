@extends('layouts.app')
<title>Hirdetés feladás</title>
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/style/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Hirdetés feladás') }}</div>

                <div class="card-body">


                    <form method="post" action="advadd" role="insert">

                        <div class="input-group">

                            <input type="text" class="form-controll offset-md-4" placeholder="Település" name="city" >

                            <input type="text" class="form-controll offset-md-4" placeholder="Megye" name="county">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input type="number" class="form-controll offset-md-4" placeholder="Ár(HUF)" name="price">

                            <input type="number" class="form-controll offset-md-4" placeholder="Szobaszám" name="rooms">

                        </div>
                        <p></p>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <input type="submit" value="Mehet" class="btn btn-dark" name="submit" id="submit" />

                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>

    </div>



    
    <p></p>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p class="post-info">2019 © SZTE <br>
            Info-Bionika || Rendszerfejlesztés
        </p>
    </div>
    @endsection

    