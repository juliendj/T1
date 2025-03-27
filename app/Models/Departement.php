<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [

        'libeler',
        'description',
        'nombre',

        'active'

    ];
    public function personels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Personel::class);
    }

    public function infoprods(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Infoprod::class);
    }
}
