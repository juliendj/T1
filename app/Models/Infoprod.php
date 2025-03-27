<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Infoprod extends Model
{
    use HasFactory;
    protected $fillable = [

        'lib',
        'active',
        'departement_id'

    ];

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
}
