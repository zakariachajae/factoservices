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
                    <h2>vos abonnements: </h2>
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
                                            
                                            <th>#</th>
                                            <th>nom de client</th>
                                            <th>le forfait</th>
                                            <th>numero de contrat</th>
                                
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($abonnements as $abonnement)
                                            <tr>
                                                <td>{{ $abonnement->id }}</td>
                                                <td>{{ $abonnement->nom_client }}</td>
                                                <td>{{ $abonnement->nom_forfait }}</td>
                                                <td>{{ $abonnement->id_contrat}}</td>
                                        
                                                
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