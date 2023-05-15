@extends('layout')
@section('content')

<video class="hattervid" autoplay muted loop id="myVideo">
    <source src="hatter.mp4" type="video/mp4">
  </video>

<h1 class="mb-5 text-center">Válaszd ki a termeszteni kívánt növényt!</h1>
<div class="yield row">


    @foreach ($novenyek as $noveny)

    <div class="col text-center">
        <a href="/noveny/{{$noveny->id}}"><img class="zoldseglinkek" src="zoldsegimg/{{$noveny->kep}}.jpg" alt="{{$noveny->kep}}.jpg" width="100" height="100"></a>
        <p>{{$noveny->nev}}</p>
    </div>

    @endforeach

</div>


<p class="text-center">

    <a class="kilepes btn btn-primary" href="/logout">Kilépés</a>
</p>


@endsection