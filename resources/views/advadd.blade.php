@extends('layouts.app')

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
                    <form method="POST" action="{{ route('advadd') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Város') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                            </div>
                            <label for="county" class="col-md-4 col-form-label text-md-right">{{ __('Megye') }}</label>
                            <div class="col-md-6">
                                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required autocomplete="county" autofocus>
                            </div>
                            <label for="rooms" class="col-md-4 col-form-label text-md-right">{{ __('Szobák száma') }}</label>
                            <div class="col-md-6">
                                <input id="rooms" type="text" class="form-control @error('rooms') is-invalid @enderror" name="rooms" value="{{ old('rooms') }}" required autocomplete="rooms" autofocus>
                            </div>
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Ár(HUF)') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                            </div>

                    </form>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" value="Submit" class="btn btn-dark">
                            {{ __('Mehet') }}
                        </button>
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