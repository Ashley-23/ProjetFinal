<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DeconnexionControler extends Controller
{
    //
    public function Deconnexion()
    {
        auth()->logout();
        return view('welcome');
    }
}
