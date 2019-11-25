<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szerkesztés/törlés</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>

    <div class="row">


        @foreach ($advertisement as $advertisementValue)

        <div class="col">

            <div class="card" style="width: 18rem; ">
                @if (($advertisementValue->rooms == 2 && $advertisementValue->price >= 12500000))
                <img src="http://127.0.0.1:8000/asd.jpeg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                @elseif(($advertisementValue->rooms == 2 && $advertisementValue->price < 12500000)) <img src="http://127.0.0.1:8000/asd2cheap.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                    @elseif(($advertisementValue->rooms == 3 && $advertisementValue->price >= 15000000))
                    <img src="http://127.0.0.1:8000/asd3.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                    @elseif(($advertisementValue->rooms == 3 && $advertisementValue->price < 15000000)) <img src="http://127.0.0.1:8000/asd3cheap.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                        @elseif(($advertisementValue->rooms == 1 && $advertisementValue->price >= 10000000))
                        <img src="http://127.0.0.1:8000/ads1.jpeg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                        @elseif(($advertisementValue->rooms == 1 && $advertisementValue->price < 10000000)) <img src="http://127.0.0.1:8000/asdcheap1.jpeg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                            @else
                            <img src="http://127.0.0.1:8000/asdbig.jpg" class="card-img-top" alt="..." style="width: 18rem; height: 10rem; ">
                            @endif


                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="card-body">

                                        <p class="card-text">Ár(HUF): {{$advertisementValue->price}}</p>
                                        <p class="card-text">Város: {{$advertisementValue->city}}</p>
                                        <p class="card-text">Megye: {{$advertisementValue->county}}</p>
                                        <p class="card-text">Szobák száma: {{$advertisementValue->rooms}}</p>
                                    </div>
                                    <a href="#" class="card-link">Szerkesztés</a>
                                    <a href="#" class="card-link">Törlés</a>
                                </div>
                            </div>



            </div>
        </div>

        @endforeach




</body>

</html>