<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

          <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, natus illum voluptates sunt ut voluptate recusandae placeat fuga, at eos repudiandae repellat animi ullam sit tempore doloribus quam porro odit?  </p>
          <br><br>
          <a href="{{url('/login')}}" class="btn btn-primary">Seconnecter</a>
          <a href="{{url('/register')}}" class="btn btn-success">Créer un compte</a>
    </x-auth-card>
</x-guest-layout>
