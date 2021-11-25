<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Sous_Gamme;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    public function home()
    {
        $articles = Article::all();

        return view('client.home',compact('articles'));
    }

    public function magasin_jus()
    {
        $sousGammes = DB::table('sous_gammes')
        ->join('gammes', 'sous_gammes.id_gam', '=', 'gammes.id')
        ->select('sous_gammes.*','gammes.nom as sous_gammesName')
        ->get()->where('sous_gammesName','Jus');

        $articles = DB::table('articles')
        ->join('sous_gammes','articles.id_sgam','=','sous_gammes.id')
        ->select('articles.*','sous_gammes.nom as sous_gammeArticle')
        ->get()->whereIn('sous_gammeArticle',['Baklewa','Bjewia','Hlou louz','Mignardise'] );

        return view('client.magasin_jus',compact('sousGammes','articles'));
    }

    public function magasin_café()
    {
        $sousGammes = DB::table('sous_gammes')
        ->join('gammes', 'sous_gammes.id_gam', '=', 'gammes.id')
        ->select('sous_gammes.*','gammes.nom as sous_gammesName')
        ->get()->where('sous_gammesName','Café et the');

        $articles = DB::table('articles')
        ->join('sous_gammes','articles.id_sgam','=','sous_gammes.id')
        ->select('articles.*','sous_gammes.nom as sous_gammeArticle')
        ->get()->whereIn('sous_gammeArticle',['Article thé','Chocolat','Hlou arbi','Macarron'] );

        return view('client.magasin_café',compact('sousGammes','articles'));
    }

    public function magasin_salé()
    {
        $sousGammes = DB::table('sous_gammes')
        ->join('gammes', 'sous_gammes.id_gam', '=', 'gammes.id')
        ->select('sous_gammes.*','gammes.nom as sous_gammesName')
        ->get()->where('sous_gammesName','Salé');

        $articles = DB::table('articles')
        ->join('sous_gammes','articles.id_sgam','=','sous_gammes.id')
        ->select('articles.*','sous_gammes.nom as sous_gammeArticle')
        ->get()->whereIn('sous_gammeArticle',['Salé varié'] );
        
        return view('client.magasin_salé',compact('sousGammes','articles'));
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
