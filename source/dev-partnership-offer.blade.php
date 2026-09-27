@extends('_layouts.main', [
    'has_nav' => false,
])

@section('body')

    <!-- HERO -->

    @include('_components.hero', [
        'title' => 'Frustrated that your business isn’t scaling
                    even though you’re using great tech?',
        'description' => '
                    Or maybe you’re ready to build your next Laravel or Vue project, but not sure where to start.<br><br>
                    Get a <span class="font-semibold text-gray-900">$2,000-value, two-week trial (completely free)</span>
                    and see how we streamline your development process before you commit.',
        'action_label' => 'Start Your Free 2-Week Partnership',
        'action_url' => 'https://meet.brevo.com/rulr-dev/intro',
        'bg_color' => 'bg-green-50',
        'action_color' => 'bg-green-500 hover:bg-green-600',
    ])

    @include('_components.work-process', [
        'sub_heading' => '( Evaluate Your Stack )',
        'heading' => 'Measure & Improve Three Key Areas',
        'description' => 'Our short assessment helps you evaluate and enhance:',
        'items' => [
            [
                'title' => 'Technical Foundation',
                'description' => 'Is your app’s stack (Laravel / Inertia / Vue / Filament) configured for performance and scalability?',
            ],
            [
                'title' => 'Team & Workflow',
                'description' => 'Are you leveraging automation, testing, and deployment practices that reduce risk and speed delivery?',
            ],
            [
                'title' => 'Product Clarity',
                'description' => 'Do you have a clear feature roadmap aligned with your goals — whether you’re an agency or a solo founder?',
            ],
        ],
        'bg_color' => 'bg-white'
    ])

    @include('_components.about-rulr', [
        'bg_color' => 'bg-green-50',
    ])


    <!-- CTA -->
    <section id="assessment" class="bg-gradient-to-r from-sky-600 via-sky-700 to-sky-900 text-white py-20 px-6 text-center">
        <div class="max-w-5xl mx-auto">
            <strong class="text-white/90 block text-sm lg:text-lg">( Free Assessment )</strong>
            <h2 class="font-poppins text-2xl md:text-3xl lg:text-4xl font-bold mt-2">Start Your Free Tech Readiness Assessment</h2>
            <p class="text-base md:text-lg mt-4 mb-10 text-white/90">
                It takes 3 minutes | Completely Free | Instant Recommendations to Improve Your Stack
            </p>

            <form class="max-w-md mx-auto bg-white text-gray-900 rounded-2xl shadow-lg p-8">
                <label class="block mb-4 text-left">
                    <span class="text-sm font-medium text-gray-700">Name</span>
                    <input type="text" required class="mt-1 w-full border border-gray-200 focus:ring-sky-600 focus:border-sky-600 rounded-lg py-2 px-3" />
                </label>
                <label class="block mb-4 text-left">
                    <span class="text-sm font-medium text-gray-700">Email</span>
                    <input type="email" required class="mt-1 w-full border border-gray-200 focus:ring-sky-600 focus:border-sky-600 rounded-lg py-2 px-3" />
                </label>
                <label class="block mb-6 text-left">
                    <span class="text-sm font-medium text-gray-700">Phone (optional)</span>
                    <input type="tel" class="mt-1 w-full border border-gray-200 focus:ring-sky-600 focus:border-sky-600 rounded-lg py-2 px-3" />
                </label>
                <button type="submit" class="w-full rounded-xl bg-sky-600 hover:bg-sky-800 text-white font-semibold py-3 transition">
                    Begin Assessment
                </button>
            </form>
        </div>
    </section>
@stop
