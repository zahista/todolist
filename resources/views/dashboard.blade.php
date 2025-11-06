<x-layouts.app>
    <form action="/" method="POST" class="w-2/3 mx-auto border border-gray-200 space-y-4 p-8">
        @csrf
        <h1 class="text-lg">Napište nám</h1>

        <x-input placeholder="Email" name="email" value="{{ old('email') }}" />

        <x-input type="text" placeholder="Jméno" name="name"  value="{{ old('name') }}" />
        <x-textarea type="text" placeholder="Váš dotaz" name="question">
            {{old('question')}}
        </x-textarea>
        <x-button type="submit">Odeslat dotaz</x-button>
    </form>

    <div class="grid grid-cols-4">
        @foreach ($certificates as $certificate)
            <x-card title="{{ $certificate->title }}" />
        @endforeach
    </div>

</x-layouts.app>
