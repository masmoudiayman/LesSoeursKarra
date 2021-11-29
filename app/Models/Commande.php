<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $table ='commandes';
    protected  $primarykey ='id';
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
        'id'=> false,
        'nom'=>false,
        'pays'=>false,
        'ville'=>false,
        'adresse' => false,
        'methode_paiment' => false,
        'panier' => false,
        'id_clt'=>false,
    ];
}
