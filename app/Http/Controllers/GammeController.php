<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamme;
use Illuminate\Support\Facades\DB;

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
        $this->validate($request,['nom' => 'required']);

        $gamme =new Gamme();
        $gamme->nom=$request->input('nom');
        $gamme->save();

        return back()->with('status','Le nom de la gamme a été enregistré avec succès');
    }

    public function editGamme($id)
    {
         $gamme =Gamme::find($id);

         return view('admin.editGamme',compact('gamme'));
    }

    public function updateGamme(Request $request)
    {
      $nom=$request->input('nom');
      $id=$request->input('id');

      $gamme=Gamme::find($id);
      $gamme->nom=$nom;
      $gamme->update();
      return redirect('/gamme')->with('status','Le nom de la gamme est modifiée avec succès');
    }

    public function deleteGamme($id){
        DB::table('gammes')->where('id','=',$id)->delete();
        return redirect('/gamme')->with('status','La gamme est supprimée avec succès');       
     }
}
