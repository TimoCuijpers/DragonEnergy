<div class="text-mini my-2" x-data="{show : false}">
    <div class="flex flex-col justify-center flex-grow-0">
        <p class="">
            {{ $name }}
        </p>
        <button @click="show = !show" class="flex flex-row items-center">
            <p class="mr-2 text-micro">
                Uitvouwen:
            </p>
            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Polygon 3" d="M5.5 11L0.73686 0.5H10.2631L5.5 11Z" fill="#B8CD00"/>
            </svg>
        </button>
    </div>
    <div x-show="show" class="text-micro py-4">
        {{ $description }}
    </div>
</div>
