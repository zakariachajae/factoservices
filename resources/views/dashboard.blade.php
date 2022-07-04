<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- statistics -->
                    <div class="row" style="display: inline-block;">
                        <div class="tile_count">
                            <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total des clients : </span>
                                <div class="count">{{ $clients->count() }}</div>
                            </div>
                            <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i> les clients morale :</span>
                                <div class="count">{{ $clients->where('type_client', 'personne morale')->count() }}
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i> les clients physique :</span>
                                <div class="count">{{ $clients->where('type_client', 'personne physique')->count() }}
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total des factures:</span>
                                <div class="count green">{{ $factures->count() }}</div>
                            </div>
                            <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> factures payées: </span>
                                <div class="count">{{ $factures->where('est_reglé', '1')->count() }}</div>
                            </div>
                            <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> factures impayées: </span>
                                <div class="count">{{ $factures->where('est_reglé', '0')->count() }}</div>
                            </div>

                        </div>
                    </div>
                    <!-- //statistics -->

                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="col-md-6 col-sm-6  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>derniers Clients :</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>type de client</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dernierClients as $dernierClient)
                            <tr>

                                <td>{{ $dernierClient->id }}</td>
                                <td>{{ $dernierClient->name }}</td>
                                <td>{{ $dernierClient->email }}</td>
                                <td>{{ $dernierClient->type_client }}</td>
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
                <h2>derniers factures : </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nom_client</th>
                            <th>date facturation</th>
                            <th>date de creation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dernierFactures as $dernierFacture)
                            <tr>

                                <td>{{ $dernierFacture->id }}</td>
                                <td>{{ $dernierFacture->nom_client }}</td>
                                <td>{{ $dernierFacture->date_facturation }}</td>
                                <td>{{ $dernierFacture->created_at }}</td>
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
                <h2>dernier forfaits : </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nom de forfait</th>
                            <th>description</th>
                            <th>prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dernierForfaits as $dernierForfait)
                            <tr>

                                <td>{{ $dernierForfait->id }}</td>
                                <td>{{ $dernierForfait->nom_forfait }}</td>
                                <td>{{ $dernierForfait->description }}</td>
                                <td>{{ $dernierForfait->prix }}</td>
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
                <h2>dernier contrats : </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nom client</th>
                            <th>forfait</th>
                            <th>date_creation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dernierContrats as $dernierContrat)
                            <tr>

                                <td>{{ $dernierContrat->id }}</td>
                                <td>{{ $dernierContrat->nom_client }}</td>
                                <td>{{ $dernierClient->forfait }}</td>
                                <td>{{ $dernierClient->created_at }}</td>
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
                <h2>paiements : </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>client</th>
                            <th>contrat</th>
                            <th>facture</th>
                            <th>date creation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dernierPaiements as $dernierPaiement)
                            <tr>

                                <td>{{ $dernierPaiement->id }}</td>
                                <td>{{ $dernierPaiement->client }}</td>
                                <td>{{ $dernierPaiement->contrat}}</td>
                                <td>{{ $dernierPaiement->facture}}</td>
                                <td>{{ $dernierPaiement->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <br>



</x-app-layout>
