
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-1 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="lg:flex flex-1 p-4 sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto lg:hidden" src="{{asset('images/sellauto_logo.svg')}}" alt="Your Company">
                    <img class="hidden h-8 w-auto lg:block" src="{{asset('images/sellauto_logo.svg')}}" alt="Your Company">
                </div>
                <div class="flex">
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->is('/')) ? 'text-white border-white' : 'text-gray-400' }}" href="/">
                            Je souhaite vendre
                        </a>
                    </div>
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->is('dealer')) ? 'text-white border-white' : 'text-gray-400' }}" href="dealer">
                            Je souhaite acheter
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">View notifications</span>

                </button>

                <div class="relative ml-3">
                    <div>
                        <button id="langSwitch" type="button" class="text-gray-400 font-bold font-mono flex rounded-full bg-gray-800 hover:bg-gray-600 p-2 text-sm focus:outline-none focus:ring-1 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-800" aria-expanded="false" aria-haspopup="true">
                        </button>
                    </div>

                    <div id="languages" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="" class="hover:bg-gray-300 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">
                            <span class="flex">
                                <img class="h-4 w-4 mr-1 mt-0.5" src="{{asset('images/belgium.png')}}" alt="">
                                Français</span></a>
                        <a href="" class="hover:bg-gray-300 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1"><span class="flex">
                                <img class="h-4 w-4 mr-1 mt-0.5" src="{{asset('images/belgium.png')}}" alt="">
                                Nederlands</span></a>
                        <a href="" class="hover:bg-gray-300 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2"><span class="flex">

                                <img class="h-4 w-4 mr-1 mt-0.5" src="{{asset('images/germany.png')}}" alt="">



                                Deutsch</span></a>
                        <a href="" class="hover:bg-gray-300 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2"><span class="flex">
                                <img class="h-4 w-4 mr-1 mt-0.5" src="{{asset('images/united-kingdom.png')}}" alt="">

                                English</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Route::has('login'))
    <div class="absolute top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/admin/car') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Véhicules</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif
</nav>

<script>
    let showLanguagesList = false;

    document.addEventListener('click', function(event) {
        showLanguagesList = !showLanguagesList;
        const dropdownBtn = document.getElementById('langSwitch');
        const dropdownMenu = document.getElementById('languages');
        if (event.target === dropdownBtn && showLanguagesList) {
            dropdownMenu.classList.remove('hidden');
        } else if (!dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });

    const selectedLanguage = 'FR';

    // document.getElementById('langSwitch').innerText = selectedLanguage;
</script>