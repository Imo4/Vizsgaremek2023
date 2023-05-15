@extends('layout')
@section('content')

<video class="hattervid" autoplay muted loop id="myVideo">
    <source src="hatter.mp4" type="video/mp4">
  </video>

<div class="container">
    <div class="regablak card m-auto my-4" style="width: 25rem">
        <div class="card-body">
            <form action="/reg" method="POST">
                @csrf
                <h1 class="text-center">Regisztrálj!</h1>
                <div>
                    <label class="form-label" for="fnev">Felhasználó név:</label>
                    <input class="form-control" type="text" name="fnev">
                    @error('fnev') {{ $message }} @enderror
                </div>
                <div>
                    <label class="form-label" for="jelszo">Jelszó:</label>
                    <input class="form-control" type="password" name="jelszo">
                    @error('jelszo'){{$message}}@enderror
                </div>
                <div>
                    <label class="form-label" for="email">E-mail:</label>
                    <input class="form-control" type="email" name="email">
                    @error('email'){{$message}}@enderror
                </div>
                
                <div class="container-fluid text-center">
                    <button class="btn btn-primary mt-4">Regisztráció</button>
                </div>
                
            </form>
        </div>
    </div>
    

</div>























@endsection