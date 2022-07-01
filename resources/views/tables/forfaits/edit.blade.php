<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
    <form action="{{url('/tables/forfaits/update',['forfait'=>$forfait->id])}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="exampleInputEmail1">nom de forfait</label>
            <input type="text" class="form-control" name="nom_forfait" value="{{$forfait->nom_forfait}}" placeholder="Enter nom forfait">
            
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">description</label>
          <input type="text" class="form-control" name="description" value="{{$forfait->description}}" placeholder="Enter description">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">prix</label>
          <input type="number" class="form-control" name="prix" value="{{$forfait->prix}}"placeholder="prix">
        </div>

       
        <div class="input-group">
        <input type="submit" class="btn btn-primary">
        </div>
      </form>
</x-app-layout>