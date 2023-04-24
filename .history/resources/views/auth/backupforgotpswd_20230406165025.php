<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nom Prénom*')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe (minimum 8 caractères)*')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmez votre mot de passe*')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <label for="company" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Nom de société (facultatif)</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="company" name="company">
        </div>
        <div class="mt-4">
            <label for="vat" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Numéro de TVA (facultatif)</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="vat" name="vat">
        </div>
        <div class="mt-4">
            <label for="adres" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Adresse et numéro</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="adres" name="adres">
        </div>
        <div class="mt-4">
            <label for="zipCode" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Code Postale*</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="zipCode" name="zipCode">
        </div>
        <div class="mt-4">
            <label for="country" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Pays*</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="country" name="country">
        </div>
        <div class="mt-4">
            <label for="phone" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Numéro mobile*</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="phone" name="phone">
        </div>
        <div class="mt-4">
            <label for="maxBudget" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Budget maximum pour un véhicule*</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="maxBudget" name="maxBudget">
        </div>
        <div class="mt-4">
            <label for="maxYear" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Age maximum des véhicule*</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" id="maxYear" name="maxYear">
        </div>
        <div class="mt-6 w-full">
            <h3 class="block font-medium text-sm text-gray-700 dark:text-gray-300 text-lg">Catégories de véhicules:</h3>
            <div class="flex flex-wrap w-full">
                @foreach($categories as $cat)
                <div class="flex w-1/2">
                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-gray-500 mt-2" id='categ' name='tableIdCat[]' value={{ $cat->id }}>
                    <label class="block font-medium text-sm text-gray-700 mt-2 dark:text-gray-300 ml-1" for='categ'>{{$cat->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-6 w-full">
            <h3 class="block font-medium text-sm text-gray-700 dark:text-gray-300 text-lg">Type de Chassi:</h3>
            <div class="flex flex-wrap w-full">
                @foreach($chassis as $chassi)
                <div class="flex w-1/2">
                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-gray-500 mt-2" id='chassi' name='tableIdChassi[]' value={{ $chassi->id }}>
                    <label class="block font-medium text-sm text-gray-700 mt-2 dark:text-gray-300 ml-1" for='chassi'>{{$chassi->name}}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-6">
            <h3 class="block font-medium text-sm text-gray-700 dark:text-gray-300 text-lg">Par quel moyen souhaitez-vous recevoir les nouveaux véhicules ?</h3>
            <div class="flex flex-wrap w-full">
                @foreach($contacts as $contact)
                <div class="flex w-1/2">
                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-gray-500 mt-2" id='contact' name='tableIdContact[]' value={{ $contact->id }}>
                    <label class="block font-medium text-sm text-gray-700 mt-2 dark:text-gray-300 ml-1" for='contact'>{{$contact->name}}</label>
                </div>
                @endforeach
            </div>
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Client existant ?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('S\'enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>