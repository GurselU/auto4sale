<nav x-data="{ open: false }" class="bg-gray-800 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-20 w-full mx-auto">
        <div class="flex justify-around h-16 w-full">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center ">
                    <a href="{{ url('/') }}">
                        <x-application-logo />
                    </a>
                </div>

                <div class="flex">
                    @if(Auth::user()->role_id == 1)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->routeIs('user.index')) ? 'text-white' : 'text-gray-400' }}" href={{route('user.index')}}>
                            Marchands
                        </a>
                    </div>
                    @endif
                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->routeIs('seller.create')) ? 'text-white' : 'text-gray-400' }}" href={{route('seller.create')}}>
                            Formulaire
                        </a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->routeIs('archive.index')) ? 'text-white' : 'text-gray-400' }}" href={{route('archive.index')}}>
                            Archives
                        </a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->routeIs('form.index')) ? 'text-white' : 'text-gray-400' }}" href={{route('form.index')}}>
                            To Call
                        </a>
                    </div>
                    @endif
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-200 hover:border-gray-200 focus:outline-none focus:text-gray-500 focus:border-gray-300 transition duration-150 ease-in-out {{ (request()->routeIs('car.index')) ? 'text-white border-white' : 'text-gray-400' }}" href={{route('car.index')}}>
                            Véhicules
                        </a>
                    </div>
                </div>


                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            @if(Auth::user()->role_id == 1)
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                    {{ __('Users') }}
                </x-responsive-nav-link>
            </div>
            @endif
            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('seller.create')" :active="request()->routeIs('seller.create')">
                    {{ __('New Car') }}
                </x-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('archive.index')" :active="request()->routeIs('archive.index')">
                    {{ __('Archive') }}
                </x-responsive-nav-link>
            </div>
            @endif
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('car.index')" :active="request()->routeIs('car.index')">
                    {{ __('Cars') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
</nav>