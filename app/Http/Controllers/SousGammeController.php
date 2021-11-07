<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gamme;
use App\Models\Sous_gamme;



class SousGammeController extends Controller
{
    public function sousGamme()
    {
        $sousGammes = DB::table('sous_gammes')
        ->join('gammes', 'sous_gammes.id_gam', '=', 'gammes.id')
        ->select('sous_gammes.*','gammes.nom as sous_gammesName')
        ->get();

        return view('admin.sousGamme',compact('sousGammes'));
    }

    public function ajouterSousGamme()
    {
        $sousgammes = Gamme::all();

        return view('admin.ajouterSousGamme',compact('sousgammes'));
    }

    public function saveGamme(Request $request)
    {
        $this->validate($request,['id_gam' => 'required']);
        $this->validate($request,['nom' => 'required']);

        $sg =new Sous_Gamme();
        $sg->id_gam=$request->input('id_gam');
        $sg->nom=$request->input('nom');
        $sg->save();

        return back()->with('status','Le nom de la Sous gamme a été enregistré avec succès');
    }
}
