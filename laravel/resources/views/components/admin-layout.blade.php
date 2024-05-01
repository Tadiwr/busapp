<x-app>
    <div class="flex flex-row w-full" >
        <div class="w-1/4 h-full sticky" >
            {{-- <x-navbar></x-navbar> --}}
            <p>Side bar should be here</p>
        </div>

        <div class="w-3/4 h-full" >
            {{ $slot }}
        </div>
    </div>
</x-app>
