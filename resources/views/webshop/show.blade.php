<x-app-layout>
    <div class="py-12">
        <h1 class="text-body text-primary font-bold mb-8">Product assortiment</h1>
        <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-sm py-2 cursor-pointer w-full h-[400px] object-contain">
        <div class="flex mt-2 gap-2">
            <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-sm py-2 cursor-pointer w-[100px]">
            <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-sm py-2 cursor-pointer w-[100px]">
        </div>
        <div class="flex flex-col mt-2">
            <h1 class="text-body font-bold text-primary">500ml Original</h1>
            <h1 class="text-body">€1,50</h1>
        </div>
        <div x-data="{ show: true }" class="flex justify-between">
            <h1 x-show="show" class="my-2 text-mini p-1 font-bold text-success border-2 border-success w-1/2">Wel op voorraad</h1>
            <h1 x-show="!show" class="my-2 text-mini p-1 font-bold text-error border-2 border-error w-1/2">Niet op voorraad</h1>
            <button @click="show = !show" class="">[Voorbeeldknop]</button>
        </div>
        <h1 class="text-body font-bold my-4 text-success">Gratis blik bij 3 repen!</h1>
        <p class="text-mini">Aantal:</p>
        <div x-data="{ count: 0 }" class="flex mt-6 mb-4">
            <button class="p-3 text-body h-12 items-center flex text-primary" x-on:click="count = count > 0 ? count-1 : count">-</button>
            <h1 class="text-body font-bold bg-accent border-4 border-primary px-4 text-primary-content items-center justify-center flex h-12 w-[60px] flex-shrink-0" x-text="count"></h1>
            <button class="p-3 text-body h-12 items-center flex text-primary" x-on:click="count++">+</button>
            <a href="{{ route('shopping-cart.index') }}">
                <button class="btn btn-accent border-primary border-4 text-primary-content rounded-sm h-12">Toevoegen aan winkelwagen</button>
            </a>
        </div>
        <div class="flex flex-col gap-2 mt-8">
            <h1 class="text-body font-bold text-primary">Beschrijving</h1>
            <p class="text-mini py-2">
                Energiedranken kunnen variëren in samenstelling, maar over het algemeen bevatten ze een combinatie van de volgende ingrediënten:
            </p>
            <div class="flex flex-col ml-4">
                <x-description>
                    <x-slot name="name">
                        Cafeïne
                    </x-slot>
                    <x-slot name="description">
                        Dit is een van de belangrijkste actieve ingrediënten in energiedranken. Cafeïne is een stimulerend middel dat de alertheid en mentale focus kan verhogen. Het kan echter ook bijwerkingen hebben, zoals nervositeit, hartkloppingen en slapeloosheid.                    </x-slot>
                </x-description>
                <x-description>
                    <x-slot name="name">
                        Suiker
                    </x-slot>
                    <x-slot name="description">
                        Veel energiedranken bevatten aanzienlijke hoeveelheden suiker, meestal in de vorm van glucose, sucrose of fructose. Suiker levert snelle energie, maar overmatige consumptie kan leiden tot gewichtstoename, tandbederf en andere gezondheidsproblemen.                    </x-slot>
                </x-description>
                <x-description>
                    <x-slot name="name">
                        Taurine
                    </x-slot>
                    <x-slot name="description">
                        Dit is een aminozuur dat van nature voorkomt in het lichaam. Het wordt vaak aangetroffen in energiedranken vanwege de beweringen dat het de fysieke prestaties en mentale alertheid kan verbeteren. De exacte werking van taurine in energiedranken is echter nog niet volledig begrepen.                    </x-slot>
                </x-description>
                <x-description>
                    <x-slot name="name">
                        Guarana
                    </x-slot>
                    <x-slot name="description">
                        Guarana is een plant die van nature cafeïne bevat. Het wordt soms toegevoegd aan energiedranken vanwege de aanvullende cafeïneboost die het kan geven.                    </x-slot>
                </x-description>
                <x-description>
                    <x-slot name="name">
                        Vitamines en mineralen
                    </x-slot>
                    <x-slot name="description">
                        Sommige energiedranken bevatten verschillende vitamines en mineralen, zoals vitamine B-complex, vitamine C, calcium en magnesium. Deze worden toegevoegd om een gezond imago te creëren en om een extra voedingsboost te bieden.
                    </x-slot>
                </x-description>
            </div>
        </div>
        <h1 class="text-body font-bold text-primary my-6">Notitie:</h1>
        <p class="text-micro">
            Het is belangrijk op te merken dat de exacte samenstelling en de hoeveelheid van deze ingrediënten kunnen variëren tussen verschillende merken en producten. Bovendien kunnen energiedranken ook andere toevoegingen bevatten, zoals kunstmatige smaakstoffen, kleurstoffen en conserveermiddelen. Het is altijd raadzaam om het etiket van een energiedrank te lezen om een beter inzicht te krijgen in de specifieke ingrediënten en voedingswaarde.
        </p>
    </div>
</x-app-layout>
