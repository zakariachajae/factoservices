<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    protected $fillable=[
        'nom_client',
        'nom_forfait',
        'id_contrat',
    ];
    use HasFactory;
}
