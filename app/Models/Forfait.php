<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $fillable = [
        'nom_forfait',
        'description',
        'prix',
    ];


    use HasFactory;
}
