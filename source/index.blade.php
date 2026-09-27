@extends('_layouts.main')

@section('body')

    @include('_components.hero', [
        'title' => 'Streamline your development process and concentrate on the business side',
        'description' => 'Save time and reduce costs with our expert development solutions. We simplify your processes so you can focus on your business while we handle the technical details.',
        'action_label' => 'Book a free consultation',
        'action_url' => 'https://meet.brevo.com/rulr-dev/intro',
    ])

    @include('_components.about-rulr')

    @include('_components.work-process', [
        'sub_heading' => '(Discover Work Process)',
        'heading' => 'How we work',
        'items' => [
            [
                'title' => 'Discovery & Strategy',
                'description' => 'Elevate your brand’s presence with tailored solutions that resonate with your brand.',
            ],
            [
                'title' => 'Design & Development',
                'description' => 'Once we have a strategy, our creative and tech teams brainstorm innovative concepts.',
            ],
            [
                'title' => 'Launch & Monitoring',
                'description' => 'We track results, gather data, and provide insights to optimize and refine the project continually.',
            ],
        ],
        'show_numbers' => true,
    ])

    @include('_components.blog-latest')

@stop
