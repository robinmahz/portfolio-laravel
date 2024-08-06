@php
    $personalInfo = [
        [
            'icon' => 'fa-mobile',
            'title' => 'Phone',
            'info' => '+977 9861974229',
        ],
        [
            'icon' => 'fa-envelope-open-text',
            'title' => 'Email',
            'info' => 'Robinmaharjan25@gmail.com',
        ],
        [
            'icon' => 'fa-map-location-dot',
            'title' => 'Location',
            'info' => 'Thecho, Lalitpur, Nepal',
        ],
        [
            'icon' => 'fa-calendar-days',
            'title' => 'Birthday',
            'info' => 'September 28, 2004',
        ],
    ];
    $whatido = [
        [
            'icon' => 'fa-code text-[#269fff] ',
            'title' => 'Web development',
            'body' =>
                'I specialize in creating dynamic and responsive websites. My focus is on crafting intuitive user interfaces and efficient backend systems to deliver seamless web experiences.',
            'color' => 'fff4f4',
        ],
        [
            'icon' => 'fa-grip text-[#ff6080] ',
            'title' => 'App Development',
            'body' =>
                "Innovative and user-friendly mobile app development is my expertise, crafting seamless user experiences. I'm dedicated to staying current with the latest technologies in the field.",
            'color' => 'EDF4F8',
        ],
        [
            'icon' => 'fa-camera text-[#8774ff] ',
            'title' => 'Photography',
            'body' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FCF5FE',
        ],
        [
            'icon' => 'fa-list-check text-[#ff75d8] ',
            'title' => 'Management',
            'body' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FCFBF0',
        ],
        [
            'icon' => 'fa-swatchbook text-[#d566ff] ',
            'title' => 'UI/UX Design',
            'body' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FEF1F9',
        ],
        [
            'icon' => 'fa-pen-to-square text-[#dda10c] ',
            'title' => 'Graphics Design',
            'body' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FEF2F4',
        ],
    ];
@endphp
@extends('layouts/app')
@section('content')
    <div id="about" class="bg-white rounded-3xl my-14 grid gap-4 pb-7">
        <div class="grid gap-14 pr-20 pl-20 pt-16">
            <div class="flex items-center gap-8">
                <div class="text-4xl font-bold">About Me</div>
                <div class="gradient-line"></div>
            </div>
            <div class="flex justify-between">
                <div class="">
                    <img class="object-none object-top h-96 w-80 rounded-3xl zoom"
                        src="https://w0.peakpx.com/wallpaper/546/35/HD-wallpaper-keanu-reeves-john-wick-chapter-2-john-wick-chapter-2-2017-movies-movies-keanu-reeves.jpg"
                        alt="portrate">
                </div>
                <div class="w-8/12 ml-8">
                    <div>
                        <div class="text-3xl mb-4 font-semibold">Who Am I ?</div>
                        <div class="grid gap-4">
                            <div class="text-lg text-gray-500">
                                I'm Developer and Designer from Lalitpur, Nepal, working in web development. I
                                enjoy turning complex problems into simple, beautiful and intuitive designs.
                            </div>
                            <div class="text-lg text-gray-500">
                                My aim is to bring across your message and identity in the most creative way. I created web
                                design for many famous brand companies.
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="text-3xl mb-4 font-semibold">Personal Info</div>
                        <div class="grid grid-cols-2">
                            @each('components.about-personal-info', $personalInfo, 'info', 'components.empty')

                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="text-4xl font-bold mb-8">
                    What I Do!
                </div>
                <div class="grid grid-cols-3 gap-6">
                    @each('components.about-whatido', $whatido, 'what', 'components.empty')
                </div>
            </div>
            {{-- commented beause no clients to show --}}
            {{-- <div class="p-8 bg-[#F8FBFB] rounded-2xl">
                <div class="text-5xl font-semibold text-center mb-8">Clients</div>
                <div class="grid grid-cols-5">
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                </div>
            </div> --}}
        </div>
        <div class="mt-8">
            @include('layouts.footer')
        </div>
    </div>
@endsection
