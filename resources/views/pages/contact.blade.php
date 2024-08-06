@php
    $contact = [
        [
            'icon' => 'fa-phone-volume',
            'color' => 'FEF2F4',
            'title' => 'Phone:',
            'content' => '+977 9861974229',
        ],
        [
            'icon' => 'fa-envelope',
            'color' => 'EDF4F8',
            'title' => 'Email:',
            'content' => 'Robinmaharjan25@gmail.com',
        ],
        [
            'icon' => 'fa-location-dot',
            'color' => 'FEF2F4',
            'title' => 'Address:',
            'content' => 'Thecho, Lalitpur, Nepal',
        ],
    ];
    $form = [
        [
            'title' => 'Name',
        ],
        [
            'title' => 'Email',
        ],
        [
            'title' => 'Message',
        ],
    ];
@endphp
@extends('layouts/app')
@section('content')
    <div class="grid gap-14 pr-20 pl-20 py-16 bg-white rounded-3xl my-14">
        <div class="flex items-center gap-8">
            <div class="text-4xl font-bold">Contact</div>
            <div class="gradient-line"></div>
        </div>
        <div class="flex gap-8">
            <div class="grid gap-4">
                @each('components.contact-details', $contact, 'contact', 'components.contact-details')

            </div>
            <div class="p-8 bg-[#F8FBFB] w-full rounded-xl">
                <div class="grid py-8 gap-8">
                    <div class="grid gap-4">
                        <div class="text-2xl">I'm Always Open To Discussing Products</div>
                        <div class="text-2xl font-bold">Design Work Or Partnership</div>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        @each('components.contact-form', $form, 'form', 'view.empty')
                        <div x-data="{ open: false }" class="mt-4">
                            <!-- Trigger Button -->
                            <button @click="open = true"
                                class=" border-2 border-grey px-8 py-2 rounded-xl font-bold hover:bg-gradient-to-r from-orange-300 to-pink-500 hover:text-white duration-300 hover:border-white">Submit</button>
                            <x-FormModel />
                        </div>

                    </form>
                </div>
            </div>
        </div>
        @include('layouts/footer')
    </div>
@endsection
