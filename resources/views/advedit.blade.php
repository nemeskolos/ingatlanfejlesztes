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
                        <button type="submit" class="btn btn-dark">
                            {{ __('Mehet') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>


        @endsection