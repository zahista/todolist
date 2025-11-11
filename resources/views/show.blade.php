<x-layouts.app>

    <main
        class="bg-[url(/public/images/banner.jpg)] bg-center bg-no-repeat bg-cover h-[22vh] bg-gray-400 flex flex-col justify-end p-6 z-10 relative">
        <div class="container mx-auto z-50">
            <h1 class="text-5xl font-bold text-white mb-2">{{ $restaurant->title }}</h1>
            <p class="text-white">{{ $restaurant->description }}</p>
        </div>

        <div class="w-full h-full absolute top-0 left-0 bg-gray-900 opacity-45"></div>
    </main>

    <section class="py-4 border-b border-gray-200 bg-white ">
        <div class="container mx-auto">
            <div x-data="{
                tabSelected: 1,
                tabId: $id('tabs'),
                tabButtonClicked(tabButton) {
                    this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
                    this.tabRepositionMarker(tabButton);
                },
                tabRepositionMarker(tabButton) {
                    this.$refs.tabMarker.style.width = tabButton.offsetWidth + 'px';
                    this.$refs.tabMarker.style.height = tabButton.offsetHeight + 'px';
                    this.$refs.tabMarker.style.left = tabButton.offsetLeft + 'px';
                },
                tabContentActive(tabContent) {
                    return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
                }
            }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="relative w-full max-w-sm">

                <div x-ref="tabButtons"
                    class="relative inline-grid items-center justify-center w-full h-10 grid-cols-2 p-1 text-gray-500 bg-gray-100 rounded-full select-none">
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                        class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded-full cursor-pointer whitespace-nowrap">Doručení 15-25 minut</button>
                    <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
                        class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded-full cursor-pointer whitespace-nowrap">Vyzvednutí</button>
                    <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" x-cloak>
                        <div class="w-full h-full bg-white rounded-full shadow-sm"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <nav class="bg-white border-b border-gray-200 p-4 sticky top-22 isolate z-30">
        <div class="container mx-auto flex items-center gap-8">
            @foreach ($categories as $category)
                <a href="?#{{ $category }}" class="text-gray-700 uppercase font-medium hover:text-sky-500">
                    {{ $category }}
                </a>
            @endforeach
        </div>
    </nav>


    <div class="container mx-auto my-16">
        <div>
            @foreach ($offers as $title => $offerList)
                <div class="my-16">
                    <h1 class="text-2xl font-medium mb-6">{{ $title }}</h1>
                    <div id="{{ $title }}" class="grid grid-cols-3 gap-4">
                        @foreach ($offerList as $offer)
                        <x-offer :offer="$offer" />
                        @endforeach
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</x-layouts.app>
