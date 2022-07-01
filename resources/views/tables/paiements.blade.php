<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>gérer les paiements: </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>client</th>
                                            <th>contrat</th>
                                            <th>facture</th>
                                            <th>montant</th>
                                            <th>date de paiement</th>
                                            <th>operations</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($paiements as $paiement)
                                            <tr>
                                                <td>{{ $paiement->id }}</td>
                                                <td>{{ $paiement->client }}</td>
                                                <td>{{ $paiement->contrat }}</td>
                                                <td>{{ $paiement->facture }}</td>
                                                <td>{{ $paiement->montant }}</td>
                                                <td>{{ $paiement->date_paiement }}</td>
                                                <td><a href="#"class="btn btn-primary btn-sm">aucune operation</a> 
                                                    </td>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

    
    </div>
</x-app-layout>