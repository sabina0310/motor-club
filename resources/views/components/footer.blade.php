<div class="bg-black h-3 w-full mt-auto"></div>
<footer class="bg-primary text-white bottom-0">
    <div class="grid grid-cols-2 gap-5 lg:grid-cols-5 col-span-2 container pb-5 pt-8 lg:py-12">
        <div class="col-start-1 col-end-3">
            <a href={{ route('home') }} class="flex-shrink-0 place-self-start col-span-2">
                <img src="{{ asset('assets/img/icon/logo-light.png') }}" class="h-[75px] lg:[100px]"</a>

            </a>
            <p class="text-[13px] lg:text-16 text-white font-normal  pt-8 lg:pt-5 lg:pb-4">
                Motoran specializes in providing high-quality guided motorcycle tours within the Indonesian community.
                Become a part of our community and embark on unforgettable rides to discover the enchanting landscapes
                of Indonesia with Motoran.
            </p>
        </div>
        <div class="flex flex-col lg:py-12 lg:items-center">
            <div class="flex flex-col">
                <p class="font-bold lg:text-16">Quick Links</p>
                <a class="text-[13px] lg:text-[15px] text-white font-normal  italic py-1 " href="{{ route('home') }}">
                    Home
                </a>
                <a class="text-[13px] lg:text-[15px] text-white font-normal  italic py-1 "
                    href="{{ route('product') }}">
                    Product
                </a>
                <a class="text-[13px] lg:text-[15px] text-white font-normal  italic py-1 "
                    href="{{ route('article') }}">
                    Article
                </a>
                <a class="text-[13px] lg:text-[15px] text-white font-normal  italic py-1 "
                    href="{{ route('contact-us') }}">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="flex flex-col lg:py-12">
            <p class="font-bold">Follow Us</p>
            <a class="inline-flex py-1" href="http://instagram.com" target="_blank" title="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                    <g fill="none" fill-rule="evenodd">
                        <path
                            d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                        <path fill="currentColor"
                            d="M16 3a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8a5 5 0 0 1 5-5h8Zm0 2H8a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3Zm-4 3a4 4 0 1 1 0 8a4 4 0 0 1 0-8Zm0 2a2 2 0 1 0 0 4a2 2 0 0 0 0-4Zm4.5-3.5a1 1 0 1 1 0 2a1 1 0 0 1 0-2Z" />
                    </g>
                </svg>
                <p class="text-[13px] lg:text-[15px] text-white font-normal  italic ml-2">@motoran.id</p>
            </a>

            <a class="inline-flex py-1" href="http://facebook.com" target="_blank" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                    <path fill="currentColor"
                        d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
                </svg>
                <p class="text-[13px] lg:text-[15px] text-white font-normal  italic ml-2">@motoran.id</p>
            </a>
            <a class="inline-flex py-1" href="http://youtube.com" target="_blank" title="Youtube">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                    <path fill="currentColor"
                        d="m10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73Z" />
                </svg>
                <p class="text-[13px] lg:text-[15px] text-white font-normal  italic ml-2">@motoran.id</p>
            </a>
        </div>
        <div class="flex flex-col lg:py-12 mb-5 col-span-2 lg:col-span-1">
            <p class="font-bold text-16">Contact Info</p>
            <a href="https://maps.app.goo.gl/egwJsQRbu33KJVkJ8" target="_blank" class="inline-flex py-1">
                <div class="ml-1">
                    <svg width="18" height="28" viewBox="0 0 11 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.125 9.33731C5.46875 9.33731 5.76312 9.21746 6.00813 8.97776C6.25271 8.73848 6.375 8.45068 6.375 8.11438C6.375 7.77807 6.25271 7.49007 6.00813 7.25038C5.76312 7.01109 5.46875 6.89145 5.125 6.89145C4.78125 6.89145 4.48708 7.01109 4.2425 7.25038C3.9975 7.49007 3.875 7.77807 3.875 8.11438C3.875 8.45068 3.9975 8.73848 4.2425 8.97776C4.48708 9.21746 4.78125 9.33731 5.125 9.33731ZM5.125 13.8316C6.39583 12.6902 7.33854 11.6531 7.95312 10.7204C8.56771 9.78816 8.875 8.96024 8.875 8.23667C8.875 7.12584 8.51292 6.21618 7.78875 5.5077C7.065 4.79962 6.17708 4.44559 5.125 4.44559C4.07292 4.44559 3.18479 4.79962 2.46062 5.5077C1.73688 6.21618 1.375 7.12584 1.375 8.23667C1.375 8.96024 1.68229 9.78816 2.29688 10.7204C2.91146 11.6531 3.85417 12.6902 5.125 13.8316ZM5.125 15.2227C5.04167 15.2227 4.95833 15.2074 4.875 15.1768C4.79167 15.1462 4.71875 15.1055 4.65625 15.0545C3.13542 13.7399 2 12.5196 1.25 11.3937C0.5 10.2673 0.125 9.21501 0.125 8.23667C0.125 6.70801 0.627708 5.49017 1.63313 4.58317C2.63813 3.67616 3.80208 3.22266 5.125 3.22266C6.44792 3.22266 7.61188 3.67616 8.61687 4.58317C9.62229 5.49017 10.125 6.70801 10.125 8.23667C10.125 9.21501 9.75 10.2673 9 11.3937C8.25 12.5196 7.11458 13.7399 5.59375 15.0545C5.53125 15.1055 5.45833 15.1462 5.375 15.1768C5.29167 15.2074 5.20833 15.2227 5.125 15.2227Z"
                            fill="white" />
                    </svg>
                </div>
                <p class="text-[13px] lg:text-[15px] text-white font-normal  italic ml-2 py-1">Jl Bugis, Desa
                    Saptorenggo,
                    Kec. Pakis, Kab.Malang</p>
            </a>

            <a class="inline-flex py-1" href="mailto:himotoran@motoran.com" target="_blank" title="Email">
                <div class="ml-1">
                    <svg width="18" height="28" viewBox="0 0 12 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.125 1.84766C11.125 1.22891 10.63 0.722656 10.025 0.722656H1.225C0.62 0.722656 0.125 1.22891 0.125 1.84766V8.59766C0.125 9.21641 0.62 9.72266 1.225 9.72266H10.025C10.63 9.72266 11.125 9.21641 11.125 8.59766V1.84766ZM10.025 1.84766L5.625 4.66016L1.225 1.84766H10.025ZM10.025 8.59766H1.225V2.97266L5.625 5.78516L10.025 2.97266V8.59766Z"
                            fill="white" />
                    </svg>
                </div>
                <p class="text-[13px] lg:text-[15px] text-white font-normal  italic ml-2 py-1">himotoran@motoran.com</p>
            </a>
            <a class="inline-flex py-1" href="https://api.whatsapp.com/send?phone=+6281216690467&text=Hello%20there!"
                target="_blank" title="phone">
                <div class="ml-1">
                    <svg width="18" height="26" viewBox="0 0 10 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.325 1.77959C7.56369 1.77959 7.79261 1.87656 7.9614 2.04918C8.13018 2.2218 8.225 2.45592 8.225 2.70004V13.7455C8.225 13.9896 8.13018 14.2237 7.9614 14.3964C7.79261 14.569 7.56369 14.6659 7.325 14.6659H1.925C1.68631 14.6659 1.45739 14.569 1.2886 14.3964C1.11982 14.2237 1.025 13.9896 1.025 13.7455V2.70004C1.025 2.45592 1.11982 2.2218 1.2886 2.04918C1.45739 1.87656 1.68631 1.77959 1.925 1.77959H7.325ZM1.925 0.859131C1.44761 0.859131 0.989773 1.05308 0.652208 1.39832C0.314642 1.74356 0.125 2.2118 0.125 2.70004V13.7455C0.125 14.2337 0.314642 14.702 0.652208 15.0472C0.989773 15.3925 1.44761 15.5864 1.925 15.5864H7.325C7.80239 15.5864 8.26023 15.3925 8.59779 15.0472C8.93536 14.702 9.125 14.2337 9.125 13.7455V2.70004C9.125 2.2118 8.93536 1.74356 8.59779 1.39832C8.26023 1.05308 7.80239 0.859131 7.325 0.859131H1.925Z"
                            fill="white" />
                        <path
                            d="M4.47157 12.825C4.75638 12.825 5.02952 12.7118 5.2309 12.5104C5.43229 12.3091 5.54543 12.0359 5.54543 11.7511C5.54543 11.4663 5.43229 11.1932 5.2309 10.9918C5.02952 10.7904 4.75638 10.6772 4.47157 10.6772C4.18676 10.6772 3.91362 10.7904 3.71223 10.9918C3.51084 11.1932 3.39771 11.4663 3.39771 11.7511C3.39771 12.0359 3.51084 12.3091 3.71223 12.5104C3.91362 12.7118 4.18676 12.825 4.47157 12.825Z"
                            fill="#F15929" />
                    </svg>
                </div>
                <p class="text-[13px] lg:text-[15px] text-white font-normal  italic ml-2 py-1">081216690467</p>
            </a>
        </div>
    </div>
    <div class="text-[13px] text-center border-t-[0.5px] lg:text-14 p-4 text-gray-400 italic">
        Copyright 2023
    </div>
</footer>
