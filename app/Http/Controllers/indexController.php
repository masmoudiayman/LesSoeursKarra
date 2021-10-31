<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function magasin_jus()
    {
        return view('client.magasin_jus');
    }

    public function magasin_café()
    {
        return view('client.magasin_café');
    }

    public function magasin_salé()
    {
        return view('client.magasin_salé');
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

    public function login()
    {
        return view('client.login');
    }

    public function signup()
    {
        return view('client.signup');
    }
}
