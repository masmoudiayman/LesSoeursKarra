<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $table ='paniers';
    protected  $primarykey ='id';
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
        'id'=> false,
        'user'=> false,
        'etat'=> false,
    ];
}
