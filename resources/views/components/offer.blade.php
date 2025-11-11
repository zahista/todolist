@props(['offer'])

<div  class="hover:scale-103 hover:shadow-md duration-300 ease-in-out transition-all rounded-lg border border-gray-200 shadow p-4 pr-0 flex justify-between overflow-hidden gap-6 relative">
    <div class="flex flex-col justify-between">
        <div>
            <h1 class="text-sm font-semibold mb-2">{{$offer->title}}</h1>
            <p class="text-sm text-gray-400">{{$offer->description}}</p>
        </div>
        <p class="text-sky-600 text-sm">{{$offer->price}}</p>
    </div>
    <img class="w-48" src="{{ asset("/images/".$offer->image_path) }}" alt="">


    <button class="text-sky-500 bg-sky-50 p-2 rounded-bl-2xl rounded-md absolute top-2 right-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
    </button>
</div>
