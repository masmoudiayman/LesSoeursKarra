<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function magasin()
    {
        return view('client.magasin');
    }

    public function panier()
    {
        return view('client.panier');
    }

    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function checkout()
    {
        return view('client.checkout');
    }
}
