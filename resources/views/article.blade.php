@extends('layouts.main-layout')

@section('content')
    <section class="container mb-20 mt-40 lg:my-40  ">
        <div class="">
            <p class="text-24 lg:text-[45px]  font-bold text-primary text-center"> Article</p>
        </div>
        <div class="lg:mx-[100px] grid gap-5 lg:gap-20 mt-4 lg:mt-16">
            <div class="w-full h-fit bg-white  lg:border-b-[7px] lg:border-b-primary lg:rounded-[7px] lg:mx-auto">
                <div class="px-[21px] pt-[29px] lg:p-0">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('assets/img/hero.jpg') }}">
                        <img src="{{ asset('assets/img/hero.jpg') }}" alt="news"
                            class="w-full h-[215px] object-cover object-center rounded-lg lg:h-[400px] lg:rounded-none lg:rounded-t-[7px] ">
                    </picture>
                </div>

                <div class="mx-[30px] mt-2 lg:mt-5">
                    <div class="flex flex-wrap space-x-2 items-center h-full">
                        <div class="text-[10px] lg:text-12 ">
                            Vale
                        </div>

                        <div class="border-l-[1px] border-slate-300 h-3"> </div>
                        <div class="text-[10px] lg:text-12">
                            Nov 07, 2023
                        </div>
                    </div>
                </div>

                <div class="px-[27px] pb-9 lg:pb-[30px] mt-[12px] lg:mt-[23px]">
                    <div class="text-18 font-bold">
                        The Thrilling World of Motorbike Communities: More Than Just a Ride
                    </div>
                    <div class="text-[15px] mt-[5px] leading-6 text-[#7B7B7B] line-clamp-2">
                        In the realm of two-wheeled adventures, motorbike communities stand out as vibrant hubs where
                        passion,
                        camaraderie, and the love for the open road converge. These communities are more than just
                        gatherings of
                        motorcycle enthusiasts; they embody a unique culture, fostering connections that transcend the
                        boundaries of age, background, and lifestyle.
                    </div>
                    <a href=""
                        class="flex flex-wrap space-x-[9.55px] lg:space-x-[5.55px] items-center mt-[10px] text-primary lg:text-secondary lg:hover:text-primary active:text-slate-300">

                        <p class="text-[17px] lg:text-14 ">
                            Read more
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-[15px] h-3 " fill="currentColor"
                            viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 72L32 192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l288 0 0 72c0 9.6 5.7 18.2 14.5 22z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full h-fit bg-white  lg:border-b-[7px] lg:border-b-primary lg:rounded-[7px] lg:mx-auto">
                <div class="px-[21px] pt-[29px] lg:p-0">
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('assets/img/gallery/g1.jpg') }}">
                        <img src="{{ asset('assets/img/gallery/g1.jpg') }}" alt="news"
                            class="w-full h-[215px] object-cover object-center rounded-lg lg:h-[400px] lg:rounded-none lg:rounded-t-[7px] ">
                    </picture>
                </div>

                <div class="mx-[30px] mt-2 lg:mt-5">
                    <div class="flex flex-wrap space-x-2 items-center h-full">
                        <div class="text-[10px] lg:text-12 ">
                            Valen
                        </div>

                        <div class="border-l-[1px] border-slate-300 h-3"> </div>
                        <div class="text-[10px] lg:text-12">
                            Nov 07, 2023
                        </div>
                    </div>
                </div>

                <div class="px-[27px] pb-9 lg:pb-[30px] mt-[12px] lg:mt-[23px]">
                    <div class="text-18 font-bold">
                        Embracing the Spirit of Two-Wheeled Brotherhood: The Essence of Motorbike Communities
                    </div>
                    <div class=" text-[15px] mt-[5px] leading-6 text-[#7B7B7B] line-clamp-2">
                        Motorbike communities, exemplified by the dynamic Motoran club, transcend the traditional definition
                        of
                        riding clubs. Beyond the shared love for motorcycles, these communities form tight-knit bonds among
                        diverse enthusiasts, creating an atmosphere where camaraderie, adventure, and a passion for the open
                        road flourish.
                    </div>
                    <a href=""
                        class="flex flex-wrap space-x-[9.55px] lg:space-x-[5.55px] items-center mt-[10px] text-primary lg:text-secondary lg:hover:text-primary active:text-slate-300">

                        <p class="text-[17px] lg:text-14 ">
                            Read more
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-[15px] h-3 " fill="currentColor"
                            viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 72L32 192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l288 0 0 72c0 9.6 5.7 18.2 14.5 22z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
