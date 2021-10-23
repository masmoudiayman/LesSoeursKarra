<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sous_Gamme extends Model
{
    use HasFactory;

    protected $table ='sous_gammes';
    protected  $primarykey ='id';
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
        'id'=> false,
        'nom'=> false,
        'id_gam'=>false,
    ];
}
