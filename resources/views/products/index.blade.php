<x-app-layout>
    <div class="py-12" x-data="{ activeButton: '' }">
        <h1 class="text-center text-body font-bold text-primary">Meest populair</h1>
        <x-line/>
        <div class="flex justify-center gap-y-10 gap-x-20 flex-col sm:flex-row">
            <div class="flex flex-col">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer h-[18rem] w-[16rem] object-contain mx-auto">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">&euro;1,50</h1>
                <button class="mt-4 btn btn-accent border-primary border-4 text-primary-content mx-8" x-on:click="activeButton === 'knop1' ? activeButton = '' : activeButton = 'knop1'">
                    Blikken
                </button>
            </div>
            <div class="flex flex-col">
                <img src="{{ asset('img/reep.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer h-[18rem] w-[16rem] object-contain mx-auto">
                <h1 class="text-note">Original Bar</h1>
                <h1 class="text-body bold">&euro;0,60</h1>
                <button class="mt-4 btn btn-accent border-primary border-4 text-primary-content mx-8" x-on:click="activeButton === 'knop2' ? activeButton = '' : activeButton = 'knop2'">
                    Repen
                </button>
            </div>
        </div>
        <div x-show="activeButton === 'knop1' || activeButton === 'knop2'">
            <x-line/>
            <div class="flex justify-center items-center">
                <h1 class="text-center text-note mr-4 text-primary" x-show="activeButton === 'knop1'">Meer informatie over blikken</h1>
                <h1 class="text-center text-note mr-4 text-primary" x-show="activeButton === 'knop2'">Meer informatie over repen</h1>
            </div>
            <div class="text-micro py-4 text-center">
                <span x-show="activeButton === 'knop1'">
                    Energiedranken zijn drankjes bedoeld om een tijdelijke stimulans van energie te geven. Ze bevatten meestal ingrediënten zoals cafeïne, suiker, taurine, guarana en verschillende vitamines. Energiedranken worden vaak geconsumeerd om vermoeidheid te verminderen, alertheid te verhogen en het uithoudingsvermogen te verbeteren.
                    <br>
                    <br>
                    Hoewel energiedranken inderdaad een energieboost kunnen geven, is het belangrijk om voorzichtig te zijn bij het consumeren ervan. Ze bevatten vaak grote hoeveelheden cafeïne en suiker, wat bij overmatige consumptie kan leiden tot gezondheidsproblemen zoals hartkloppingen, hoge bloeddruk, slapeloosheid, uitdroging en zelfs verslaving. Mensen met bepaalde medische aandoeningen of gevoeligheden moeten ook voorzichtig zijn bij het consumeren van energiedranken.
                    <br>
                    <br>
                    Bovendien kunnen energiedranken een negatieve invloed hebben op de slaapkwaliteit, dehydratatie veroorzaken en in combinatie met alcohol gevaarlijk zijn. Het is belangrijk om de consumptie van energiedranken te matigen en bewust te zijn van de mogelijke bijwerkingen. Het is altijd verstandig om met mate te genieten van energiedranken en, indien nodig, gezondere alternatieven te overwegen, zoals water, thee of natuurlijke vruchtensappen.
                </span>
                <span x-show="activeButton === 'knop2'">
                    Energierepen zijn compacte voedingsproducten die bedoeld zijn om snel en gemakkelijk een bron van energie te leveren. Ze worden vaak gebruikt door atleten en mensen die actief zijn om de energievoorziening tijdens intensieve lichamelijke activiteit aan te vullen. Energierepen zijn draagbaar, lang houdbaar en kunnen een handige snack zijn voor onderweg.
                    <br>
                    <br>
                    De samenstelling van energierepen kan variëren, maar ze bevatten meestal een combinatie van koolhydraten, eiwitten, vetten en vezels. Koolhydraten zijn de belangrijkste bron van energie en worden vaak in grote hoeveelheden aangetroffen in energierepen. Ze kunnen verschillende soorten koolhydraten bevatten, zoals glucose, fructose, haver, rijst of andere granen.
                    <br>
                    <br>
                    Eiwitten worden soms ook aan energierepen toegevoegd om het spierherstel en de opbouw te ondersteunen na intense trainingen. Vetten kunnen ook aanwezig zijn, vaak in de vorm van gezonde onverzadigde vetten, die langdurige energie kunnen leveren. Vezels dragen bij aan een betere spijsvertering en verzadiging.
                    <br>
                    <br>
                    Het is belangrijk op te merken dat niet alle energierepen gelijk zijn en dat de voedingswaarde kan variëren. Sommige energierepen bevatten veel suiker, kunstmatige zoetstoffen, conserveermiddelen en andere toevoegingen. Het is daarom verstandig om het etiket te lezen en rekening te houden met je individuele voedingsbehoeften en doelen.
                    <br>
                    <br>
                    Hoewel energierepen handig kunnen zijn als tussendoortje tijdens intensieve activiteiten, is het belangrijk om ze <span class="font-bold">NIET</span> te beschouwen als vervanging voor een uitgebalanceerd dieet. Het is altijd het beste om te streven naar een gezonde, gevarieerde voeding die voldoende voedingsstoffen levert.
                </span>
            </div>
        </div>
        <x-line/>
        <h1 class="text-primary text-body font-bold text-center">Beste Deals</h1>
        <x-line/>
        <div class="flex justify-center gap-y-10 gap-x-20 flex-col sm:flex-row">
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer h-[14rem] w-[12rem] object-contain  mx-auto">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">&euro;1,50</h1>
            </div>
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer h-[14rem] w-[12rem] object-contain  mx-auto">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">&euro;1,50</h1>
            </div>
        </div>
        <x-line/>
        <h1 class="text-primary text-body font-bold text-center">Nieuw in ons assortiment</h1>
        <x-line/>
        <div class="flex justify-center gap-y-10 gap-x-20 flex-col sm:flex-row">
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer h-[14rem] w-[12rem] object-contain  mx-auto">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">&euro;1,50</h1>
            </div>
            <div class="flex flex-col justify-center mx-6">
                <img src="{{ asset('img/blik.png') }}" class="bg-secondary rounded-xl py-2 cursor-pointer h-[14rem] w-[12rem] object-contain  mx-auto">
                <h1 class="text-note">500ml Original</h1>
                <h1 class="text-body bold">&euro;1,50</h1>
            </div>
        </div>
    </div>
</x-app-layout>
