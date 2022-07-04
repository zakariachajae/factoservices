<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        @if (Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
    </div>
    @endif
    <h1>
        Les offres d'abonnement disponibles :
    </h1>
    <br>
    @foreach ($forfaits as $forfait)
        <div class="col-md-3   widget widget_tally_box text-center">
            <div class="x_panel ui-ribbon-container fixed_height_390">
                @if ($forfait->created_at == date('Y-m-d'))
                    <div class="ui-ribbon-wrapper">
                        <div class="ui-ribbon">
                            new
                        </div>
                    </div>
                @endif
                <div class="x_title text-center">
                    <h2>abonnement num: {{ $forfait->id }}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div style="text-align: center; margin-bottom: 17px">
                        <span class="chart" data-percent="86">
                            <span>
                                <h1>offre </h1>
                            </span>
                        </span>
                    </div>

                    <h3 class="name_title">{{ $forfait->nom_forfait }}</h3>
                    <p>ajoutée le : {{ $forfait->created_at }}</p>

                    <div class="divider"></div>

                    <p>{{ $forfait->description }} </p>
                    @foreach ($abonnements as $abonnement)
                        @if ($abonnement->nom_forfait == $forfait->nom_forfait)
                            <a class="btn btn-warning btn-sm">deja abonne</a>
                        @break
                       
                        @endif
                        
                   @endforeach
                   
                   <a href="{{ url('/abonnement', [$forfait->id]) }}"type="submit"
                    class="btn btn-success">s'abonner</a>
              
               
                    
                
            </div>
        </div>

    </div>
@endforeach






</x-app-layout>
