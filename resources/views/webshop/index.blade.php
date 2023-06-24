<x-app-layout>
    <div class="py-12">
        <h1 class="text-body font-bold text-primary">Product assortiment</h1>
        <div class="grid grid-cols-2 gap-x-2 sm:gap-x-20">
            <div class="h-20 flex justify-center">
                <button class="mt-4 btn btn-accent border-primary border-4 text-primary-content w-full rounded-sm">Blikken</button>
            </div>
            <div class="flex flex-row items-center gap-2 h-20 justify-center">
                <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40" fill="#B8CD00">
                    <path d="M384.173-144.173v-290.175L85.97-816.204h788.06L576.204-434.348v290.175H384.173ZM480-456.087l213.942-271.594H266.435L480-456.087Zm0 0Z" fill="#B8CD00"/>
                </svg>
                <h1 class="text-note bold rounded-md cursor-pointer">Sorteren</h1>
            </div>
        </div>
        <div class="grid grid-cols-2 justify-items-center gap-x-8 sm:gap-x-20 gap-y-10 mt-10">
        @for($i = 0; $i < 10; $i++)
            <a href="{{ route('webshop.show', $i) }}">
                <div class="flex flex-col">
                    <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-sm py-2 cursor-pointer w-[200px]">
                    <h1 class="text-note">500ml Original</h1>
                    <h1 class="text-body bold">$1,50</h1>
                </div>
            </a>
        @endfor
        </div>
    </div>
</x-app-layout>
