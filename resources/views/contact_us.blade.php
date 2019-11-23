@extends('layouts.app')
<title>Kapcsolat</title>
@section('content')



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/style/style.css">


</head>

<body>



  <div class="container">
  <figure class="float-right ">
            <iframe class="rounded float-center" width="420" height="315" src="https://www.youtube.com/embed/dZFgyzk32-w?autoplay=1">
            </iframe>
            <figcaption class="figure-caption text-right"></figcaption>
          </figure>
    <div class="col-10">

      <div class="row">

        <div class="container">


          <div class="container">

            <div class="col">

              <div class="row">


                <div class="card" style="width: 18rem;">
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
                  <img src="http://127.0.0.1:8000/contactus.jpg" class="card-img-top" alt="..." style="max-width: 8rem;">
                  <div class="card-body">
                    <h5 class="mt-2 mb-2">Ügyfélszolgálat</h5>
                    Várady Tamás
                  </div>
                </div>

                <dev class="card" style="width: 18rem;">
                  <img src="http://127.0.0.1:8000/contactphone.jpg" class="card-img-top" alt="..." style="max-width: 8rem;">
                  <div class="card-body">
                    <h5 class="mt-0 mb-1">Telefon</h5>
                    +36 30 123 4567
                  </div>

                  <div class="card" style="width: 18rem;">
                    <img src="http://127.0.0.1:8000/contactemail.jpg" class="card-img-top" alt="..." style="max-width: 8rem;">
                    <div class="card-body">
                      <h5 class="mt-0 mb-1">Email</h5>
                      contactus@ingatlan.hu
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;">
                    <img src="http://127.0.0.1:8000/contactskype.jpg" class="card-img-top-md" alt="..." style="max-width: 8rem;">
                    <div class="card-body">
                      <h5 class="mt-0 mb-1">Skype online</h5>
                      ingatlan_19
                    </div>
                  </div>

              </div>
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