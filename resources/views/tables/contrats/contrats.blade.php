<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="clearfix"></div>
    @if (Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>gérer les contrats: </h2>
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
                                            <th>Nom client</th>
                                            <th>forfait</th>
                                            <th>periodicite</th>
                                            <th>montant total</th>
                                            <th>date engagement</th>
                                            <th>operations</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($contrats as $contrat)
                                            <tr>
                                                <td>{{ $contrat->id }}</td>
                                                <td>{{ $contrat->nom_client }}</td>
                                                <td>{{ $contrat->nom_forfait }}</td>
                                                <td>{{ $contrat->periodicite }}</td>
                                                <td>{{ $contrat->montant_TTC }}</td>
                                                <td>{{ $contrat->date_eng }}</td>
                                                <td><a href="#"class="btn btn-primary btn-sm">info</a> 
                                                     <a href="{{ url('tables/contrats/delete', $contrat->id)}}" class="btn btn-danger btn-sm">supp</a> </td>
                                            </tr>
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