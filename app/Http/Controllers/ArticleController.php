<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        return view('admin.article');
    }

    public function ajouterArticle()
    {
        return view('admin.ajouterArticle');
    }
}
