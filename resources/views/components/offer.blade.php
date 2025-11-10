@props(['offer'])


<div>
    <h1>{{$offer->title}}</h1>
    <h1>{{$offer->description}}</h1>
    <h1>{{$offer->price}}</h1>
    <img src="{{ asset("/images".$offer->image_path) }}" alt="">
</div>
