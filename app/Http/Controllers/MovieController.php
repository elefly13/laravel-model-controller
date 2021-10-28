<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{

    public function listMovie() {
        
        $movies =  Movie::all();
        var_dump($movies);

        return view('home', compact('movie'));
    }
}
