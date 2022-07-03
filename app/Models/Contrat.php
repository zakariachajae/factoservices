<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = [
        'nom_client',
        'forfait',
        'periodicite',
        'montant_TTC',
    ];
    use HasFactory;
}
