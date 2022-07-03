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
                    <h2>details produits</h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                            <img src="{{asset('/admin/images/abonnement.jpg')}}" alt="..." />
                        </div>
                        
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                        <h3 class="prod_title">{{$forfait->nom_forfait}}</h3>

                        <p>{{$forfait->description}}
                        </p>
                        <br />

                        
                        <br />
                        <form action="{{url('/abonnement', ['id'=> $forfait->id])}}" method="post">
                          @csrf
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">choisir la periodicité </label>
                          <select class="form-control" id="exampleFormControlSelect1" name="periodicite">
                            <option>1</option>
                            <option>3</option>
                            <option>6</option>
                            <option>12</option>
                           
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlSelect1">choisir la methode de paiement</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="mode_paiement">
                            <option>virement</option>
                            <option>versement</option>
                            <option>online</option>
                            
                           
                          </select>
                        </div>
                        <br />

                        <div class="">
                            <div class="product_price">
                                <h1 class="price">{{$forfait->prix}}<small>MAD</small></h1>
                  
                                <br>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="confirmer l'abonnement">
                      </form>

                      

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
