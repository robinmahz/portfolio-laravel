@php
    $education = [
        [
            'color' => 'EDF4F8',
            'date' => '2022-2026',
            'title' => 'Bachelor Of Engeineering In IT,',
            'small' => 'Cosmos College',
        ],
        [
            'color' => 'FEF2F4',
            'date' => '2020-2022',
            'title' => 'Higher Secondary Education',
            'small' => 'BlueBird College',
        ],
        [
            'color' => 'EDF4F8',
            'date' => '2020',
            'title' => 'Secondary Education',
            'small' => 'Indreni Sec. School',
        ],
    ];
    $experience = [
        [
            'color' => 'EDF4F8',
            'date' => '2022-2026',
            'title' => 'ICT Club Coordinator',
            'small' => 'Cosmos College',
        ],
        [
            'color' => 'FEF2F4',
            'date' => '2024',
            'title' => 'Laravel backend developer',
            'small' => 'App Technologies',
        ],
        [
            'color' => 'EDF4F8',
            'date' => '',
            'title' => '',
            'small' => '',
        ],
    ];
    $award = [
        [
            'color' => 'EDF4F8',
            'date' => '',
            'title' => '',
            'small' => '',
        ],
        [
            'color' => 'FEF2F4',
            'date' => '',
            'title' => '',
            'small' => '',
        ],
        [
            'color' => 'EDF4F8',
            'date' => '',
            'title' => '',
            'small' => '',
        ],
    ];
@endphp
@extends('layouts.app')
@section('content')
    <div class="grid gap-14 pr-20 pl-20 pt-16 pb-8 bg-white rounded-3xl my-14">
        <div class="flex items-center gap-8">
            <div class="text-4xl font-bold">Resume</div>
            <div class="gradient-line"></div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="grid gap-4">
                <div class="flex gap-4">
                    <div class="flex align-middle text-[#fa5252]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <div class="text-2xl font-semibold ">Education</div>
                </div>
                <div class="grid gap-4">
                    @each('components.resume-card', $education, 'card', 'view.empty')
                </div>
            </div>
            <div class="grid gap-4">
                <div class="flex gap-4">
                    <div class="flex align-middle text-[#fa5252]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <div class="text-2xl font-semibold ">Experience</div>
                </div>
                @each('components.resume-card', $experience, 'card', 'view.empty')
            </div>
            <div class="grid gap-4">
                <div class="flex gap-4">
                    <div class="flex align-middle text-[#fa5252]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                        </svg>
                    </div>
                    <div class="text-2xl font-semibold ">Award</div>
                </div>
                @each('components.resume-card', $award, 'card', 'view.empty')
            </div>
        </div>
        <div class="bg-[#F8FBFB] grid grid-cols-2 px-8 py-14 rounded-xl">
            <div class="grid gap-6">
                <div class="text-2xl font-semibold ">Working Skills</div>
                <div class="grid gap-4 pr-8">
                    <div class="grid gap-4">
                        <label class="flex justify-between ">
                            <div>Web Development</div>
                            <div>85%</div>
                        </label>
                        <div class="rounded-2xl overflow-hidden h-1.5 flex ">
                            <div class="w-[85%] rounded-xl bg-[#FF6562]"></div>
                            <div class="w-[15%] bg-[#EDF3F3]"></div>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <label class="flex justify-between ">
                            <div>Mobile App</div>
                            <div>55%</div>
                        </label>
                        <div class="rounded-2xl overflow-hidden h-1.5 flex ">
                            <div class="w-[55%] rounded-xl bg-[#9272D4]"></div>
                            <div class="w-[45%] bg-[#EDF3F3]"></div>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <label class="flex justify-between ">
                            <div>Api Development</div>
                            <div>65%</div>
                        </label>
                        <div class="rounded-2xl overflow-hidden h-1.5 flex ">
                            <div class="w-[65%] rounded-xl bg-[#5084D4]"></div>
                            <div class="w-[35%] bg-[#EDF3F3]"></div>
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <label class="flex justify-between ">
                            <div>Photoshop</div>
                            <div>70%</div>
                        </label>
                        <div class="rounded-2xl overflow-hidden h-1.5 flex ">
                            <div class="w-[70%] rounded-xl bg-[#CA57F0]"></div>
                            <div class="w-[30%] bg-[#EDF3F3]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="text-2xl font-semibold  mb-6">Knowledge</div>
                <div class="flex flex-wrap gap-4">
                    <div class="resume-knowledge">Digital Design</div>
                    <div class="resume-knowledge">Marketing</div>
                    <div class="resume-knowledge">Communication</div>
                    <div class="resume-knowledge">Social Media</div>
                    <div class="resume-knowledge">Time Management</div>
                    <div class="resume-knowledge">Flexible</div>
                    <div class="resume-knowledge">Laravel</div>
                    <div class="resume-knowledge">Tailwind</div>
                    <div class="resume-knowledge">Html</div>
                    <div class="resume-knowledge">Css</div>
                    <div class="resume-knowledge">API</div>
                </div>
            </div>
        </div>
        <div>
            @include('layouts/footer')
        </div>
    </div>
@endsection
