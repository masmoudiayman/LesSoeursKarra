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
        $gammes= Gamme::all();

        return view('admin.ajouterSousGamme',compact('gammes'));
    }

    public function saveSousGamme(Request $request)
    {
        $this->validate($request,['id_gam' => 'required']);
        $this->validate($request,['nom' => 'required']);

        $sg =new Sous_Gamme();
        $sg->id_gam=$request->input('id_gam');
        $sg->nom=$request->input('nom');
        $sg->save();

        return back()->with('status','Le nom de la Sous gamme a été enregistré avec succès');
    }

    public function editSousGamme($id)
    {
         $sousGamme =Sous_Gamme::find($id);

         return view('admin.editSousGamme',compact('sousGamme'));
    }

    public function updateSousGamme(Request $request)
    {
      $nom=$request->input('nom');
      $id=$request->input('id');

      $sg=Sous_Gamme::find($id);
      $sg->nom=$nom;
      $sg->update();
      return redirect('/sousGamme')->with('status','Le nom de la sous gamme est modifiée avec succès');
    }

    public function deleteSousGamme($id){
        DB::table('sous_gammes')->where('id','=',$id)->delete();
        return redirect('/sousGamme')->with('status','La sous gamme est supprimée avec succès');       
     }
}
