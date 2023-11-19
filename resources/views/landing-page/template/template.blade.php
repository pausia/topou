<!doctype html>
<html class="scroll-smooth focus:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body>
    <header>                           
        <nav class="bg-white p-4 fixed h-28 w-full z-20 top-0 left-0 border-b border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{ asset('assets/src/logo-topou.svg') }}" class="sm:h-12 h-9 mr-3" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2">
                <a href="{{ route('download') }}"><button type="button" class="text-primary hover:bg-primary hover:text-white border border-primary focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 text-center mr-2 mb-2 dark:border-primary dark:text-primary dark:hover:text-white dark:hover:bg-primary rounded-full sm:h-11 h-10 font-cabinet sm:text-xl text-base font-normal">Download Now</button></a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <li>
                <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 text-hitamku md:hover:bg-transparent md:hover:text-primary md:p-0 border-b-2 border-transparent hover:border-primary  font-cabinet text-xl font-normal" aria-current="page">Home</a>
                </li>
                <li>
                <a href="#howitworks" class="block py-2 pl-3 pr-4 text-hitamku md:hover:bg-transparent md:hover:text-primary md:p-0 border-b-2 border-transparent hover:border-primary  font-cabinet text-xl font-normal">How it works</a>
                </li>
                <li>
                <a href="{{ route('about-us') }}" class="block py-2 pl-3 pr-4  text-hitamku md:hover:bg-transparent md:hover:text-primary md:p-0 border-b-2 border-transparent hover:border-primary  font-cabinet text-xl font-normal">About Us</a>
                </li>
                <li>
                <a href="{{ route('education') }}" class="block py-2 pl-3 pr-4  text-hitamku md:hover:bg-transparent md:hover:text-primary md:p-0 border-b-2 border-transparent hover:border-primary  font-cabinet text-xl font-normal">Education</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>
    </header>
    <div class="content-wraper">
        @yield('content')
    </div>

    <footer class="bg-primary dark:bg-primary">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-16">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('assets/src/logotopou-white.svg') }}" class="sm:h-24 h-11 mr-3" alt="FlowBite Logo" />
                </a>
            </div>
            <div class="md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <div class="grid sm:grid-cols-4 mb-8">
                    <div>
                        <a href="https://flowbite.com/" class="mb-6 text-sm font-semibold text-white dark:text-white">Home</a>
                    </div>
                    <div>
                        <a href="https://github.com/themesberg/flowbite" class="mb-6 text-sm font-semibold text-white dark:text-white ">How it Works</a>
                    </div>
                    <div>
                        <a href="#" class="mb-6 text-sm font-semibold text-white dark:text-white">Education</a>
                    </div>
                    <div>
                        <a href="#" class="mb-6 text-sm font-semibold text-white dark:text-white">Term & Condition</a>
                    </div>
                </div>
                <div class="flex mt-8 space-x-5 sm:justify-end items-end sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img src="{{ asset('assets/src/tik_tok.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                        <span class="sr-only">Tik-tok page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img src="{{ asset('assets/src/instagram.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img src="{{ asset('assets/src/facebook.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img src="{{ asset('assets/src/youtube.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                        <span class="sr-only">Youtube page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <img src="{{ asset('assets/src/twitter.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                        <span class="sr-only">Twitter page</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" /> --}}
        </div>
        <div class="bg-white w-full text-center p-4 py-6 lg:py-8">
            <span class="text-lg text-hitamku sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Topou</a>. All Rights Reserved.
            </span>
        </div>
    </footer>


</body>
</html>