@extends('_layouts.main')

@section('body')
    <section class="px-4 lg:px-8 xl:px-4 py-16 md:py-24 mt-4 md:mt-12">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center text-gray-700 mt-32">
                <h1 class="text-6xl font-light leading-none mb-2">404</h1>

                <h2 class="text-3xl">Page not found.</h2>

                <hr class="block w-full max-w-sm mx-auto border my-8">

                <p class="text-xl">
                    Need to update this page? See the <a title="404 Page Documentation" href="https://jigsaw.tighten.co/docs/custom-404-page/">Jigsaw documentation</a>.
                </p>
            </div>
        </div>
    </section>
@endsection
