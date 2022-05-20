<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;

class MovieController extends Controller
{
    //

    public function index() {

        $movies = Movies::all();

        $data = "Lello";

        //return view ('home', ["author"=>$data]);
          return view ('films', compact('movies'));
    }
}
