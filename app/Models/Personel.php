<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'departement_id',
        'poste_id',
        'equipe_id'

    ];
    public function equipe(): BelongsTo
    {
        return $this->belongsTo(Equipe::class);
    }

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
    public function poste(): BelongsTo
    {
        return $this->belongsTo(Poste::class);
    }

   
}
