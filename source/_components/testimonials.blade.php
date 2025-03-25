<section class="px-4 md:px-8 xl:px-0 py-8 sm:py-16 md:py-24 bg-secondary">
    <div class="max-w-7xl mx-auto" x-data="testimonialSlider()">
        <strong class="text-black block text-sm lg:text-lg">( Our Testimonials )</strong>
        <h2 class="font-poppins text-xl md:text-2xl lg:text-3xl font-bold md:mt-2">Voices of Our Clients</h2>
        <hr class="border-gray-300 my-4" />

        <div class="relative md:flex items-end justify-between mt-8">
            <!-- Testimonial Content -->
            <div class="md:w-2/3 md:pr-16">
                <blockquote class="text-xl md:text-2xl lg:text-5xl font-semibold italic">
                    <span class="text-gray-400">“</span>
                    <span x-text="testimonials[currentIndex].quote"></span>
                    <span class="text-gray-400">”</span>
                </blockquote>
                <div class="mt-6">
                    <strong class="font-bold text-lg md:text-2xl">
                        <span x-text="testimonials[currentIndex].name"></span>
                    </strong>
                    <p class="text-gray-500 text-md lg:text-lg" x-text="testimonials[currentIndex].role"></p>
                </div>
            </div>

            <!-- Images & Arrows -->
            <div class="md:w-1/3 flex md:flex-col items-end space-x-4 space-y-4 relative">
                <!-- Navigation Arrows -->
                <div class="absolute -top-56 md:-top-24 right-0 flex space-x-2">
                    <button @click="prev" class="p-2 bg-black text-white rounded-full hover:bg-gray-800 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button @click="next" class="p-2 border-2 border-black text-black rounded-full hover:bg-black hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- Testimonial Images -->
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <img
                            :src="testimonial.image"
                            @click="currentIndex = index"
                            class="w-16 h-16 rounded-full object-cover border-2 cursor-pointer transition-all duration-300"
                            :class="currentIndex === index ? 'w-20 h-20 border-black' : 'border-gray-400 opacity-70'"
                    />
                </template>
            </div>
        </div>
    </div>

    <script>
      function testimonialSlider() {
        return {
          currentIndex: 0,
          testimonials: [
            {
              quote: "Outstanding designs that perfectly capture our brand!",
              name: "Emily Jack H.",
              role: "UI/UX Designer, Luxeco",
              image: "https://randomuser.me/api/portraits/women/10.jpg",
            },
            {
              quote: "An incredible team that turned our ideas into reality.",
              name: "Michael T.",
              role: "Product Manager, SoftLabs",
              image: "https://randomuser.me/api/portraits/men/11.jpg",
            },
            {
              quote: "Their attention to detail is unmatched. We love the results!",
              name: "Sophia L.",
              role: "Marketing Director, Creativa",
              image: "https://randomuser.me/api/portraits/women/12.jpg",
            },
          ],
          next() {
            this.currentIndex = (this.currentIndex + 1) % this.testimonials.length;
          },
          prev() {
            this.currentIndex = (this.currentIndex - 1 + this.testimonials.length) % this.testimonials.length;
          },
        };
      }
    </script>
</section>
