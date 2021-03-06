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
                    <h2>gérer les clients: </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div><a href={{url('/tables/clients/create')}} class="btn btn-warning btn-sm">créer un client</a></div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>is_actif</th>
                                            <th>type_client</th>
                                            <th>operations</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $client->id }}</td>
                                                <td>{{ $client->name }}</td>
                                                <td>{{ $client->email }}</td>
                                                <td>{{ $client->password }}</td>
                                                <td>{{ $client->is_actif }}</td>
                                                <td>{{ $client->type_client }}</td>
                                                <td><a href="#"class="btn btn-primary btn-sm">info</a> 
                                                     <a href="{{ url('tables/clients/edit', $client->id)}}" class="btn btn-warning btn-sm">modifier</a> 
                                                     <form action="{{ url('tables/clients/destroy' , ['id'=>$client->id]   ) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('PATCH') }}
                                                        <button type="submit" class="btn btn-danger btn-sm" style="margin-top: 10px;">supp</button>
                                                      </form></td>
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