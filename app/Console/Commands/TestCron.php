<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Facture;
use Carbon\Carbon;

class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $facture=Facture::all();
        //$facture=Facture::latest()->first();
        
        
        
        

       foreach ($facture as $facture){
            Facture::create([
         
                'nom_client' =>$facture->nom_client,
                'date_facturation'=>Carbon::tomorrow(),
                'date_paiement' => date('y-m-d', time() + 8400),
                'montant' =>$facture->montant_total,
                'forfait' =>$facture->forfait,
        
            ]);
        }
       
        return 0;
    }
}
