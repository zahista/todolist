@props(['title'=>"Nemám žadný title", "img" => NULL])


<div class="rounded-lg border border-gray-200 shadow overflow-hidden w-64">
    <img class="w-full" src="{{ $img }}" alt="">

    <div class="space-y-6 p-4">
        <h1 class="text-xl font-semibold">{{ $title }}</h1>
        
        <p class="text-xs text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro in natus nostrum, repellendus atque excepturi debitis architecto consequatur, consectetur pariatur accusantium earum culpa maiores. Eaque veritatis est repellat ipsa. Voluptas!</p>

        <div class="flex justify-end">
            <x-button>Objednat</x-button>
        </div>
    </div>

</div>
