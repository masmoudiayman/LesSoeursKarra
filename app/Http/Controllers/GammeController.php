<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamme;

class GammeController extends Controller
{
    public function ajouterGamme()
    {
        return view('admin.ajouterGamme');
    }

    public function gamme()
    {
        $gammes=Gamme::all();
        return view('admin.gamme',compact('gammes'));
    }

    public function saveGamme(Request $request)
    {
        $this->validate($request,['nom' => 'required|unique:gammes']);

        $gamme =new Gamme();
        $gamme->nom=$request->input('nom');
        $gamme->save();

        return back()->with('status','Le nom du gamme a été enregistré avec succès');
    }

    public function editGamme($id)
    {
        
         $gamme =Gamme::find($id);

        return view('admin.editGamme',compact('gamme'));
    }

    public function updateGamme(Request $request)
    {

    }
}
