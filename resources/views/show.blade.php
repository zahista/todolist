<x-layouts.app>

    <div class="grid grid-cols-4">
        @foreach ($restaurant->offers as $offer)
        <x-offer :offer="$offer" />
        @endforeach
    </div>
 
</x-layouts.app>