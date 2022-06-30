<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div x-data="{ isphysique: false }">

            <!-- TYpe de client -->
            <div class="mt-4">
                <x-label for="type_client" :value="__('Type de client')" />
                <select name="type_client" id="" >
                    <option value="pp" @click="isphysique = true"  >Personne Physique</option>
                    <option value="pm" @click="isphysique = false">Personne morale</option>
                </select>
    
<div>
                <!-- CIN -->
                <div class="mt-4" id="cin" x-show="isphysique" >
                    <x-label for="cin" :value="__('CIN')" />
                    <x-input id="cin" class="block mt-1 w-full" type="text" name="cin" :value="old('cin')"
                         />
                </div>
                <div id="societe"  x-show="! isphysique" >
                    <!-- nom_societe -->
                    <div class="mt-4">
                        <x-label for="nom_societe" :value="__('Nom de la société')" />
                        <x-input id="nom_societe" class="block mt-1 w-full" type="text" name="nom_societe"
                            :value="old('nom_societe')"  />
                    </div>
                    <!-- type_societe -->
                    <div class="mt-4">
                        <x-label for="type_societe" :value="__('Type société')" />
                        <x-input id="type_societe" class="block mt-1 w-full" type="text" name="type_societe"
                            :value="old('type_societe')"  />
                    </div>
                    <!-- reference -->
                    <div class="mt-4">
                        <x-label for="reference" :value="__('Référence')" />
                        <x-input id="reference" class="block mt-1 w-full" type="text" name="reference"
                            :value="old('reference')"  />
                    </div>
                    <!-- ice -->
                    <div class="mt-4">
                        <x-label for="ice" :value="__('ICE')" />
                        <x-input id="ice" class="block mt-1 w-full" type="text" name="ice"
                            :value="old('ice')"  />
                    </div>
                </div>
            </div>
        </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
