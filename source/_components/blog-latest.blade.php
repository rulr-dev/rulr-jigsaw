<section class="bg-white px-4 md:px-8 xl:px-0 py-8 md:py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-2">
        <strong class="text-black block text-sm lg:text-lg">( Our Insights )</strong>
        <h2 class="font-poppins text-xl md:text-2xl lg:text-3xl font-bold md:mt-2">Blog</h2>
        <hr class="border-gray-300 my-4" />

        <div class="space-y-6">
            @foreach ($posts->where('featured', false)->take(6) as $post)
            <div class="border-b pb-4 group cursor-pointer">
                <div class="lg:flex ap-2 md:gap-4 lg:gap-12 justify-between max-w-full">
                    <div class="flex-1 flex flex-col md:flex-row  md:gap-4 lg:gap-8 xl:gap-12 ">
                        <span class="block text-gray-400 text-sm lg:text-lg md:mb-0 md:min-w-44">{{ $post->getDate()->format('F j, Y') }}</span>

                        <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}" class="inline-block  text-gray-900 font-extrabold">
                            <p class="font-semibold text-lg md:text-xl lg:text-2xl lg:max-w-lg">{{ $post->title }}</p>
                        </a>
                    </div>
                    <div class="mt-2 lg:mt-0 max-h-80 md:max-h-none sm:w-48 md:h-0 overflow-hidden transition-all duration-500 ease-in-out md:group-hover:h-32 md:ml-4">
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
