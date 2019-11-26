    <!-- <form method="POST" action="{{ route ('update')}}">-->
                                          <!--  <a href="" class="card-link">Szerkesztés</a> -->
                                          <a href="/delete/{{ $advertisementValue->id }}" class="card-link">Törlés</a>

<p></p>

<p class="card-text">Ár(HUF): {{$advertisementValue->price}}</p>
<p class="card-text">Város: {{$advertisementValue->city}}</p>
<p class="card-text">Megye: {{$advertisementValue->county}}</p>
<p class="card-text">Szobák száma: {{$advertisementValue->rooms}}</p>
<!-- </form>-->