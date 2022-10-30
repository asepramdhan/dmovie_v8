<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController
{
    public function index()
    {
        return view('Contents.LihatFilms');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Film $film)
    {
    }

    public function edit(Film $film)
    {
    }

    public function update(Request $request, Film $film)
    {
    }

    public function destroy(Film $film)
    {
    }
}
