<?php
use app\Http\Controllers\lunarController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/aloldal1', function () {
    return view('aloldal1');
});
Route::get('/aloldal2', function () {
    return view('aloldal2');
});
Route::get('/aloldal3', function () {
    return view('aloldal3');
});
Route::get('/aloldal4', function () {
    return view('aloldal4');
});
Route::get('/bejelentkezes', function () {
    return view('/bejelentkezes');
});
Route::post('/login', [UserController::class, 'Login']);
Route::post('/reg', [UserController::class, 'Reg']);

Route::get('/regisztracio', function () {
    return view('/regisztracio');
});


Route::get('/logout', [UserController::class, 'Logout']);

Route::get('/profil', [UserController::class, 'Profil']);

Route::get('/noveny/{id}', [UserController::class, 'Noveny']);


Route::post('/inditas/{id}', function (string $id) {
    
    $plant = DB::select('select * from novenyek where id = ?', [$id])[0];

    
    $request = Http::post('http://192.168.0.87:5000/on', [
        'seconds' => intval($plant->ido),
        'leds' => intval($plant->leds)
    ]); 

    return $request->ok();
});