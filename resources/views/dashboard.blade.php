<x-layouts.app>
    <section class="flex flex-col items-center justify p-8 container mx-auto">
        <div class="flex gap-4 mb-8">
            <x-link />
            <x-link />
            <x-link />
        </div>

        <div class="flex w-full gap-4 justify-center">
            <x-navcard title="Restaurace" image="pasta-dish-light.png" />
            <x-navcard title="Elektronika" image="headphones-light.png" />
            <x-navcard color="blue" title="Květiny" image="flowers-light.png" />
            <x-navcard title="Alkohol" image="alcohol-light-v2.png" />
            <x-navcard title="Zdraví a krása" image="lotion-light.png" />
            <x-navcard title="Ovoce a zelenina" image="fruits-and-vegetables-light.png" />
        </div>
    </section>

    <main class="container mx-auto p-8 space-y-8">
        <div>
            <h1 class="text-3xl font-semibold mb-6">Večeře poblíž</h1>
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4">
                @foreach ($restaurants as $restaurant)
                <a href="/restaurant/{{$restaurant->id}}">
                    <x-restaurant :restaurant="$restaurant" />
                </a>
                @endforeach
            </div>
        </div>
    </main>
</x-layouts.app>
