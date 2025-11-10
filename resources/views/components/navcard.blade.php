@props(['image' => '', 'title'=>"", 'color' => 'yellow'])


<div class="bg-yellow-100 hidden"></div>
<div class="bg-red-100 hidden"></div>
<div class="bg-green-100 hidden"></div>
<div class="bg-blue-100 hidden"></div>
<div class="bg-purple-100 hidden"></div>


<div class="flex flex-col items-center justify-center">
    <div class="bg-{{$color}}-100 rounded-lg mb-2 px-4">
        <img class="w-26" src="{{ asset("images/$image") }}" alt="">
    </div>

    <p class="text-xs font-semibold">
        {{ $title }}
    </p>
</div>