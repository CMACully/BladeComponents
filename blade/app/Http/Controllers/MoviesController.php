<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = array('Handsome Jack', 'Black Adam', 'Leeroy Jenkins');
        return view('index', compact('movies'));
    }
}
