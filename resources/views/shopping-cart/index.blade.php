<x-app-layout>
    <div class="py-12 h-full flex-colum">
        <h1 class="text-left text-body font-bold text-primary">Winkelwagen</h1>


        <!-- item1 -->
        <div class="w-full h-28 mt-5 bg-secondary border-white border-solid border flex ">
            <img src="{{ asset('img/blik.jpg') }}" class="h-14 sm:h-24 mb-auto mt-auto pr-2 sm:pl-1 sm:pr-5 md:pl-6 md:pr-10">
            <div class="flex-colum h-24 mt-auto mb-0">
                <h1 class="text-mini sm:text-note font-bold h-7">500ml Original</h1>
                <p class="text-micro sm:text-mini h-6">€1,50</p>
                <p class="text-micro h-4">26-6-2023</p>
                <p class="text-micro h-4">13:02</p>
            </div>
            <div class="flex-colum ml-auto mr-1 sm:mr-5 mt-auto mb-auto text-center">
                <div class="flex items-baseline text-center mt-auto mb-auto">
                    <div class="pr-1 sm:pr-3">
                        <button class="text-primary font-bold text-mini sm:text-note">+</button>
                    </div>
                    <p class="text-mini font-bold bg-accent border-4 rounded-lg border-primary px-1 sm:px-4">4</p>
                    <div class="pl-1 sm:pl-3">
                        <button class="text-primary font-bold text-mini sm:text-note">-</button>
                    </div>
                </div>
                <p class="mt-2 text-mini sm:text-note font-bold">€6,00</p>
            </div>
        </div>


        <!-- item2 -->
        <div class="w-full h-28 mt-5 bg-secondary border-white border-solid border flex ">
            <img src="{{ asset('img/blik.jpg') }}" class=" h-14 sm:h-24 mb-auto mt-auto pr-2 sm:pl-1 sm:pr-5 md:pl-6 md:pr-10">
            <div class="flex-colum h-24 mt-auto mb-0">
                <h1 class="text-mini sm:text-note font-bold h-7">250ml Original</h1>
                <p class="text-micro sm:text-mini h-6">€0,80</p>
                <p class="text-micro h-4">26-6-2023</p>
                <p class="text-micro h-4">13:02</p>
            </div>
            <div class="flex-colum ml-auto mr-1 sm:mr-5 mt-auto mb-auto text-center">
                <div class="flex items-baseline text-center mt-auto mb-auto">
                    <div class="pr-1 sm:pr-3">
                        <button class="text-primary font-bold text-mini sm:text-note">+</button>
                    </div>
                    <p class="text-mini font-bold bg-accent border-4 rounded-lg border-primary px-1 sm:px-4">7</p>
                    <div class="pl-1 sm:pl-3">
                        <button class="text-primary font-bold text-mini sm:text-note">-</button>
                    </div>
                </div>
                <p class="mt-2 text-mini sm:text-note font-bold">€5,60</p>
            </div>
        </div>

    <div class=" text-right mt-2 text-mini sm:text-body">
    <p>ex. btw €9,12</p>
    <p>in. btw €11,60</p>
    </div>

    <div class=" text-right mt-64 ">
    <p class="text-mini ">Afrekenen?</p>
    <p class="text-note font-bold">€11,60</p>
    <button class=" btn btn-accent border-primary border-4 text-primary-content h-6 px-14">Ja</button>
    </div>

    </div>



</x-app-layout>
