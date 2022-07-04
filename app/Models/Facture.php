<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        'nom_client',
        'date_facturation',
        'date_paiement',
        'montant_total',
        'forfait',
    ];
    use HasFactory;
}
