<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\MasukController;
use App\Models\Film;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Film $film) {
    return view('Branda', [
        'films' => $film
    ]);
})->name('branda');

Route::middleware(['guest'])->group(function () {
    Route::view('/daftar', 'Daftar')->name('daftar');
    Route::view('/masuk', 'Masuk')->name('login');
    Route::post('/daftar', [DaftarController::class, 'daftar'])->name('daftar');
    Route::post('/masuk', [MasukController::class, 'masuk'])->name('masuk');
});

Route::resource('film', FilmController::class);

Route::get('/keluar', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('branda')->with('berhasil', 'Berhasil keluar.');
})->middleware('auth')->name('keluar');
