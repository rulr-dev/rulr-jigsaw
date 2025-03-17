<section class="bg-white px-4 md:px-8 xl:px-0 py-16 md:py-24">
    <div class="max-w-7xl mx-auto">
        <strong class="text-black block text-sm lg:text-lg">( Our Insights )</strong>
        <h2 class="text-xl md:text-2xl lg:text-3xl font-bold md:mt-2">Blog</h2>
        <hr class="border-gray-300 my-4" />

        <div class="space-y-6">
            @foreach ($posts->where('featured', false)->take(6) as $post)
            <div class="border-b pb-4 group cursor-pointer">
                <div class="lg:flex gap-4 lg:gap-12 justify-between max-w-full">
                    <div class="flex-1 flex gap-4 lg:gap-12">
                        <span class="block text-gray-400 text-lg mt-1 mb-2 md:mb-0">{{ $post->getDate()->format('F j, Y') }}</span>

                        <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}" class="text-gray-900 font-extrabold">
                            <p class="font-semibold text-xl lg:text-2xl mt-1 lg:max-w-lg">{{ $post->title }}</p>
                        </a>
                    </div>
                    <div class="sm:w-48 md:h-0 overflow-hidden transition-all duration-500 ease-in-out md:group-hover:h-32 md:ml-4">
                        @if ($post->cover_image)
                            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover rounded-md" />
                        @endif
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>