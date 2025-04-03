<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];

    public function personels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Personel::class);
    }
}

