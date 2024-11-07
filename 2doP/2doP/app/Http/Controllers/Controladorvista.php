<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladorvista extends Controller
{
    public function form(){
        return view('formUsuarios');
    }
}
