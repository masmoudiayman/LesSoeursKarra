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
        'email'=>false,
        'mdp'=>false,
        'pays'=>false,
        'ville'=>false,
        'adresse' => false,
        'tel'=>false,
    ];
}
