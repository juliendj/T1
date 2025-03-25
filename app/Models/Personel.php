<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personel extends Model
{

    use HasFactory;
    protected $fillable = [

        'nom',
        'prenom',
        'code',
        'poste',
        'lib',
        'active',

    ];
}
