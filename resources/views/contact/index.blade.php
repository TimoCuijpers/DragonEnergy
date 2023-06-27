<x-app-layout>
    <div class="py-12 h-full flex-colum">
        <h1 class="text-left text-body font-bold text-primary">Mail ons</h1>
        <div class="flex-colum mt-5">

            <p class="text-note font-bold">Naam</p>
            <input class="h-9 bg-secondary border-white border-solid border w-full" />

            <p class="text-note font-bold mt-1">Uw e-mailadres</p>
            <input class="h-9 bg-secondary border-white border-solid border w-full" />

            <p class="text-note font-bold mt-1">Onderwerp</p>
            <input class="h-9 bg-secondary border-white border-solid border w-full" />

            <p class="text-note font-bold mt-1">Beschrijving</p>
            <input class=" bg-secondary border-white border-solid border h-32 w-full" />
        </div>

        <div class="flex mt-7 justify-between">
            <div>
            <img src="{{ asset('img/recapatcha.jpg') }}" class="h-16">
            </div>
            <div>
                <button class=" px-9 sm:px-24 py-5 bg-black border border-white">versturen</button>
            </div>
        </div>
        <div class=" flex-colum mt-14">
            <h1 class="text-left text-body font-bold text-primary">Openingstijden</h1>
            <div class="colum-flex mt-10 sm:px-10">
                <div class="flex text-note font-bold justify-between">
                    <p>Maandag:</p>
                    <p>09:00 - 17:00</p>
                </div>
                <div class="flex text-note font-bold justify-between mt-5">
                    <p>Dinsdag:</p>
                    <p>09:00 - 17:00</p>
                </div>
                <div class="flex text-note font-bold justify-between mt-5">
                    <p>Woensdag:</p>
                    <p>09:00 - 17:00</p>
                </div>
                <div class="flex text-note font-bold justify-between mt-5">
                    <p>Donderdag:</p>
                    <p>09:00 - 17:00</p>
                </div>
                <div class="flex text-note font-bold justify-between mt-5">
                    <p>Vrijdag:</p>
                    <p>09:00 - 17:00</p>
                </div>
                <div class="flex text-note font-bold justify-between mt-5">
                    <p>Zaterdag:</p>
                    <p>Gesloten</p>
                </div>
                <div class="flex text-note font-bold justify-between mt-5">
                    <p>Zondag:</p>
                    <p>Gesloten</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
