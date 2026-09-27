@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    <section class="px-4 lg:px-8 xl:px-4 py-16 md:py-24 mt-4 md:mt-12">
        <div class="blog-article max-w-4xl mx-auto">
            <h1 class="font-poppins text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-7xl font-semibold tracking-tight text-gray-900">
                {{ $page->article_title }}
            </h1>

            <hr class="border-b my-6">
{{--            <div class="lg:grid lg:grid-cols-3 lg:space-x-6 xl:space-x-12 items-start ">--}}
{{--                <div class="col-span-2">--}}
                    @if ($page->cover_image)
                        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="w-full object-cover max-h-96 rounded-lg">
                    @endif

                    <span class="block text-neutral-600 text-base md:text-lg font-medium mt-6 mb-2">
                        {{ $page->author }}  •  {{ date('F j, Y', $page->date) }}
                    </span>

                    @if ($page->categories)
                        @foreach ($page->categories as $i => $category)
                            <a
                                href="{{ '/blog/categories/' . $category }}"
                                title="View posts in {{ $category }}"
                                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                            >{{ $category }}</a>
                        @endforeach
                    @endif

                    <div class="border-b my-4 text-neutral-600 space-y-4 text-base md:text-lg border-blue-200 mb-10 pb-4" v-pre>
                        @yield('content')
                    </div>

                    <nav class="flex my-4 justify-between text-sm md:text-base">
                        <div>
                            @if ($next = $page->getNext())
                                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                                    &LeftArrow; {{ $next->title }}
                                </a>
                            @endif
                        </div>

                        <div>
                            @if ($previous = $page->getPrevious())
                                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                                    {{ $previous->title }} &RightArrow;
                                </a>
                            @endif
                        </div>
                    </nav>

{{--                </div>--}}
{{--                <div class="rounded-lg bg-white/30 border border-zinc-200 p-4 xl:p-6">--}}
{{--                    <h3 class="font-poppins font-medium text-lg md:text-xl  xl:text-2xl mb-3 xl:mb-7">Recent blogs</h3>--}}
{{--                    <div class=" space-y-6">--}}
{{--                        <a  href="{{ $page->getUrl() }}" class="flex gap-4 items-start xl:space-x-2 group">--}}
{{--                            <div class="overflow-hidden rounded-lg w-24 h-24">--}}
{{--                                <img src="{{ $page->cover_image }}" alt="{{ $page->title }}" class="w-full h-full object-cover " />--}}
{{--                            </div>--}}
{{--                            <div class="col-span-2">--}}
{{--                                <span class="block text-neutral-600 text-md md:text-base font-medium my-2">--}}
{{--                                    {{ $page->getDate()->format('F j, Y') }}--}}
{{--                                </span>--}}
{{--                                <h2 class="font-poppins text-base md:text-lg mt-0 group-hover:underline">{{ $page->title }}</h2>--}}
{{--                            </div>--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
