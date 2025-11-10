<nav class="border-b border-gray-200 w-full p-4 py-6">
    <div class="container mx-auto flex justify-between items-center">

        <div id="leva" class="flex items-center gap-6">
            <img src="{{ asset('images/wolt_logo.png') }}" class="h-8" alt="">
            <button class="flex gap-2 text-sky-600 items-center">

                <div class="bg-sky-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                </div>

                <span class="text-sm">Praha</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>

            </button>
        </div>

        <div id="stred">

            <div class="flex items-center bg-gray-200 rounded-full px-4 py-2 gap-2">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="search" class="focus:outline-none" placeholder="Hledat na Woltu">
            </div>
        </div>

        <div id="prava">
            <a href="" class="text-sm mr-4">Přihlásit</a>
            <a href="" class="bg-sky-100 text-sky-500 p-4 rounded-lg hover:bg-sky-200">Registrace</a>
        </div>
    </div>
</nav>
