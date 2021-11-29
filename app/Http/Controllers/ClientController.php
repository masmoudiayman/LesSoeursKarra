<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client()
    {
        $clients=Client::all();
      
        return view('admin.client',compact('clients'));
    }
}
