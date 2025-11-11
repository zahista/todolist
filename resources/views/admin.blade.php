<x-layouts.app>

    <div class="container mx-auto bg-zinc-50 rounded-lg bordr border-zinc-200 p-8">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-medium mb-6">Tvoje restaurace</h1>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-4">
            @foreach ($restaurants as $restaurant)
                <a href="/restaurant/{{ $restaurant->id }}">
                    <x-restaurant :restaurant="$restaurant" />
                </a>
            @endforeach

            <div x-data="{
                slideOverOpen: false
            }" class="relative z-50 w-full h-full">
                <button @click="slideOverOpen=true"
                    class="border-sky-500 border border-dashed text-sky-500 p-4 rounded-lg w-full h-full">Vytvoři novou restauraci</button>
                <template x-teleport="body">
                    <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
                        <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"
                            class="fixed inset-0 bg-black/10"></div>
                        <div class="overflow-hidden fixed inset-0">
                            <div class="overflow-hidden absolute inset-0">
                                <!-- Remove the pt-11 from the element below, this was needed only for the demo -->
                                <div class="flex fixed inset-y-0 right-0 pt-11 pl-10 max-w-full">
                                    <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:enter-start="translate-x-full"
                                        x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                        x-transition:leave-start="translate-x-0"
                                        x-transition:leave-end="translate-x-full" class="w-screen max-w-md">
                                        <div
                                            class="flex overflow-y-scroll flex-col m-2 rounded-lg py-5 h-full bg-white border-l shadow-lg border-neutral-100/70">
                                            <div class="px-4 sm:px-5">
                                                <div class="flex justify-between items-start pb-1">
                                                    <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                        id="slide-over-title">Nová restaurace</h2>
                                                    <div class="flex items-center ml-3 h-auto">
                                                        <button @click="slideOverOpen=false"
                                                            class="flex absolute right-0 z-30 justify-center items-center px-3 py-2 mt-6 mr-5 space-x-1 text-xs font-medium uppercase rounded-md border border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
                                                            <span>Zavřít</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative flex-1 px-4 mt-5 sm:px-5">
                                                <div class="absolute inset-0 px-4 sm:px-5">


                                                    <form action="/admin/restaurants" class="space-y-2" method="POST">
                                                        @csrf
                                                        <x-input type="text" name="title"
                                                            placeholde="Název restaurace" />
                                                        <x-input type="text" name="description"
                                                            placeholder="Krátký popis" />
                                                        <x-input type="number" name="delivery_time" placeholder="30" />
                                                        <x-input type="number" name="minimal_offer"
                                                            placeholder="140" />
                                                        <x-input type="number" name="delivery_fee" placeholder="19" />
                                                        <x-input type="tel" name="phone_number" />
                                                        <x-input type="text" name="web" />
                                                        <x-input type="file" name="image" />
                                                        <button type="submit"
                                                            class="bg-sky-100 text-sky-500 p-4 rounded-lg hover:bg-sky-200">Vytvořit</button>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

        </div>






    </div>

</x-layouts.app>
