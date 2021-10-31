<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GammeController extends Controller
{
    public function ajouterGamme()
    {
        return view('admin.ajouterGamme');
    }

    public function gamme()
    {
        return view('admin.gamme');
    }
}
