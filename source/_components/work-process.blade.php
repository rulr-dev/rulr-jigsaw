@props(['sub_heading', 'heading', 'description' => null, 'items' => [], 'bg_color' => 'bg-secondary', 'show_numbers' => false])

<section class="{{ $bg_color }} px-4 xl:px-0 py-8 md:py-12 lg:py-24">
    <div class="max-w-6xl xl:max-w-7xl mx-auto px-2 lg:px-8 xl:px-2">
        <!-- Work Process Section -->
        <div class="">
            <strong class="text-black block text-sm lg:text-lg">{{ $sub_heading }}</strong>
            <h2 class="font-poppins text-xl md:text-2xl lg:text-3xl font-bold md:mt-2">{{ $heading }}</h2>
            <div>{{ $description }}</div>

            <div class="grid md:grid-cols-3 gap-4 lg:gap-6 mt-8">
                @foreach($items as $key => $item)
                <div class="flex flex-col bg-white/70 hover:bg-white transition ease-in-out duration-300 border border-zinc-200 hover:border-sky-500 p-4 lg:p-6 rounded-lg text-left">
                    <h3 class="font-poppins text-lg lg:text-xl font-bold">{{ data_get($item, 'title') }}</h3>
                    <p class="text-gray-500 mt-2 mb-4 md:mb-12">{{ data_get($item, 'description') }}</p>
                    @if($show_numbers)
                    <span class="block text-4xl md:text-6xl lg:text-8xl font-bold text-gray-300  mt-auto">0{{ $key + 1 }}</span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
