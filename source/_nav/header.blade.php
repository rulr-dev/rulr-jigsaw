<header class="absolute inset-x-0 top-0 z-50 max-w-7xl mx-auto" x-data="{ open: false }">
    <nav class="flex space-x-4 lg:space-x-20 items-center justify-between p-4 lg:px-8" aria-label="Global">
        <div class="">
            <a href="#" class="px-1.5 text-3xl font-bold relative">
                <span class="sr-only">Rulr</span>
                rulr
                <span class="absolute w-2 h-2 bg-sky-500 bottom-1.5 rounded-full"></span>
            </a>
        </div>

        <div class="flex gap-8">

        <div class="hidden lg:flex justify-around grow lg:gap-x-12">
            <a
                    href="/"
                    class="relative text-lg font-semibold text-gray-900 py-2 before:absolute before:top-0 before:left-0 before:w-full before:h-0.5 before:bg-gray-300 after:absolute after:top-0 after:left-0 after:w-0 after:h-0.5 after:bg-gray-700 after:transition-all after:duration-300 hover:after:w-full min-w-24"
            >
                Home
            </a>
            <a
                    href="/blog"
                    class="relative text-lg font-semibold text-gray-900 py-2 before:absolute before:top-0 before:left-0 before:w-full before:h-0.5 before:bg-gray-300 after:absolute after:top-0 after:left-0 after:w-0 after:h-0.5 after:bg-gray-700 after:transition-all after:duration-300 hover:after:w-full min-w-24"
            >
                Blog
            </a>
            <a
                    href="https://github.com/rulr-dev"
                    target="_blank"
                    class="relative text-lg font-semibold text-gray-900 py-2 before:absolute before:top-0 before:left-0 before:w-full before:h-0.5 before:bg-gray-300 after:absolute after:top-0 after:left-0 after:w-0 after:h-0.5 after:bg-gray-700 after:transition-all after:duration-300 hover:after:w-full min-w-24 flex gap-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
            </a>
        </div>
        <div class="flex justify-end">
            <button type="button" class="text-sm font-semibold text-gray-900" @click="open = true">
                <img src="https://feux-html.netlify.app/assets/imgs/icon/icon-4.webp" />
            </button>
        </div>

        </div>
    </nav>

    <div x-show="open" x-cloak class="fixed inset-0 z-40 bg-black bg-opacity-50 backdrop-blur-lg transition-opacity" @click="open = false"></div>

    <div x-show="open" x-transition class="fixed top-0 right-0 w-full sm:max-w-lg h-full bg-white shadow-lg transform transition-transform duration-300 ease-in-out z-50" :class="open ? 'translate-x-0' : 'translate-x-full'" @click.stop>
        <div class="flex items-center justify-between p-2 md:p-5">
            <a href="#" class="px-1.5 text-3xl font-bold relative">
                rulr
                <span class="absolute w-2 h-2 bg-sky-500 bottom-1.5 rounded-full"></span>
            </a>
            <button type="button" class="-m-2.5 p-2.5 text-gray-700" @click="open = false">
                <span class="sr-only">Close menu</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="sm:mt-1 pt-1 md:pt-3 px-3 md:px-5 space-y-2 border-t-4 md:border-t-8 border-sky-500">
            <div class="flex justify-between sm:flex-col lg:hidden items-center sm:items-end flex-wrap gap-4 py-4">
                <a href="#" class="block text-lg font-semibold text-gray-900 hover:underline rounded">Home</a>
                <a href="#" class="block text-lg font-semibold text-gray-900 hover:underline rounded">Pages</a>
                <a href="#" class="block text-lg font-semibold text-gray-900 hover:underline rounded">Portfolio</a>
                <a href="#" class="block text-lg font-semibold text-gray-900 hover:underline rounded">Contact Us</a>
            </div>
        </div>
        <div class="border-t md:mt-4 py-2 px-3 md:px-5 md:p-5">
            <form class="space-y-1 lg:space-y-3" @click.stop>
                <div class="flex gap-2 md:gap-4">
                    <div class="relative w-full mb-1 sm:mb-0">
                        <label class="text-base font-medium block mb-1 text-zinc-950" for="name">Name</label>
                        <div class="relative w-full">
                            <input placeholder="Your Name" name="name" id="name" class="border border-gray-200 focus:ring-0 focus:border-gray-200 px-4 w-full h-10 rounded py-2 ps-4 text-zinc-950" value="" />
                            <div>
                                <span class="text-sm text-red-500">Error message</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-full">
                        <label class="text-base font-medium block mb-1 text-zinc-950" for="email">Email</label>
                        <div class="relative w-full">
                            <input type="email" placeholder="Type Your email" name="email" id="email" class="border border-gray-200 focus:ring-0 focus:border-gray-200 px-4 w-full h-10 rounded py-2 ps-4 text-zinc-950" value="" />
                            <span class="text-sm text-red-500">Error message</span>
                        </div>
                    </div>
                </div>
                <div class="relative w-full">
                    <label class="text-base font-medium block mb-1 text-zinc-950" for="subject">Subject</label>
                    <div class="relative w-full">
                        <select id="subject" name="subject" class="block w-full bg-white rounded-md border-0 py-3 pl-3 pr-10 text-zinc-950 ring-1 ring-inset ring-gray-200 focus:ring-1 focus:border-gray-200 sm:text-sm sm:leading-6">
                            <option>Project Submission</option>
                            <option>General Inquiry</option>
                            <option>Partnership</option>
                        </select>

                        <span class="text-sm text-red-500">Error message</span>

                        <div class="relative w-full mt-2 lg:mt-4">
                            <label class="text-base font-medium block mb-1 text-zinc-950" for="price">Budget</label>
                            <select id="budget" name="budget" class="block w-full bg-white rounded-md border-0 py-3 pl-3 pr-10 text-zinc-950 ring-1 ring-inset ring-gray-200 focus:ring-1 focus:border-gray-200 sm:text-sm sm:leading-6">
                                <option>up to $5.000</option>
                                <option>$5.000 - $50.000</option>
                                <option>$50.000 and above</option>
                            </select>

                            <span class="text-sm text-red-500">Error message</span>
                        </div>

                        <textarea placeholder="Your message" rows="4" name="body" class="mt-4 resize-none border border-gray-200 focus:ring-0 focus:border-gray-200 px-4 w-full rounded py-2 ps-4 text-zinc-950"></textarea>

                        <span class="text-sm text-red-500">Error message</span>
                    </div>
                </div>
                <button
                        type="submit"
                        class="rounded-md px-10 py-2.5 text-base font-semibold text-white shadow-sm bg-sky-500 hover:bg-sky-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-800 duration-100"
                >
                    Send
                </button>
            </form>
        </div>
    </div>
</header>