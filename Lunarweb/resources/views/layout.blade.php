<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Evolution</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
   
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
   
</head>
<body class="bg-light">
  <div class="diszlec container-fluid ps-0 pe-0">
    <img class="diszlec img-fluid" src="{{asset('head.jpg')}}" alt="hatter">
  </div>

    <div class="fejlec container-fluid">
        <nav class="navbar-dark fejlec navbar navbar-expand-lg container-fluid">

          <a class="linkek navbar-brand" href="/">Főoldal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse fejlec1" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="linkek nav-link" href="/aloldal1">Lámpa</a>
              </li>
              <li class="nav-item">
                <a class="linkek nav-link" href="/aloldal2">Öntözőrendszer</a>
              </li>
              <li class="nav-item">
                <a class="linkek nav-link" href="/aloldal3">Élő föld</a>
              </li>
              <li class="nav-item">
                <a class="linkek nav-link" href="/aloldal4">Bio vetőmag</a>
              </li>    
            </ul>
          </div>
          @auth
          
          
          
        <a class="profgomb bejelentkezes text-right" href="/profil"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M480 569q-71.462 0-116.231-44.769Q319 479.463 319 408t44.769-116.231Q408.538 247 480 247q71.463 0 116.231 44.769Q641 336.537 641 408t-44.769 116.231Q551.463 569 480 569ZM145 926V817q0-41 20.094-70.375T217 702q69-32 133.454-47.5 64.454-15.5 129.5-15.5T609 655q64 16 133 47 32.812 15.25 52.906 44.625T815 817v109H145Z"/></svg></a>
          @else
            <a class="bejelentkezes text-right" href="/bejelentkezes">Bejelentkezés</a>
          @endauth
          
          
        </nav>

    </div>
    





<div class="yield">@yield('content')</div>










    <footer class="lab text-center">
        <p class="mb-0">Elérhetőségünk:
          Tel: 0620/389-60-59 <br>
          E-mail: foodevolutioninfo@gmail.com</p>
    </footer>
</body>
</html>