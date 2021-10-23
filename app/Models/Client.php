<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table ='clients';
    protected  $primarykey ='id';
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
        'id'=> false,
        'nom'=> false,
        'prenom'=>false,
        'date_naissance'=>false,
        'email'=>false,
        'mdp'=>false,
        'pays'=>false,
        'gouvernorat'=>false,
        'ville'=>false,
        'adresse' => false,
        'code_postal' => false,
        'tel'=>false,
    ];
}
