---
title: Blog
description: The list of blog posts for the site
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.main')

@section('body')
    <section class="px-4 lg:px-8 xl:px-4 py-16 md:py-24 mt-4 md:mt-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="font-poppins text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-7xl font-semibold tracking-tight text-balance text-gray-900">Blog</h1>

            <hr class="border-b my-6">
            <div class="lg:grid lg:grid-cols-3 lg:space-x-6 xl:space-x-12 items-start ">
                <div class="col-span-2">
                    @foreach ($pagination->items as $post)
                        @include('_components.post-preview-inline')

                        @if ($post != $pagination->items->last())
                            <hr class="border-b my-6">
                        @endif
                    @endforeach

                    @if ($pagination->pages->count() > 1)
                        <nav class="flex gap-3 text-base my-8">
                            @if ($previous = $pagination->previous)
                                <a href="{{ $previous }}"
                                   title="Previous Page"
                                   class="text-lg border border-black hover:bg-sky-500 hover:text-white hover:border-sky-500 group rounded-lg inline-flex items-center justify-center w-12 h-12"
                                >
                                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" class="group-hover:text-white" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 7L10 12L15 17" class="stroke-black group-hover:stroke-white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </a>
                            @endif

                            @foreach ($pagination->pages as $pageNumber => $path)
                                <a href="{{ $path }}"
                                   title="Go to Page {{ $pageNumber }}"
                                   class="text-lg border border-black hover:bg-sky-500  hover:text-white hover:border-sky-500 rounded-lg inline-flex items-center justify-center w-12 h-12  {{ $pagination->currentPage == $pageNumber ? 'bg-sky-500 text-white border-sky-500' : 'text-blue-600' }}"
                                >{{ $pageNumber }}</a>
                            @endforeach

                            @if ($next = $pagination->next)
                                <a href="{{ $next }}"
                                   title="Next Page"
                                   class="text-lg border border-black hover:bg-sky-500 hover:text-white hover:border-sky-500 group rounded-lg inline-flex items-center justify-center w-12 h-12 "
                                ><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" class="group-hover:text-white" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 7L15 12L10 17"  class="stroke-black group-hover:stroke-white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
                            @endif
                        </nav>
                    @endif
                </div>
                <div class="rounded-lg bg-white/30 border border-zinc-200 p-4 xl:p-6">
                    <h3 class="font-poppins font-medium text-lg md:text-xl  xl:text-2xl mb-3 xl:mb-7">Recent blogs</h3>
                    <div class=" space-y-6">
                        <a  href="{{ $post->getUrl() }}" class="flex gap-4 items-start xl:space-x-2 group">
                            <div class="overflow-hidden rounded-lg w-24 h-24">
                                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover " />
                            </div>
                            <div class="col-span-2">
                                <span class="block text-neutral-600 text-md md:text-base font-medium my-2">
                                    {{ $post->getDate()->format('F j, Y') }}
                                </span>
                                <h2 class="font-poppins text-base md:text-lg mt-0 group-hover:underline">{{ $post->title }}</h2>
                            </div>
                        </a>
                        <a  href="{{ $post->getUrl() }}" class="flex gap-4 items-start xl:space-x-2 group">
                            <div class="overflow-hidden rounded-lg w-24 h-24">
                                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover " />
                            </div>
                            <div class="col-span-2">
                                <span class="block text-neutral-600 text-md md:text-base font-medium my-2">
                                    {{ $post->getDate()->format('F j, Y') }}
                                </span>
                                <h2 class="font-poppins text-base md:text-lg mt-0 group-hover:underline">{{ $post->title }}</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
