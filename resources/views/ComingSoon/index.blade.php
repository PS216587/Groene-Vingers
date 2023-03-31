<x-guest-layout>
    <div class="flex pt-10 pl-8 space-x-6">
        <a href="{{ route('ComingSoon.howsoon') }}">
            <div class="@if(request()->routeIs('ComingSoon.howsoon')) text-blue-500 border-blue-600 @endif border-b hover:border-black transition ease-in-out duration-200 hover:cursor-pointer p-2">
                <h1>How soon</h1>
            </div>
        </a>
        <a href="{{ route('ComingSoon.about') }}">
            <div class="@if(request()->routeIs('ComingSoon.about')) text-blue-500 border-blue-600 @endif border-b hover:border-black transition ease-in-out duration-200 hover:cursor-pointer p-2">
                <h1>About</h1>
            </div>
        </a>
        <a href="{{ route('ComingSoon.contact') }}">
            <div class="@if(request()->routeIs('ComingSoon.contact')) text-blue-500 border-blue-600 @endif border-b hover:border-black transition ease-in-out duration-200 hover:cursor-pointer p-2">
                <h1>Contact</h1>
            </div>
        </a>
    </div>
    <div class="items-center justify-center mt-48 @if(request()->routeIs('ComingSoon.howsoon')) flex @else hidden @endif">
        <h1 class="text-7xl uppercase text-[#7fa3ff]">Coming</h1><h1 class="text-[#476fd2] text-7xl uppercase ml-6"> soon</h1>
    </div>
    <div class="items-center justify-center mt-10 @if(request()->routeIs('ComingSoon.about')) flex @else hidden @endif">
        <p class="text-2xl mx-10 text-[#7fa3ff]">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis excepturi totam recusandae error aliquid vero aliquam fugiat, quia dolore quas blanditiis laborum debitis porro voluptate impedit tempora dolor expedita voluptas? Aperiam perspiciatis nihil et alias. Nostrum nisi voluptatibus quis culpa maxime repellat a architecto ea tempore reprehenderit delectus, cupiditate odit similique. Saepe est debitis libero cumque atque nemo nam voluptates, esse quis consequatur? Facere distinctio, corporis ipsum ea molestiae illum tempora et harum numquam impedit dolorum? Vel commodi asperiores ratione deserunt doloremque nisi. Exercitationem voluptatum aliquid similique necessitatibus, fugit repellendus magni repudiandae incidunt perferendis hic voluptatibus quo esse, magnam laboriosam.
        </p>
    </div>
    <div class="items-center justify-center mt-10 @if(request()->routeIs('ComingSoon.contact')) flex @else hidden @endif">
        <p class="text-2xl mx-10 text-[#7fa3ff]">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis excepturi totam recusandae error aliquid vero aliquam fugiat, quia dolore quas blanditiis laborum debitis porro voluptate impedit tempora dolor expedita voluptas? Aperiam perspiciatis nihil et alias. Nostrum nisi voluptatibus quis culpa maxime repellat a architecto ea tempore reprehenderit delectus, cupiditate odit similique. Saepe est debitis libero cumque atque nemo nam voluptates, esse quis consequatur? Facere distinctio, corporis ipsum ea molestiae illum tempora et harum numquam impedit dolorum? Vel commodi asperiores ratione deserunt doloremque nisi. Exercitationem voluptatum aliquid similique necessitatibus, fugit repellendus magni repudiandae incidunt perferendis hic voluptatibus quo esse, magnam laboriosam.
        </p>
    </div>
    
</x-guest-layout>
