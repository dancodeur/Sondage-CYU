<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class pageControllers extends Controller
{
    //
    public function index(){

        Inertia::render('Welcome');
    }
}
