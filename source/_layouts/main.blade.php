<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
                href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
                rel="stylesheet"
        />

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
       @include('_nav.header')

        <main role="main">
            @yield('body')
        </main>

       <footer class="bg-gradient-to-r from-slate-900 via-neutral-950 to-slate-900 rounded-t-3xl p-6 rounded-t-3xl -mt-8">
           <div class="mx-auto max-w-6xl px-4 py-6 md:py-12 text-center md:text-start">
               <strong class="block font-normal py-4 md:py-8 lg:pb-20 text-xl md:text-2xl lg:text-5xl xl:text-7xl text-white">
                   Sounds like a fit? <br />
                   Let’s connect!
               </strong>
               <a href="#" class="text-2xl md:text-4xl font-bold relative text-white inline-block mb-1 md:mb-4">
                   rulr
                   <span class="absolute w-1.5 h-1.5 md:w-2 md:h-2 bg-sky-500 bottom-1 rounded-full"></span>
               </a>
               <div class="md:flex md:items-center md:justify-between border-y border-white/10 py-6 md:py-12 mt-4 md:mt-12">
                   <div>
                       <a href="mailto:info@rulr.dev" class="text-center text-lg lg:text-4xl leading-5 text-white hover:underline">info@rulr.dev</a>
                   </div>
                   <div class="mt-2 md:mt-0 mb-8 md:mb-0 max-w-lg">
                       <p class="text-center text-sm leading-5 text-white/70">We place great emphasis on providing designers, artists, and brands with templates that elevates their visual communication.</p>
                   </div>
                   <div class="flex justify-center space-x-4 md:space-x-6 md:order-2">
                       <a class="h-8 w-8 inline-flex items-center justify-center transition-all duration-700 group" href="https://www.facebook.com/profile.php?id=61559932386928" target="_blank">
                           <svg class="fill-white w-5 group-hover:fill-sky-500" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                               <g id="SVGRepo_iconCarrier">
                                   <path
                                           d="M1168.737 487.897c44.672-41.401 113.824-36.889 118.9-36.663l289.354-.113 6.317-417.504L1539.65 22.9C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l62.045-451.233H1126.66v-69.152c0-54.937 14.214-96.112 42.078-122.058"
                                           fill-rule="evenodd"
                                   ></path>
                               </g>
                           </svg>
                           <!-- <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                             <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                           </svg> -->
                       </a>
                       <a class="h-8 w-8 inline-flex items-center justify-center transition-all duration-700 group" href="https://www.linkedin.com/feed/" target="_blank">
                           <svg class="fill-white w-5 group-hover:fill-sky-500" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                               <g id="SVGRepo_iconCarrier">
                                   <path
                                           d="M478.234 600.75V1920H.036V600.75h478.198Zm720.853-2.438v77.737c69.807-45.056 150.308-71.249 272.38-71.249 397.577 0 448.521 308.666 448.521 577.562v737.602h-480.6v-700.836c0-117.867-42.173-140.215-120.15-140.215-74.134 0-120.151 23.55-120.151 140.215v700.836h-480.6V598.312h480.6ZM239.099 0c131.925 0 239.099 107.294 239.099 239.099s-107.174 239.099-239.1 239.099C107.295 478.198 0 370.904 0 239.098 0 107.295 107.294 0 239.099 0Z"
                                           fill-rule="evenodd"
                                   ></path>
                               </g>
                           </svg>
                       </a>
                       <a class="h-8 w-8 inline-flex items-center justify-center transition-all duration-700 group" href="https://x.com/RulrDev" target="_blank">
                           <svg class="fill-white w-6 group-hover:fill-sky-500" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 33.88 33.88" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                               <g id="SVGRepo_iconCarrier">
                                   <g>
                                       <path
                                               d="M30.414,10.031c0.014,0.297,0.021,0.595,0.021,0.897c0,9.187-6.992,19.779-19.779,19.779c-3.928,0-7.58-1.149-10.657-3.123 c0.546,0.063,1.099,0.095,1.658,0.095c3.26,0,6.254-1.107,8.632-2.974c-3.039-0.058-5.607-2.065-6.491-4.828 c0.424,0.082,0.858,0.125,1.308,0.125c0.635,0,1.248-0.084,1.83-0.244c-3.177-0.639-5.576-3.448-5.576-6.815 c0-0.029,0-0.058,0-0.087c0.939,0.521,2.01,0.833,3.15,0.869C2.646,12.48,1.419,10.35,1.419,7.938c0-1.274,0.343-2.467,0.94-3.495 c3.427,4.206,8.552,6.973,14.327,7.263c-0.117-0.509-0.18-1.038-0.18-1.584c0-3.838,3.112-6.949,6.953-6.949 c1.998,0,3.805,0.844,5.07,2.192c1.582-0.311,3.072-0.89,4.416-1.686c-0.521,1.624-1.621,2.986-3.057,3.844 c1.406-0.166,2.746-0.54,3.991-1.092C32.949,7.826,31.771,9.05,30.414,10.031z"
                                       ></path>
                                   </g>
                               </g>
              </svg>
                       </a>
                   </div>
               </div>
               <div class="mt-4 md:mt-8">
                   <p class="text-sm leading-5 text-white/70">2024 &copy; Rulr. All rights reserved.</p>
               </div>
           </div>
       </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
