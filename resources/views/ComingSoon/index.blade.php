<x-guest-layout>
    <img src="{{ asset('img/Groene Vingers Logo.png') }}" alt="" class="ml-8 h-16">
    <div class="flex pt-4 pl-8 space-x-6 text-lg">
        <a href="{{ route('ComingSoon.howsoon') }}">
            <div
                class="@if (request()->routeIs('ComingSoon.howsoon')) text-green-700 border-green-800 @endif border-b hover:border-black transition ease-in-out duration-200 hover:cursor-pointer p-2">
                <h1>How soon</h1>
            </div>
        </a>
        <a href="{{ route('ComingSoon.about') }}">
            <div
                class="@if (request()->routeIs('ComingSoon.about')) text-green-700 border-green-800 @endif border-b hover:border-black transition ease-in-out duration-200 hover:cursor-pointer p-2">
                <h1>About</h1>
            </div>
        </a>
        <a href="{{ route('ComingSoon.contact') }}">
            <div
                class="@if (request()->routeIs('ComingSoon.contact')) text-green-700 border-green-800 @endif border-b hover:border-black transition ease-in-out duration-200 hover:cursor-pointer p-2">
                <h1>Contact</h1>
            </div>
        </a>
    </div>
    <div x-data="{ changeHeight: false }" class="mt-8 flex-col @if (request()->routeIs('ComingSoon.howsoon')) flex @else hidden @endif">
        <div class="flex flex-col sm:flex-row place-content-center text-center">
            <h1 class="text-7xl uppercase text-green-600">Coming</h1>
            <h1 class="text-green-500 text-7xl uppercase ml-6"> soon</h1>
        </div>
        <div class="pt-6 border-t mt-4 flex sm:flex-row flex-col">
            <div class="">
                <img src="{{ asset('img/winkelfoto.jpg') }}" class="rounded-xl h-80 mx-auto sm:mx-0 object-cover"
                    alt="">
            </div>
            <div class="flex-grow">
                <h1 class="text-2xl text-center text-green-600 font-bold">
                    Deze website komt over <span class="text-green-800">21</span> dagen!
                </h1>
                {{-- <p class="max-w-[200px]" alt=""> --}}
                {{-- </p> --}}
                <div class="flex h-full items-end pb-8 justify-center" x-data>
                    <a href="#vestigingen" x-on:click="changeHeight = !changeHeight"
                        class="top-0 left-0 transition-transform duration-500 transform"
                        :class="{ 'sm:-translate-x-[12rem] sm:translate-y-[5rem] mt-8 sm:mt-0': changeHeight }">
                        <div class="flex flex-col mt-8 sm:mt-0">
                            <p class="text-green-800 text-lg">Meer informatie</p>
                            <img src="{{ asset('img/arrow.svg') }}"
                                class="rotate-180 h-8 hover:scale-[140%] transition ease-in-out duration-[500ms]"
                                :class="{ 'rotate-[180]': changeHeight }" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-0 sm:mt-[6rem] text-green-800" x-show="changeHeight">
            <h1 class="text-4xl font-bold text-center mb-6" id="vestigingen">Vestigingen:</h1>
            <div class="grid grid-cols-3 grid-rows-1 gap-2 sm:gap-8 text-lg">
                <div class="border px-5 py-2 rounded-xl">
                    <h1 class="text-center font-bold">GV Veldhoven</h1>
                    <p>
                        Plantstraat 1, 5509 LB Veldhoven

                        06 78 78 78 78

                        Manager: dhr. B Butsers
                    </p>
                </div>
                <div class="border px-5 py-2 rounded-xl">
                    <h1 class="text-center font-bold">GV Nuenen</h1>
                    <p>
                        Kapperstruikweg 1, 5674 AJ Nuenen

                        06 12 87 65 23

                        Manager: dhr. R Batsbak
                    </p>
                </div>
                <div class="border px-5 py-2 rounded-xl">
                    <h1 class="text-center font-bold">GV Best</h1>
                    <p>
                        NCB Heg 1, 5681 RH Best

                        06 96 32 14 78

                        Manager: dhr. G van Boven
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="mt-8 flex-col sm:flex-row place-content-center text-center min-h-[27rem] @if (request()->routeIs('ComingSoon.about')) flex @else hidden @endif">
        <p class="text-2xl mx-10 text-green-500">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis excepturi totam recusandae error
            aliquid vero aliquam fugiat, quia dolore quas blanditiis laborum debitis porro voluptate impedit tempora
            dolor expedita voluptas? Aperiam perspiciatis nihil et alias. Nostrum nisi voluptatibus quis culpa
            maxime repellat a architecto ea tempore reprehenderit delectus, cupiditate odit similique. Saepe est
            debitis libero cumque atque nemo nam voluptates, esse quis consequatur? Facere distinctio, corporis
            ipsum ea molestiae illum tempora et harum numquam impedit dolorum? Vel commodi asperiores ratione
            deserunt doloremque nisi. Exercitationem voluptatum aliquid similique necessitatibus, fugit repellendus
            magni repudiandae incidunt perferendis hic voluptatibus quo esse, magnam laboriosam.
        </p>
    </div>
    <div
        class="mt-8 flex-col sm:flex-row place-content-center text-center min-h-[27rem] @if (request()->routeIs('ComingSoon.contact')) flex @else hidden @endif">
        <div class="grid grid-cols-3 grid-rows-1 gap-2 sm:gap-8 text-lg">
            <div class="border px-5 py-2 rounded-xl">
                <iframe class="rounded-2xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2489.7710660357784!2d30.08782009999999!3d51.38888550000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472a7da75da15329%3A0x90fa0ec0023e401a!2sChernobyl%20Nuclear%20Power%20Plant!5e0!3m2!1snl!2snl!4v1680771008414!5m2!1snl!2snl"
                width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="border px-5 py-2 rounded-xl">
                <iframe class="rounded-2xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5135788.307607883!2d6.567219070917126!3d51.05845832635817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716be32014dffa1%3A0xe8e173d6821a53c5!2sStaatsmuseum%20Auschwitz-Birkenau!5e0!3m2!1snl!2snl!4v1680768252746!5m2!1snl!2snl"
                width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="border px-5 py-2 rounded-xl">
                <iframe class="rounded-2xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.7351942292485!2d4.881401576920455!3d52.37522144693815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c5213e1149%3A0xd49a5d653e635b0a!2sAnne%20Frank%20Huis!5e0!3m2!1snl!2snl!4v1680768181773!5m2!1snl!2snl"
                width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </div>

</x-guest-layout>
