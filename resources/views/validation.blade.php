<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>valider les factures:</h1>
    <br>
    <div class="clearfix"></div>
    @if (Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}</p>
    @endif
    @foreach ($factures as $facture)
        <div class="col-md-4 col-sm-4  profile_details">
            <div class="well profile_view">
                <div class="col-sm-12">
                    <h4 class="brief"><i>facture {{ $facture->id }}</i></h4>
                    <div class="left col-md-7 col-sm-7">
                        <h2>de : {{ $facture->nom_client }}</h2>
                        <p><strong>forfait inclus : {{ $facture->forfait }} </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-dollar"></i> le paiement : {{ $facture->date_paiement }} </li>
                            <li><i class="fa fa-invoice"></i> facturé le : {{ $facture->date_facturation }} </li>
                        </ul>
                    </div>
                    <div class="right col-md-5 col-sm-5 text-center">
                        <img src="images/img.jpg" alt="" class="img-circle img-fluid">
                    </div>
                </div>
                <div class=" profile-bottom text-center">
                    <div class=" col-sm-6 emphasis">
                        
                    </div>
                    <div class=" col-sm-6 emphasis">
                        <form action="{{ url('validation/' .$facture->id. '/1'   ) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button type="submit" class="btn btn-success" style="margin-top: 10px;">valider</button>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    
</x-app-layout>
