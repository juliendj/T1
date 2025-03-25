<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{

    use HasFactory;
    protected $fillable =
    [
    'libeler',
    'description',
    'type',
    'active',
    'priorite',];

}
