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
            'body' => 'I specialize in creating dynamic and responsive websites. My focus is on crafting intuitive user interfaces and efficient backend systems to deliver seamless web experiences.',
            'color' => 'fff4f4',
        ],
        [
            'icon' => 'fa-grip text-[#ff6080] ',
            'title' => 'App Development',
            'body' => "Innovative and user-friendly mobile app development is my expertise, crafting seamless user experiences. I'm dedicated to staying current with the latest technologies in the field.",
            'color' => 'EDF4F8',
        ],
        [
            'icon' => 'fa-camera text-[#8774ff] ',
            'title' => 'Photography',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FCF5FE',
        ],
        [
            'icon' => 'fa-list-check text-[#ff75d8] ',
            'title' => 'Management',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FCFBF0',
        ],
        [
            'icon' => 'fa-swatchbook text-[#d566ff] ',
            'title' => 'UI/UX Design',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
            'color' => 'FEF1F9',
        ],
        [
            'icon' => 'fa-pen-to-square text-[#dda10c] ',
            'title' => 'Graphics Design',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio non neque molestias eveniet, cum dolore ea veritatis quam sed pariatur! henpis eediop herz miz.',
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
                        <div class="text-3xl mb-6 font-semibold">Who Am I ?</div>
                        <div class="grid gap-4">
                            <div class="text-lg text-gray-500">
                                I'm Developer and Designer from Kathmandu, Nepal, working in web development. I
                                enjoy turning complex problems into simple, beautiful and intuitive designs.
                            </div>
                            <div class="text-lg text-gray-500">
                                My aim is to bring across your message and identity in the most creative way. I created web
                                design for many famous brand companies.
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="text-3xl mb-6 font-semibold">Personal Info</div>
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
                    {{-- <div class="zoom flex gap-6 card bg-[#fff4f4]">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9">
                                <path fill-rule="evenodd"
                                    d="M14.447 3.026a.75.75 0 0 1 .527.921l-4.5 16.5a.75.75 0 0 1-1.448-.394l4.5-16.5a.75.75 0 0 1 .921-.527ZM16.72 6.22a.75.75 0 0 1 1.06 0l5.25 5.25a.75.75 0 0 1 0 1.06l-5.25 5.25a.75.75 0 1 1-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 0 1 0-1.06Zm-9.44 0a.75.75 0 0 1 0 1.06L2.56 12l4.72 4.72a.75.75 0 0 1-1.06 1.06L.97 12.53a.75.75 0 0 1 0-1.06l5.25-5.25a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="">
                            <div class="text-2xl font-bold mb-4">
                                Web development
                            </div>
                            <div class="text-gray-500">I specialize in creating dynamic and responsive websites.
                                My focus is
                                on crafting intuitive user interfaces and efficient backend systems to deliver seamless web
                                experiences.</div>
                        </div>
                    </div>
                    <div class="zoom flex gap-6 card bg-[#EDF4F8]">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold mb-4">
                                App Development
                            </div>
                            <div class="text-gray-500">
                                Innovative and user-friendly mobile app development is my expertise, crafting seamless user
                                experiences. I'm dedicated to staying current with the latest technologies in the field.
                            </div>
                        </div>
                    </div>
                    <div class="zoom flex gap-6 card bg-[#FCF5FE]">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold mb-4">
                                Photography
                            </div>
                            <div class="text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Praesentium,
                                facere.
                                Exercitationem aperiam?</div>
                        </div>
                    </div>
                    <div class="zoom flex gap-6 card bg-[#FCFBF0]">
                        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold mb-4">
                                Management
                            </div>
                            <div class="text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Praesentium,
                                facere.
                                Exercitationem aperiam?</div>
                        </div>
                    </div>
                    <div class="zoom flex gap-6 card bg-[#FEF1F9]">
                        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold mb-4">
                                UI/UX Design
                            </div>
                            <div class="text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Praesentium,
                                facere.
                                Exercitationem aperiam?</div>
                        </div>
                    </div>
                    <div class="zoom flex gap-6 card bg-[#FEF2F4]">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold mb-4">
                                Graphics Design
                            </div>
                            <div class="text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Praesentium,
                                facere.
                                Exercitationem aperiam?</div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="p-8 bg-[#F8FBFB] rounded-2xl mb-8">
                <div class="text-5xl font-semibold text-center mb-8">Clients</div>
                <div class="grid grid-cols-5">
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                    <div><img src="{{ asset('images/robin_logo2.png') }}" alt="logo"></div>
                </div>
            </div>
        </div>
        <div class="">
            @include('layouts.footer')
        </div>
    </div>
@endsection
