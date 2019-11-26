<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szerkesztés</title>
</head>

<body>


    <div class="content">
        <h1>Ingatlanközvetítés</h1>
        <p>Eladás, bérlés, keresés, hirdetés <span>minden</span> egy helyen!</p>

        <div class="jumbotron text-center img" style="margin-bottom:0">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-header">{{ __('Ár szerkesztése') }}</div>

                            <div class="card-body">
                                <form method="POST" action="" >
                                    <div class="input-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="number" class="form-controll offset-md-4" name="price" id="price" placeholder="Ár(HUF)" name="price">

                                    </div>
                                    <p></p>
                                   
                                    <a href="" class="btn btn-dark"> Mehet </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




</body>

</html>