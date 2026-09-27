<article class="mb-4">
    <div class="overflow-hidden rounded-lg">
        <a href="{{ $post->getUrl() }}"
           title="Read more - {{ $post->title }}"
           class="block "
        >
            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full object-cover max-h-96 rounded-lg group-hover:scale-110 transition-all ease-in-out duration-500" />
        </a>
    </div>
    <span class="block text-neutral-600 text-base md:text-lg font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </span>

    <h2 class="font-poppins text-xl lg:text-2xl xl:text-4xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-900 font-medium"
        >{{ $post->title }}</a>
    </h2>

    <p class="my-4 text-neutral-600 text-base md:text-lg">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-medium tracking-wide mb-2 rounded-full inline-block  hover:bg-black hover:text-white transition ease-in-out duration-300 border border-black px-6 py-2.5"
    >Read More</a>
</article>
