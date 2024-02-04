@php
    $portfolio = [
        [
            'image' => 'https://i.pinimg.com/564x/36/18/c5/3618c544af9803004da77bf7847ce217.jpg',
            'smalltext' => 'small text',
            'body' => 'large text',
        ],
        [
            'image' => 'https://i.pinimg.com/564x/e0/92/5d/e0925da1afd456cedb302f6cc156e5a6.jpg',
            'smalltext' => 'small text',
            'body' => 'large text',
        ],
        [
            'image' => 'https://i.pinimg.com/564x/8a/e9/58/8ae958e53e539e4608f2fb1f00441e9f.jpg',
            'smalltext' => 'small text',
            'body' => 'large text',
        ],
        [
            'image' => 'https://i.pinimg.com/564x/0a/8e/49/0a8e494b87b822c06fe849a34210f42d.jpg',
            'smalltext' => 'small text',
            'body' => 'large text',
        ],
        [
            'image' => 'https://i.pinimg.com/564x/28/bc/c3/28bcc3118a6b69f7646eeed9c5f769ea.jpg',
            'smalltext' => 'small text',
            'body' => 'large text',
        ],
        [
            'image' => 'https://i.pinimg.com/564x/e6/c5/99/e6c5993ff80188a92a5ddc896cc3af01.jpg',
            'smalltext' => 'small text',
            'body' => 'large text',
        ],
    ];
@endphp
@extends('layouts.app')
@section('content')
    <div class="grid gap-8 p-20 rounded-3xl bg-white my-14">
        <div class="flex items-center gap-8">
            <div class="text-4xl font-bold">Portfolio</div>
            <div class="gradient-line"></div>
        </div>
        <div class="flex gap-8" style="justify-content: flex-end">
            <a href="" class="text-lg hover:text-red-500">All</a>
            <a href="" class="text-lg hover:text-red-500">Mockup</a>
            <a href="" class="text-lg hover:text-red-500">Graphic Design</a>
            <a href="" class="text-lg hover:text-red-500">Logo</a>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-8 ">
            @each('components.work-card', $portfolio, 'portfolio', 'components.empty')
        </div>
        <div>@include('layouts/footer')</div>
    </div>
@endsection
