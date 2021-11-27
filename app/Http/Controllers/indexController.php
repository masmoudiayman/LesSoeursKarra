<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Panier;
use App\Models\Sous_Gamme;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\redirect;
use App\Cart;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

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
        ->get()->where('sous_gammesName','Café et thé');

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
        if(!Session::has('cart')){
            return view('client.panier');
        }
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);

        return view('client.panier',['articles'=>$cart->items]);
    }
    
    public function addToCart($id)
    {
        $article = Article::find($id);

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($article, $id);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();
    }

    public function update_qty(Request $request,$id)
    {
        //print('the product id is '.$request->id.' And the product qty is '.$request->quantity);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();
    }
    public function remove_from_cart($id)
    {
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
       
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        //dd(Session::get('cart'));
        return back();

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
        if(!Session::has('client'))
        {
            return view('client.login');
        }
        return view('client.checkout');
    }

    public function login()
    {
        return view('client.login');
    }

    public function logout()
    {
        Session::forget('client');

        return redirect('/');
    }

    public function signup()
    {
        return view('client.signup');
    }

    public function createAccount(Request $request)
    {
        $this->validate($request,['nom'=>'required',
                                  'prenom' =>'required',
                                  'pays' =>'required',
                                  'ville' =>'required',
                                  'adresse' =>'required',
                                  'tel' =>'required',
                                  'email' =>'email|required|unique:clients',
                                  'mdp' =>'required|min:6']);
        $client = new Client();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->pays = $request->input('pays');
        $client->ville = $request->input('ville');
        $client->adresse = $request->input('adresse');
        $client->tel = $request->input('tel');
        $client->email = $request->input('email');
        $client->mdp = bcrypt($request->input('mdp'));

        $client->save();
        return back()->with('status','votre compte est crée avec succès');

    }
    public function accessAccount(Request $request)
    {
        $this->validate($request,['email' =>'email|required',
                                  'mdp' =>'required']);

        $client = Client::where('email',$request->input('email'))->first();

        if ($client) {
            if(Hash::check($request->input('mdp'),$client->mdp)){
                Session::put('client',$client);
                return redirect('/');
             
            }
            else{
                return back()->with('status','email ou mot de passe incorrecte');
            }

        } else {
            return back()->with('status',"vous n'avez pas de compte avec cet email");
        }     
    }

   

}

