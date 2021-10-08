<?php

namespace App\Http\Controllers;

use App\Models\Travel;

class TravelsController extends Controller
{
    public function index(){

        $travels = Travel::all();

        return view('travels', compact('travels'));
    }
}
