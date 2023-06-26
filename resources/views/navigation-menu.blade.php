<nav x-data="{ open: false }" class="bg-info border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto pr-4 sm:pr-6 lg:pr-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('products.index') }}" class="">
                        <img src="{{ asset('img/Logo.png') }}" class="h-20 transform -scale-x-100">
                    </a>
                </div>

                <!-- Header -->
                <x-nav-title :active="request()->routeIs('products.index')">
                    <h1>{{ __('Producten') }}</h1>
                </x-nav-title>
                <x-nav-title :active="request()->routeIs('webshop.*')">
                    <h1>{{ __('Webshop') }}</h1>
                </x-nav-title>
                <x-nav-title :active="request()->routeIs('winkelwagen.index')">
                    <h1>{{ __('Winkelwagen') }}</h1>
                </x-nav-title>
                <x-nav-title :active="request()->routeIs('contact.index')">
                    <h1>{{ __('Contact') }}</h1>
                </x-nav-title>

                <div class="bg-black w-[1px] h-8 hidden lg:inline-block flex-grow-0 flex-shrink-0 mx-3 md:mx-5"></div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px lg:flex items-center">
                    <x-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                        {{ __('Producten') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('webshop.index') }}" :active="request()->routeIs('webshop.*')">
                        {{ __('Webshop') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('shopping-cart.index') }}" :active="request()->routeIs('shopping-cart.index')">
                        {{ __('Winkelwagen') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('contact.index') }}" :active="request()->routeIs('contact.index')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-primary hover:text-secondary hover:bg-primary focus:outline-none transition duration-150 ease-in-out">
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
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                {{ __('Producten') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('webshop.index') }}" :active="request()->routeIs('webshop.*')">
                {{ __('Webshop') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('shopping-cart.index') }}" :active="request()->routeIs('shopping-cart.index')">
                {{ __('Winkelwagen') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('contact.index') }}" :active="request()->routeIs('contact.index')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
