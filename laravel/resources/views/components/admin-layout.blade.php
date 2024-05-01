<x-app>
    <div class="flex flex-row w-full" >
        <div class="w-1/4 h-screen sticky flex flex-col bg-blue-50" >
            {{-- <x-navbar></x-navbar> --}}
            <p class="text-2xl font-bold" >Menu</p>
            <a href="/admin">Home</a>
            <a href="/admin/logs">Logs</a>
            <a href="/admin/logs">Log out</a>
        </div>

        <div class="w-3/4 h-full" >
            {{ $slot }}
        </div>
    </div>
</x-app>
