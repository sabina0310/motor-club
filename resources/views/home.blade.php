@extends('layouts.main-layout')

@section('content')
    <section class="w-full relative mt-24 ">
        <picture>
            <source media="(min-width: 768px)" srcset="{{ asset('assets/img/hero.jpg') }}">
            <img src="{{ asset('assets/img/hero.jpg') }}" alt="hero"
                class="w-full h-[350px] lg:h-[calc(100vh-170px)] object-cover object-top" title="hero">
        </picture>
        <div class="absolute inset-0 bg-black opacity-50 "></div>
        <div class="absolute justify-end items-end inset-0 flex  w-full h-full container">
            <div class=" pb-12 lg:pb-20 text-white w-[507px] relative z-10 ">
                <h2 class="text-16 lg:text-[32px] text-right font-bold">
                    Chrome and Camaraderie on Every Ride.
                </h2>
            </div>
        </div>
    </section>
    <section class="container mt-[50px] ">
        <div class="flex-none lg:flex gap-11 lg:mx-[50px]">
            <div class="flex-none aspect-w-16 aspect-h-9 h-full" data-aos="fade-right">
                <div class="overflow-hidden lg:h-[600px] lg:w-[800px] rounded-xl">
                    <iframe class="w-full h-full"
                        src="https://www.youtube.com/embed/iCPd7Pilwx0?si=0FHpuseA5r6XVThS&autoplay=1&mute=1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="mt-5 lg:mt-0 flex flex-col justify-center " data-aos="fade-left">
                <p class="text-16 lg:text-[45px] cursor-default font-bold text-primary"> About Us</p>
                <p class="text-12 lg:text-24 font-medium ">
                    {{-- Motoran is a close-knit community of motorcycle enthusiasts united by their love for riding. This
                vibrant group cultivates camaraderie through group rides, events, and social gatherings, fostering a
                deep sense of belonging. Whether united by a specific brand, style, or the shared joy of motorcycling
                freedom, these communities are hubs for friendship and the collective celebration of thrilling two-wheel
                adventures. --}}
                    {{ $about_us->content }}
                </p>
            </div>
        </div>
    </section>

    <section class="container  mt-[50px] lg:mt-[100px] ">
        <div class="lg:mx-[100px]">
            <div class="mb-4" data-aos="zoom-in">
                <p class="  text-16 lg:text-[45px] font-bold cursor-default text-primary" data-aos="zoom-in">
                    Why Ride with Motoran?
                </p>
            </div>
            <div class="grid gap-5 lg:gap-10" data-aos="fade-up">
                <div class="flex gap-2  border-primary rounded-md p-3 border-2 shadow-md">
                    <p class="text-secondary font-bold"> 1. </p>
                    <p class="font-normal text-12 lg:text-24 "> Experience a sense of
                        camaraderie and connection with
                        like-minded motorcycle enthusiasts who share your passion for riding.</p>
                </div>
                <div class="flex gap-2  border-primary rounded-md p-3 border-2 shadow-md">

                    <p class="text-secondary font-bold"> 2. </p>
                    <p class="font-normal text-12 lg:text-24 "> Enjoy premium guided motorcycle tours within the Indonesian
                        community, providing a unique and enriching experience.</p>
                </div>
                <div class="flex gap-2  border-primary rounded-md p-3 border-2 shadow-md">

                    <p class="text-secondary font-bold"> 3. </p>
                    <p class="font-normal text-12 lg:text-24 "> Become part of a vibrant and interconnected community that
                        goes
                        beyond just riding, fostering friendships, and a sense of belonging.</p>
                </div>
                <div class="flex gap-2  border-primary rounded-md p-3 border-2 shadow-md">

                    <p class="text-secondary font-bold"> 4. </p>
                    <p class="font-normal text-12 lg:text-24 "> Embark on unforgettable rides to explore the breathtaking
                        landscapes of Indonesia, discovering hidden gems and scenic routes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container flex-none  lg:flex lg:flex-wrap  mt-[50px] lg:mt-[100px] ">
        <div class="lg:mx-[100px]">
            <div class="mb-5 lg:mb-20 flex lg:gap-20">
                <div class="w-[1000px] flex flex-col justify-center">
                    <p class="text-center lg:text-left text-16 lg:text-[45px] font-bold cursor-default text-primary"
                        data-aos="zoom-in">
                        What is Our Vision?
                    </p>
                    <blockquote class="italic font-semibold text-center lg:text-left text-12 lg:text-24" data-aos="zoom-in">
                        <p class="text-secondary">"<span class="text-black"> Empowering riders to experience the ultimate
                                joy of
                                motorcycling, creating a global community fueled by
                                passion and camaraderie.
                            </span>"</p>
                    </blockquote>
                </div>
                <div class="hidden lg:block" data-aos="fade-left">
                    <img src="{{ asset('assets/img/home/vision.jpg') }}" alt="product"
                        class="rounded-xl shadow-md w-[800px]  object-cover" />
                </div>

            </div>
            <div class="mb-5 flex lg:gap-20">
                <div class="hidden lg:block" data-aos="fade-right">
                    <img src="{{ asset('assets/img/home/mission.jpg') }}" alt="product"
                        class="rounded-xl shadow-md w-[800px]  object-cover" />
                </div>
                <div class="w-[1000px] flex flex-col justify-center">
                    <p class="text-center lg:text-right text-16
                    lg:text-[45px] font-bold cursor-default text-primary"
                        data-aos="zoom-in">
                        How about Our Mission?
                    </p>

                    <blockquote class="italic lg:text-right font-semibold text-center text-12 lg:text-24">
                        <p class="text-secondary">"<span class="text-black" data-aos="zoom-in">
                                To provide exceptional riding experiences, cultivate a supportive community, and
                                advocate for safety and environmental consciousness in the world of motorcycling.
                            </span>"</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="container  mt-[50px] lg:mt-[100px] ">
        <div class="mb-4">
            <p class="text-center  text-16 lg:text-[45px] font-bold cursor-default text-primary" data-aos="zoom-in">
                Gallery
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-screen lg:px-20">
            <div class="grid gap-4">
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g7.jpg') }}" alt="">
                </div>
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g2.jpg') }}" alt="">
                </div>
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g3.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-y-2 gap-x-4">
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g8.jpg') }}" alt="">
                </div>
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g5.jpg') }}" alt="">
                </div>
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g6.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4 justify-between">
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g1.jpg') }}" alt="">
                </div>
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g4.jpg') }}" alt="">
                </div>
                <div data-aos="fade-up">
                    <img class="h-auto max-w-full rounded-lg aos-init aos-animate hover:scale-[1.05] duration-700"
                        data-aos-once="true" src="{{ asset('assets/img/gallery/g9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container  my-[50px] lg:my-[100px] ">
        <div class="mb-4" data-aos="zoom-in">
            <p class="text-center  text-16 lg:text-[45px] font-bold text-primary">
                Our Partners
            </p>
        </div>

        <div class="lg:flex lg:flex-wrap mb-[77.5px]  lg:max-w-[1000px] lg:mx-auto gap-[50px] justify-center items-center"
            data-aos="fade-up">

            <a href="" target="_blank" class="w-fit h-full  ">
                <img src="{{ asset('assets/img/partner/p1.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p2.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p3.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p4.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p5.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p6.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p7.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
            <a href="" target="_blank" class="w-fit h-full">
                <img src="{{ asset('assets/img/partner/p2.png') }}" alt="partners" class="h-32 mx-auto">
            </a>
        </div>

    </section>
@endsection
