<section class="bg-white px-4 md:px-8 xl:px-0 py-8 md:py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-2">
        <strong class="text-black block text-sm lg:text-lg">( Our Insights )</strong>
        <h2 class="font-poppins text-xl md:text-2xl lg:text-3xl font-bold md:mt-2">Blog</h2>
        <hr class="border-gray-300 my-4" />

        <div class="space-y-6">
            @foreach ($posts->where('featured', false)->take(6) as $post)
            <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}" class="group flex items-center gap-4 md:gap-8 lg:gap-12 border-b pb-6">
                <span class="hidden md:block shrink-0 w-40 lg:w-44 text-gray-400 text-sm lg:text-lg">{{ $post->getDate()->format('F j, Y') }}</span>

                <div class="shrink-0 w-28 sm:w-40 lg:w-56 aspect-[16/9] overflow-hidden rounded-md bg-gray-100">
                    @if ($post->cover_image)
                        <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover object-left transition-transform duration-500 ease-in-out group-hover:scale-105" />
                    @endif
                </div>

                <div class="min-w-0">
                    <span class="block md:hidden text-gray-400 text-sm mb-1">{{ $post->getDate()->format('F j, Y') }}</span>
                    <p class="font-semibold text-gray-900 text-lg md:text-xl lg:text-2xl group-hover:underline underline-offset-4 decoration-2">{{ $post->title }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
