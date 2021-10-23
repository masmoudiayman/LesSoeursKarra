<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_Panier extends Model
{
    use HasFactory;
    
    protected $table ='ligne_paniers';
    protected  $primarykey =['id_art','id_panier'];
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
    'id_art'=> false,
    'id_panier'=> false,
    'qtes'=> false,
    ];
}
