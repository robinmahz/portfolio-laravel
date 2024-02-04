@php
    $array = [
        [
            'icon' => 'fa-house',
            'text' => 'Home',
            'active' => 0,
            'route' => '',
        ],
        [
            'icon' => 'fa-address-card',
            'text' => 'About',
            'active' => Route::currentRouteName() == 'about',
            'route' => 'about',
        ],
        [
            'icon' => 'fa-file',
            'text' => 'Resume',
            'active' => Route::currentRouteName() == 'resume',
            'route' => 'resume',
        ],
        [
            'icon' => 'fa-briefcase',
            'text' => 'Works',
            'active' => Route::currentRouteName() == 'works',
            'route' => 'works',
        ],
        [
            'icon' => 'fa-newspaper',
            'text' => 'Blogs',
            'active' => Route::currentRouteName() == 'blogs',
            'route' => 'blogs',
        ],
        [
            'icon' => 'fa-address-book',
            'text' => 'Contact',
            'active' => Route::currentRouteName() == 'contact',
            'route' => 'contact',
        ],
    ];
@endphp
<div class="flex justify-between items-center p-4 mt-6">
    <!-- Logo Section -->
    <div class="">
        <div class="w-32 h-16 overflow-cover">
            <a href="/">
                <img src="{{ asset('images/robin_logo2.png') }}" alt="logo">
            </a>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="space-x-4">
        <ul class="flex gap-4 scale-0 lg:scale-100 flex-wrap">
            @each('components.header-icon', $array, 'array', 'components.nothing')
        </ul>
    </div>
</div>
