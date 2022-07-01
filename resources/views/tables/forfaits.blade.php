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
                    <h2>gérer les forfaits: </h2>
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
                                            <th>Nom forfait</th>
                                            <th>description</th>
                                            <th>prix</th>
                                            <th>date creation</th>
                                            <th>operations</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($forfaits as $forfait)
                                            <tr>
                                                <td>{{ $forfait->id }}</td>
                                                <td>{{ $forfait->nom_forfait }}</td>
                                                <td>{{ $forfait->description }}</td>
                                                <td>{{ $forfait->prix }}</td>
                                                <td>{{ $forfait->created_at }}</td>
                                                <td><a href="#"class="btn btn-primary btn-sm">info</a> 
                                                    <a href="#" class="btn btn-warning btn-sm">modifier</a> 
                                                     <a href="#" class="btn btn-danger btn-sm">supp</a> </td>
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