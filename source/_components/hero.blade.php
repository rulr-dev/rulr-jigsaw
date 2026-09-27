@props(['title', 'description', 'action_label', 'action_url', 'bg_color' => 'none', 'action_color' => 'bg-sky-500 hover:bg-sky-800'])

<div class="relative isolate px-2 md:px-6 pt-14 lg:px-8 {{ $bg_color }}">
    <div class="mx-auto max-w-7xl py-12 md:py-32">
        <div class="text-center px-2">
            <h1 class="font-poppins text-xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-7xl font-semibold tracking-tight text-balance text-gray-900">{{ $title }}</h1>
            <p class="mt-6 md:my-16 text-sm sm:text-lg md:px-12 max-w-3xl mx-auto font-medium text-pretty text-gray-500 px-1">
                {!! $description !!}
            </p>
            <div class="mt-8 flex items-center justify-center gap-x-6">
                <a href="{{ $action_url }}" target="_blank" class="rounded-2xl {{ $action_color }} px-8 md:px-12 py-6 md:py-8 text-xl font-semibold text-white shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                    {{ $action_label }}
                </a>
            </div>
        </div>
    </div>
</div>
