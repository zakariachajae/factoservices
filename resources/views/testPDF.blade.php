<div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="  invoice-header">
                          <h1>
                                          <i class="fa fa-globe"></i> FACTURE
                                          <small class="pull-right">Date:{{$date_facturation}}</small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          de
                          <address>
                                          <strong>FACTURIMI, Inc.</strong>
                                          <br>6 RUE JAMAL EDDINE AFGHANI 
                                          <br>kenitra, 14000
                                          <br>tel: +212 693327716
                                          <br>Email: zakariachajae@gmail.com | najlaaslaoui@gmail.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          à
                          <address>
                                          <strong>{{$nom_client}}</strong>
                                          <br>adresse :
                                          <br>ville :
                                          <br>Phone: 
                                          <br>Email: 
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>facture #{{$id_facture}}</b>
                          <br>
                          <br>
                          <b>forfait ID:</b> {{$id_forfait}}
                          <br>
                          <b>Payment Due:</b> {{$date_paiement}}
                          <br>
                          <b>Compte FACTURIMI:</b> {{$nom_client}}
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="  table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>id forfait</th>
                                <th>forfait</th>
                                <th>id contrat</th>
                                <th style="width: 59%">Description</th>
                                <th>montant</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$id_forfait}}</td>
                                <td>{{$nom_forfait}}</td>
                                <td>{{$id_contrat}}</td>
                                <td>{{$forfait_description}}</td>                    
                                <td>{{$forfait_prix}} <small>MAD</small></td>
                              </tr>
                    
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6">
                          <p class="lead">notice:</p>
                        
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Si, dans un délai de quinze jours à compter de cette date, vous ne vous êtes toujours pas acquitté de votre obligation, nous saisirons la juridiction compétente afin d'obtenir le paiement des sommes susvisées.
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                          <p class="lead">a payé avant le : {{$date_paiement}}</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                
                                <tr>
                                  <th>Total:</th>
                                  <td>{{$montant_total}}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>