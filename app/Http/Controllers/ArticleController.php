<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Models\Sous_gamme;

class ArticleController extends Controller
{
    public function article()
    {
        $articles = DB::table('articles')
        ->join('sous_gammes', 'articles.id_sgam', '=', 'sous_gammes.id')
        ->select('articles.*','sous_gammes.nom as sous_gammesName')
        ->get();
        return view('admin.article',compact('articles'));
    }

    public function ajouterArticle()
    {
        $sousGammes= Sous_gamme::all();
        return view('admin.ajouterArticle',compact('sousGammes'));
    }

    public function saveArticle( Request $request)
    {
        $this->validate($request,['nom' => 'required',
                                  'id_sgam' => 'required',
                                  'description' => 'required',
                                  'prix' => 'required',
                                  'image' => 'image|nullable']);
        
        if($request->hasFile('image')){
            //1:get file name with exte
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //2:get just file name
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //3:get just file extension
            $extension=$request->file('image')->getClientOriginalExtension();
            //4:file name to store
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;

            //uplod image
            $path = $request->file('image')->storeAs('public/image',$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpg';

        }

        $article =new Article();
        $article->nom=$request->input('nom');
        $article->id_sgam=$request->input('id_sgam');
        $article->description=$request->input('description');
        $article->prix=$request->input('prix');
        $article-> image = $fileNameToStore;
        $article->save();

        return back()->with('status','article a été ajouté avec succès');

        
    }

    public function editArticle($id)
    {
         $articles =Article::find($id);
         $sousGammes= Sous_gamme::all();


         return view('admin.editArticle',compact('articles','sousGammes'));
    }

    public function updateArticle(Request $request)
    {
      $nom=$request->input('nom');
      $id_sgam=$request->input('id_sgam');
      $description=$request->input('description');
      $prix=$request->input('prix');
      $prix=$request->input('image');


      $id=$request->input('id');

      $article=Article::find($id);

      $article->nom=$nom;
      $article->id_sgam=$id_sgam;
      $article->description=$description;
      $article->prix=$prix;
      $article->update();
      return redirect('/article')->with('status',' article est modifiée avec succès');
    }

    public function deleteArticle($id){
        DB::table('articles')->where('id','=',$id)->delete();
        return redirect('/article')->with('status','article est supprimée avec succès');       
     }
 

}
