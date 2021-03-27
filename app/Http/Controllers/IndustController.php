<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriController extends Controller
{
    return view('industri', ['industri'=>Industi::index()];)
}
