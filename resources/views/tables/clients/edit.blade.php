<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @foreach ($errors->all() as $error)
        {{$error}} 
        <br>
    @endforeach
    <form action="{{url('/tables/clients/edit/{id}')}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" name="name"  value="{{$user->name}}"placeholder="Enter name">
            
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter email">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" value="{{$user->password}}"placeholder="Password">
        </div>

        <div class="form-group">
            <label >type de client</label>
            <select class="form-control" name="type_client" value="{{$user->type_client}}">
                <option>personne physique</option>
                <option>personne morale</option>

          </div>
        <div class="input-group">
        <input type="submit" class="btn btn-primary">
        </div>
      </form>
</x-app-layout>