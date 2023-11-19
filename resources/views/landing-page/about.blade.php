@extends('landing-page.template.template')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

@section('content')
    <section class="text-gray-400 bg-white sm:mt-28 mt-10">
        <div class="container mx-auto flex px-5 py-24  items-center justify-center flex-col">
        <div class="text-center lg:w-2/3">
            <h1 class="title-font sm:text-6xl text-3xl font-bold font-cabinet text-hitamku inline">A small team dedicated to enhancing people's productivity</h1>
        </div>
        <img class="lg:w-3/6 md:w-4/6 w-6/6 mt-10 object-cover object-center rounded" alt="hero" src="{{ asset('assets/src/about-illust.svg') }}">
        </div>
    </section>

    <section class="bg-primary text-white body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-12">
            <div class="p-12 md:w-1/2 flex flex-col items-start">
                <div class="flex flex-col text-start mb-8">
                    <h3 class="text-2xl font-bold title-font mb-4 text-amber-400 font-cabinet">Our Story</h3>
                    <h1 class="sm:text-6xl  text-4xl font-bold title-font text-white font-cabinet leading-extra-loose">We’re dedecated to Productivity behavior</h1>
                </div>
                <div class="flex p-4 w-full items-center">
                    <img class="lg:w-2/6 md:w-3/6 w-6/6 mt-10 mr-8 object-cover object-center rounded" alt="hero" src="{{ asset('assets/src/about-time.svg') }}">
                    <p class="animate leading-relaxed text-lg mt-8 mb-8 font-inter">Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain a balanced schedule.</p>
                </div>
            </div>
            <div class="p-12 md:w-1/2 flex flex-col items-start">
                <div class="py-1 px-4">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <h2 class="font-normal text-2xl text-white title-font leading-8">01.</h2>
                        </div>
                        <div class="flex-grow pl-6">
                            <h1 class="title-font text-2xl font-bold mb-3 text-white font-cabinet">We’re dedecated to Productivity</h1>
                            <p class="leading-relaxed mb-5 text-xl font-cabinet">Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain.</p>
                        </div>
                    </div>
                </div>

                <div class="py-1 px-4">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <h2 class="font-normal text-2xl text-white title-font leading-8">02.</h2>
                        </div>
                        <div class="flex-grow pl-6">
                            <h1 class="title-font text-2xl font-bold mb-3 text-white font-cabinet">We’re dedecated to Productivity</h1>
                            <p class="leading-relaxed mb-5 text-xl font-cabinet">Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain.</p>
                        </div>
                    </div>
                </div>

                <div class="py-1 px-4">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <h2 class="font-normal text-2xl text-white title-font leading-8">03.</h2>
                        </div>
                        <div class="flex-grow pl-6">
                            <h1 class="title-font text-2xl font-bold mb-3 text-white font-cabinet">We’re dedecated to Productivity</h1>
                            <p class="leading-relaxed mb-5 text-xl font-cabinet">Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain.</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center mb-20">
                <h1 class="text-2xl font-bold title-font mb-4 text-primary font-cabinet">Team</h1>
                <h1 class="sm:text-6xl text-4xl font-bold title-font mb-4 text-hitamku font-cabinet leading-extra-loose">Our Great Team</h1>
            </div>

            <div class="container mx-auto rounded-lg flex md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                  <img class="object-cover object-center rounded" alt="hero" src="{{ asset('assets/src/pausia.svg') }}">
                </div>
                <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                  <h1 class="title-font sm:text-5xl text-3xl mb-4 font-medium text-gray-900">Nurfauziah Makmur</h1>
                  <h3 class="title-font sm:text-2xl text-2xl mb-4 font-normal text-gray-600">UI/UX Designer & Graphic Designer</h3>
                  <p class="mb-8  text-xl leading-relaxed">Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain a balanced schedule to boost productivity and achieve personal and professional success.</p>
                  <div class="flex justify-center">
                    <span class="inline-flex">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img src="{{ asset('assets/src/instagram-blue.svg') }}" class="h-8" alt="socialmedia" />
                            <span class="sr-only">Tik-tok page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img src="{{ asset('assets/src/linkedin-blue.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img src="{{ asset('assets/src/github-blue.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                            <span class="sr-only">Youtube page</span>
                        </a>
                    </span>
                  </div>
                </div>
            </div>

            <div class="container mx-auto flex py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                  <h1 class="title-font sm:text-5xl text-3xl mb-4 font-medium text-gray-900">Muslikhul Adib</h1>
                  <h3 class="title-font sm:text-2xl text-2xl mb-4 font-normal text-gray-600">Fullstack Developer</h3>
                  <p class="mb-8 text-xl leading-relaxed">Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain a balanced schedule to boost productivity and achieve personal and professional success.</p>
                  <div class="flex justify-center">
                    <span class="inline-flex">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img src="{{ asset('assets/src/instagram-blue.svg') }}" class="h-8" alt="socialmedia" />
                            <span class="sr-only">Tik-tok page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img src="{{ asset('assets/src/linkedin-blue.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <img src="{{ asset('assets/src/github-blue.svg') }}" class="h-8 ml-3" alt="socialmedia" />
                            <span class="sr-only">Youtube page</span>
                        </a>
                    </span>
                  </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                  <img class="object-cover object-center rounded" alt="hero" src="{{ asset('assets/src/abdi.svg') }}">
                </div>
            </div>
        </div>
      </section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>  
@endsection