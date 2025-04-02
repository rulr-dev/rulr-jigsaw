<header class="absolute inset-x-0 top-0 z-50 max-w-7xl mx-auto" x-data="{ open: false }">
    <nav class="flex space-x-4 lg:space-x-20 items-center justify-between p-4 xl:px-0" aria-label="Global">
        <div class="">
            <a href="#" class="px-1.5 text-3xl font-bold relative">
                <span class="sr-only">Rulr</span>
                rulr
                <span class="absolute w-2 h-2 bg-sky-500 bottom-1.5 rounded-full"></span>
            </a>
        </div>

        <div class="flex lg:gap-8">

        <div class="hidden lg:flex lg:items-center lg:justify-around grow lg:gap-x-10">
            <a href="/"
               class="inline-block text-lg font-instrument font-semibold text-gray-900 hover:text-sky-800 py-2 px-1"
            >
                Home
            </a>
            <a href="/blog"
               target="_blank"
               class="inline-block text-lg font-instrument font-semibold text-gray-900 hover:text-sky-800 py-2 px-1"
            >
                Blog
            </a>
            <a href="https://github.com/rulr-dev"
               target="_blank"
               class="inline-block text-lg font-instrument font-semibold text-gray-900 hover:text-sky-800 py-2 px-1 flex gap-2 "
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
            </a>
        </div>
        <div class="flex justify-end">
            <button type="button" class="text-sm font-semibold text-gray-900" onclick="document.getElementById('inquiry-form').click()">
                <img src="../assets/img/open-menu.webp" alt="Open menu"/>
            </button>
        </div>
            <div>
                <div class="hidden">
                    <button formsappId="67eba9e3beb4e40002daf38d" style="color: white;" id="inquiry-form"></button>
                </div>
                <script src="https://forms.app/static/embed.js" type="text/javascript" async defer onload="new formsapp('67eba9e3beb4e40002daf38d', 'slider', {'overlay':'rgba(45,45,45,0.5)','button':{'color':'#0EA5E9','text':'Inquire'},'width':'767px','height':'100vh','align':'right'}, 'https://mbdisgd0.forms.app');"></script>
            </div>

        </div>
    </nav>
</header>
