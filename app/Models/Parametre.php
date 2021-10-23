<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;

    protected $table ='parametres';
    protected  $primarykey ='id';
    public  $incermenting = false;
    protected  $keytype ='string';
    protected  $attributes = [
        'id'=> false,
        'localisation_sfax'=> false,
        'localisation_tunis'=> false,
        'email'=>false,
        'mobile_sfax'=>false,
        'mobile_tunis'=>false,
    ];
}
