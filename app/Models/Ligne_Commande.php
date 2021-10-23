<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_Commande extends Model
{
    use HasFactory;

    protected $table ='ligne_commandes';
    protected  $primarykey =['id_art','id_cde'];
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
    'id_art'=> false,   
    'id_cde'=> false,
    'qtes'=> false,

    ];
}
