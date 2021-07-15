<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class TravelController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
