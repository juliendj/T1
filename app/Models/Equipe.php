<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'description',
        'nombre'

    ];
    public function personels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Personel::class);
    }
}
