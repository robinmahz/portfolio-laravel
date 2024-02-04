@extends('layouts/app')
@section('content')
    <div class="grid gap-14 pr-20 pl-20 py-16 bg-white rounded-3xl my-14">
        <div class="flex items-center gap-8">
            <div class="text-4xl font-bold">Blog</div>
            <div class="gradient-line"></div>
        </div>
        <div class="grid grid-cols-3 mb-8 gap-4 ">
            <div class="bg-[#FEF2F4] rounded-2xl py-4 px-8">
                <div class="w-40">
                    <img src="{{ asset('images/robin_logo2.png') }}" alt="">
                </div>
                <div class="font-light">Lorem ipsum dolor sit.</div>
                <div class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="bg-[#FEF2F4] rounded-2xl py-4 px-8">
                <div class="w-40">
                    <img src="{{ asset('images/robin_logo2.png') }}" alt="">
                </div>
                <div class="font-light">Lorem ipsum dolor sit.</div>
                <div class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="bg-[#FEF2F4] rounded-2xl py-4 px-8">
                <div class="w-40">
                    <img src="{{ asset('images/robin_logo2.png') }}" alt="">
                </div>
                <div class="font-light">Lorem ipsum dolor sit.</div>
                <div class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="bg-[#FEF2F4] rounded-2xl py-4 px-8">
                <div class="w-40">
                    <img src="{{ asset('images/robin_logo2.png') }}" alt="">
                </div>
                <div class="font-light">Lorem ipsum dolor sit.</div>
                <div class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="bg-[#FEF2F4] rounded-2xl py-4 px-8">
                <div class="w-40">
                    <img src="{{ asset('images/robin_logo2.png') }}" alt="">
                </div>
                <div class="font-light">Lorem ipsum dolor sit.</div>
                <div class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="bg-[#FEF2F4] rounded-2xl py-4 px-8">
                <div class="w-40">
                    <img src="{{ asset('images/robin_logo2.png') }}" alt="">
                </div>
                <div class="font-light">Lorem ipsum dolor sit.</div>
                <div class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
        </div>
        <div class="">
            @include('layouts/footer')
        </div>
    </div>
@endsection
