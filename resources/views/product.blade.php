@extends('layouts.main-layout')

@section('content')
    <section class="my-[150px] lg:mb-[100px] lg:mt-[150px] container">
        <div class="">
            <p class="text-24 lg:text-[45px]  font-bold text-primary text-center"> Our Product</p>
        </div>
        <div class="flex flex-wrap mt-12 lg:mx-[100px]">

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="w-44 text-primary text-12 lg:text-14 bg-white border-2 border-primary  font-medium rounded-lg text-sm px-2 py-1 lg:px-5 lg:py-2.5 inline-flex justify-between text-center items-center"
                type="button">Sort By <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-black" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary-2">Best Selling</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary-2">Alphabetically,
                            A-Z</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary-2">Price, low to high</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary-2">Price, high to low</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary-2">Date, old to new</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary-2">Date, new to old</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-screen mt-10 lg:mt-14 lg:mx-[100px]">
            @foreach ($data as $value)
                <a class="bg-white shadow-[0px_0px_30px_rgba(52,58,64,0.1)] rounded-xl overflow-hidden  max-w-full  "
                    href="">
                    <img src="{{ $value->image }}" alt="product" class="w-full h-[250px] lg:h-[500px] object-cover" />
                    <div class="flex justify-between">
                        <div class="p-5 grid gap-[2px]">
                            <p class=" text-[16.25px] lg:text-22 font-medium">{{ $value->name }}</p>
                            <p class=" text-[9.75px] text-[#74788D] lg:text-14"></p>
                            <p class=" text-[13px] font-bold">
                                IDR {{ $value->price }}
                            </p>
                        </div>
                        <div class="p-5 flex items-end">
                            <button
                                class="bg-primary hover:bg-primary-2 hover:text-primary text-white text-14 font-bold py-1 px-2 rounded-full lg:text-16">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
@endsection
