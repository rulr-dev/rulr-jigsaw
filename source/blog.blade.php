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
        <div class="max-w-5xl mx-auto">
            <h1 class="font-poppins text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-7xl font-semibold tracking-tight text-balance text-gray-900">Blog</h1>

            <hr class="border-b my-6">

            <div class="lg:space-y-6 xl:space-y-12">
                    @foreach ($pagination->items as $post)
                        @include('_components.post-preview-inline')
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
        </div>
    </section>
@stop
