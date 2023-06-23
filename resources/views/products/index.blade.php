<x-app-layout>
    <div class="py-12">
        <h1 class="text-center text-body font-bold text-primary">Meest populair</h1>
        <x-line/>
        <div class="flex justify-center gap-x-20">
            <div class="flex flex-col">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">$1,50</h1>
                <button class="mt-4 btn btn-accent border-primary border-4 text-primary-content mx-8">Blikken</button>
            </div>
            <div class="flex flex-col">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">$1,50</h1>
                <button class="mt-4 btn btn-accent border-primary border-4 text-primary-content mx-8">Blikken</button>
            </div>
        </div>
        <x-line/>
        <div class="flex justify-center items-center cursor-pointer">
            <h1 class="text-center text-note mr-4 text-primary">Meer informatie over blikken en repen</h1>
            <svg class="mt-1" width="16" height="16" viewBox="0 0 11 11" fill="#B8CD00" xmlns="http://www.w3.org/2000/svg">
                <path id="Polygon 3" d="M5.5 11L0.73686 0.5H10.2631L5.5 11Z" fill="#B8CD00"/>
            </svg>
        </div>
        <x-line/>
        <h1 class="text-primary text-body font-bold text-center">Beste Deals</h1>
        <x-line/>
        <div class="flex justify-center gap-x-20">
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">$1,50</h1>
            </div>
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">$1,50</h1>
            </div>
        </div>
        <x-line/>
        <h1 class="text-primary text-body font-bold text-center">Nieuw in ons assortiment</h1>
        <x-line/>
        <div class="flex justify-center gap-x-20">
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">$1,50</h1>
            </div>
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">$1,50</h1>
            </div>
        </div>
    </div>
</x-app-layout>
