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
                <x-label for="nom" :value="__('Nom')" />

                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
            </div>
{{-- prenom --}}
            <div>
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
            </div>
{{-- login --}}
            <div>
                <x-label for="Login" :value="__('Login')" />

                <x-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus />
            </div>
{{-- date de naissance  --}}

            <div>
                <x-label for="dateNaiss" :value="__('Date de naissance')" />

                <x-input id="datenaiss" class="block mt-1 w-full" type="date" name="datenaiss" :value="old('datenaiss')" required autofocus />
            </div>

{{-- sexe --}}


                <div class="mt-4">
                    <x-label for="sexe" :value="__(' Sexe ')" />

                <select name="sexe" class="block mt-1 w-full border-gray-300
                focus:border-indigo-300 focus:ring-indigo-200
                focus:ring-opacity-50 rounded-md shaddow-sm ">

                        <option value="m"> Masculin </option>
                        <option value="f"> Feminin </option>

                    </select>

                </div>

            {{-- <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div> --}}

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            {{-- adresse --}}
            <div>
                <x-label for="adresse" :value="__('Adresse')" />

                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe ')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe ')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            {{-- Ajout de l'option select pour les rôles  --}}
            <div class="mt-4">
                <x-label for="role_id" :value="__(' S\'enregistrer en tant que ')" />
        
               <select name="role_id" class="block mt-1 w-full border-gray-300
               focus:border-indigo-300 focus:ring-indigo-200
               focus:ring-opacity-50 rounded-md shaddow-sm ">

                    <option value="eleve"> Eleve </option>
                    <option value="Relative"> Parent </option>
                    <option value="professeur"> Professeur </option>
                    <option value="etablissement"> Etablissement </option>
                    <option value="Admin"> Administrateur </option>
                    <option value="SuperAdmin"> Super Administrateur </option>
 
                </select>

            </div>

          

            {{-- Fin de l'ajout des options select pour les rôles  --}}

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
