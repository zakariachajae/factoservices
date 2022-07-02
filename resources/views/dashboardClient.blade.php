<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row" style="display: inline-block;">
                <div class="top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-briefcase"></i></div>
                            <div class="count">{{ $abonnements->count() }}</div>
                            <h3>nombre des abonnements</h3>

                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-file"></i></div>
                            <div class="count">{{ $factures->count() }}</div>
                            <h3>nombre des factures impayées </h3>

                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-user"></i></div>
                            <div class="count">{{ $client->type_client }}</div>
                            <br>
                            <br>
                            <h3>le type de client</h3>

                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-dollar"></i></div>
                            <div class="count">{{ $factures->sum('montant_total') }}<span>
                                    <p>MAD</p>
                                </span></div>
                            <h3>le montant total a payé</h3>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
              <div class="x_title">
                <h2>mes factures </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>le forfait</th>
                      <th>le montant total</th>
                      <th>la date de facturation</th>
                      <th>la date de paiement</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($factures as $facture)
                    <tr>
                      <td>{{$facture->forfait}}</td>
                      <td>{{$facture->montant_total}}</td>
                      <td>{{$facture->date_facturation}}</td>
                      <td>{{$facture->date_paiement}}</td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
              <div class="x_title">
                <h2>mes abonnements </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>le forfait</th>
                      <th>le contrat</th>
                      <th>la date d'engagement</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($abonnements as $abonnement)
                    <tr>
                      <td>{{$abonnement->nom_forfait}}</td>
                      <td>{{$abonnement->nom_forfait}}</td>
                      <td>{{$abonnement->created_at}}</td>
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
              <div class="x_title">
                <h2>mes contrats </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>forfait</th>
                      <th>la periode de facturation</th>
                      <th>montant TTC</th>
                      <th>date d'engagement</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contrats as $contrat)
                    <tr>
                      <td>{{$contrat->forfait}}</td>
                      <td>{{$contrat->periodicité}}</td>
                      <td>{{$contrat->montant_TTC}}</td>
                      <td>{{$contrat->created_at}}</td>
                      
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
              <div class="x_title">
                <h2>mes paiements </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>le contrat</th>
                      <th>la facture</th>
                      <th>le montant</th>
                      <th>la date de paiement</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($paiements as $paiement)
                    <tr>
                      <td>{{$paiement->contrat}}</td>
                      <td>{{$paiement->facture}}</td>
                      <td>{{$paiement->montant}}</td>
                      <td>{{$paiement->date_paiement}}</td>
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>

              </div>
            </div>
          </div>



</x-app-layout>
