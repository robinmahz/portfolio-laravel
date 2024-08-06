@php
    $array = [
        [
            'icon' => 'fa-house',
            'text' => 'Home',
            'active' => Route::currentRouteName() == 'home',
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

    <a href='/' class='hover:no-underline'>
        <div class="capitalize text-4xl font-extrabold hover:text-transparent bg-gradient-to-r from-orange-300 to-pink-600 bg-clip-text text-transparent">
            robin
        </div>
    </a>

    <!-- Navigation Section -->
    <div class="space-x-4">
        <ul class="flex gap-4 scale-0 lg:scale-100 flex-wrap">
            @each('components.header-icon', $array, 'array', 'components.nothing')
        </ul>
    </div>
</div>
