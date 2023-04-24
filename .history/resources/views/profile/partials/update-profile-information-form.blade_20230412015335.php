<section>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="text-danger">{{ $error }}</div>
    @endforeach
    @endif
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 grid grid-cols-1">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                    @endif
                </div>
                @endif
            </div>


            <div>
                <label for="company" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Company Name</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->company }}" id="company" name="company">
            </div>
            <div>
                <label for="vat" class="block font-medium text-sm text-gray-700 dark:text-gray-300">VAT</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->vat }}" id="vat" name="vat">
            </div>
            <div>
                <label for="adres" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Adres and
                    Number</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->adres }}" id="adres" name="adres">
            </div>
            <div>
                <label for="zipCode" class="block font-medium text-sm text-gray-700 dark:text-gray-300">ZIP Code</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->zipCode }}" id="zipCode" name="zipCode">
            </div>
            <div>
                <label for="country" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Country</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->country }}" id="country" name="country">
            </div>
            <div>
                <label for="phone" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Phone</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->phone }}" id="phone" name="phone">
            </div>
            <div>
                <label for="maxBudget" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Maximum
                    Budget</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->maxBudget }}" id="maxBudget" name="maxBudget">
            </div>
            <div class="mb-3">
                <label for="maxYear" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Maximum Year</label>
                <input type="text" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $user->maxYear }}" id="maxYear" name="maxYear">
            </div>
            <div>
                <div class="text-xl font-medium text-sm text-gray-700 dark:text-gray-300">Please select categories</div>
                @foreach($categories as $cat)
                <div class="flex">
                    @if($user->categories->where('categorie', '=', $cat->categorie)->count() == 1)
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mr-2" type="checkbox" id='categ' name='tableIdCat[]' checked value={{ $cat->id }}>
                    <label class="font-medium text-sm text-gray-700 dark:text-gray-300" for='categ'>{{$cat->name}}</label>
                    @else
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mr-2" type="checkbox" id='categ' name='tableIdCat[]' value={{ $cat->id }}>
                    <label class="font-medium text-sm text-gray-700 dark:text-gray-300" for='categ'>{{$cat->name}}</label>
                    @endif
                </div>
                @endforeach
            </div>
            <div>
                <div class="text-xl font-medium text-sm text-gray-700 dark:text-gray-300">Please select chassis</div>
                @foreach($chassis as $chassi)
                <div class="flex">
                    @if($user->chassis->where('chassi', '=', $chassi->chassi)->count() == 1)
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mr-2" type="checkbox" id='chassi' name='tableIdChassi[]' checked value={{ $chassi->id }}>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for='chassi'>{{$chassi->name}}</label>
                    @else
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mr-2" type="checkbox" id='chassi' name='tableIdChassi[]' value={{ $chassi->id }}>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for='chassi'>{{$chassi->name}}</label>
                    @endif
                </div>
                @endforeach
            </div>
            <div>
                <div class="text-xl font-medium text-sm text-gray-700 dark:text-gray-300">Par quel moyen souhaitez-vous être informer des nouveaux véhicules ?</div>
                @foreach($contacts as $contact)
                <div class="flex">
                    @if($user->contacts->where('contact', '=', $contact->contact)->count() == 1)
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mr-2" type="checkbox" id='contact' name='tableIdContact[]' checked value={{ $contact->id }}>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for='contact'>{{$contact->name}}</label>
                    @else
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mr-2" type="checkbox" id='contact' name='tableIdContact[]' value={{ $contact->id }}>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for='contact'>{{$contact->name}}</label>
                    @endif
                </div>
                @endforeach
            </div>


            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
    </form>
</section>