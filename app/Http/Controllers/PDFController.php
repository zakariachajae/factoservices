<?php
   
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
   
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Facture;
use App\Models\Forfait;
use App\Models\Abonnement;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        

        $facture=Facture::findOrFail($id);
        $abonnement=Abonnement::where('nom_client',$facture->nom_client)->firstOrFail();
        $forfait=Forfait::where('nom_forfait',$abonnement->nom_forfait)->firstOrFail();
      
            
        
        $data = [
            'id_facture' => $facture->id,
            'nom_client' => $facture->nom_client,
            'date_facturation'=>$facture->date_facturation,
            'date_paiement'=>$facture->date_paiement,
            'montant_total'=>$facture->montant_total,
            'forfait'=>$facture->forfait,
            'id_forfait'=>$forfait->id,
            'nom_forfait'=>$forfait->nom_forfait,
            'forfait_description'=>$forfait->description,
            'forfait_prix'=>$forfait->prix,
            'id_contrat'=>$abonnement->id_contrat,
            
        ];
        
        $pdf =pdf::loadView('testPDF',$data);
     
        return $pdf->download('Facture.pdf');
    }
}
