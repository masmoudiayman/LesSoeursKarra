<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SousGammeController extends Controller
{
    public function sousGamme()
    {
        return view('admin.sousGamme');
    }

    public function ajouterSousGamme()
    {
        return view('admin.ajouterSousGamme');
    }
}
