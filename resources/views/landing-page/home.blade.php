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
            <h1 class="title-font sm:text-6xl text-4xl font-bold font-cabinet text-secondary">An Easy and Fun Way of Task </h1>
            <h1 class="title-font sm:text-6xl text-4xl mt-4 font-extrabold font-cabinet text-primary">Management</h1>
            <p class="animate leading-relaxed sm:text-2xl text-base mt-8 mb-8 font-inter">A comprehensive to-do list task manager is designed to meet your day-to-day needs efficiently. It allows you to plan, schedule, and receive notifications, making task management a breeze.</p>
            <div class="flex justify-center">
            <a href="{{ route('download') }}"><button class="animate inline-flex text-white bg-primary hover:bg-primary focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full px-5 text-center dark:bg-primary dark:hover:bg-blue-600 dark:focus:ring-blue-500 sm:h-11 h-10 font-cabinet sm:text-xl text-base font-normal py-2">Download Now</button></a>
            <a href="#howitworks"><button class="animate ml-5 inline-flex text-primary hover:text-white border border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 px-5 text-center dark:border-primary dark:text-primary dark:hover:text-white dark:hover:bg-primary rounded-full sm:h-11 h-10 font-cabinet sm:text-xl text-base font-normal py-2">How it works</button></a>
            </div>
        </div>
        <img class="lg:w-3/6 md:w-4/6 w-6/6 mt-10 object-cover object-center rounded" alt="hero" src="{{ asset('assets/src/illustration-1.svg') }}">
        </div>
    </section>



    <section class="text-gray-400 bg-primary body-font">
        <div class="container px-5 py-24 mx-auto text-center">
            <div class="border-b border-gray-200">
                <p class="mb-12 font-normal font-inter text-whitetulis sm:text-3xl text-2xl">“Time management is the art of optimizing your day. Prioritize tasks, set clear goals, and maintain a balanced schedule to boost productivity and achieve personal and professional success.”</p>
            </div> 
            <div class="flex flex-wrap text-center md:p-12">
                <div class="p-4 sm:w-1/3 w-1/2">
                <h2 class="title-font font-extrabold font-cabinet sm:text-6xl  text-4xl text-white">+200K</h2>
                <p class="leading-relaxed mx-auto font-inter text-2xl text-whitetulis">Active Users</p>
                </div>
                <div class="p-4 sm:w-1/3 w-1/2">
                <h2 class="title-font font-extrabold font-cabinet sm:text-6xl text-4xl text-white">15</h2>
                <p class="leading-relaxed font-inter text-2xl text-whitetulis">Listed Countries</p>
                </div>
                <div class="p-4 sm:w-1/3 w-1/2">
                <h2 class="title-font font-extrabold font-cabinet sm:text-6xl text-4xl text-white">2K</h2>
                <p class="leading-relaxed font-inter text-2xl text-whitetulis">Daily User Growth</p>
                </div>
            </div>
            </div>
    </section>

    <section id="howitworks" class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center mb-20">
                <h1 class="text-2xl font-bold title-font mb-4 text-primary font-cabinet">How it Works</h1>
                <h1 class="sm:text-6xl  text-4xl font-bold title-font mb-4 text-hitamku font-cabinet leading-extra-loose">Understanding the Mechanics Behind Our Innovative App</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="sm:w-1/3 p-4 text-center">
                <div class="flex relative">
                    <div class="px-8 py-10 relative rounded-[50px] z-10 w-full bg-secondarybungsu">
                        <img class="lg:h-48 md:h-44 w-full object-cover object-center" alt="hero" src="{{ asset('assets/src/how-1.svg') }}">
                    <h1 class="title-font text-2xl font-bold text-hitamku font-cabinet mt-3 mb-3">Optimize Daily Productivity</h1>
                    <p class="leading-relaxed font-inter text-lg">Your ultimate tool for task and time management, elevating daily productivity to new heights and achieving your goals.</p>
                    </div>
                </div>
                </div>
                <div class="sm:w-2/3 p-4">
                <div class="flex relative">
                    <div class="px-8 py-14 relative rounded-[50px] z-10 w-full bg-primarybungsu">
                        <div class="flex items-center mx-auto sm:flex-row flex-col">
                            <div class="sm:w-2/3 flex-grow sm:text-right text-center mt-6 sm:mt-0">
                                <h1 class="title-font text-2xl font-bold text-hitamku font-cabinet mt-3 mb-3">Focus on Your Priorities</h1>
                                <p class="leading-relaxed font-inter text-lg">Harness the power of precise time management. Our app empowers you to maintain unwavering focus on your most important tasks, ensuring you achieve your vital goals and objectives with precision.</p>
                            </div>
                            <div class="sm:w-2/3 sm:order-none order-first lg:h-95 md:h-80 w-full sm:ml-10 inline-flex items-center justify-center">
                                <img class="object-cover object-center" alt="hero" src="{{ asset('assets/src/how-2.svg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="sm:w-2/3 p-4">
                    <div class="flex relative">
                    <div class="px-8 py-14 relative rounded-[50px] z-10 w-full bg-primarybungsu">
                        <div class="flex items-center mx-auto sm:flex-row flex-col">
                            <div class="sm:w-2/3 sm:order-none order-first lg:h-95 md:h-80 w-full sm:mr-10 inline-flex items-center justify-center">
                                <img class="object-cover object-center" alt="hero" src="{{ asset('assets/src/how-3.svg') }}">
                            </div>
                            <div class="sm:w-2/3 flex-grow sm:text-left text-center mt-6 sm:mt-0">
                                <h1 class="title-font text-2xl font-bold text-hitamku font-cabinet mt-3 mb-3">Eliminate Workday Boredom</h1>
                                <p class="leading-relaxed font-inter text-lg">Rediscover the excitement in your daily work. Our innovative app breathes new life into tasks, banishing boredom, and keeping you engaged with creative features and productivity-enhancing tools.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="sm:w-1/3 p-4 text-center">
                    <div class="flex relative">
                    <div class="px-8 py-10 relative rounded-[50px] z-10 w-full bg-secondarybungsu">
                        <img class="lg:h-48 md:h-44 w-full object-cover object-center" alt="hero" src="{{ asset('assets/src/how-4.svg') }}">
                        <h1 class="title-font text-2xl font-bold text-hitamku font-cabinet mt-3 mb-3">Maximize Work Performance</h1>
                        <p class="leading-relaxed font-inter text-lg"> The definitive app to build and enhance your work performance, helping you reach success faster and with greater efficiency.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </section>


      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-6xl text-4xl mb-4 font-medium text-hitamku font-cabinet">Subscribe to our </h1>
            <h1 class="title-font sm:text-6xl text-4xl mb-4 font-extrabold text-hitamku font-cabinet">Newsletter</h1>
            <p class="mb-8 font-inter sm:text-2xl text-base leading-relaxed">Stay tuned with the latest productivity tips and tricks</p>
            <div class="bg-white flex flex-col md:ml-auto w-full">
                <div class="relative mb-6">
                  <input placeholder="name@gmail.com" type="email" id="email" name="email" class="h-14 dark:placeholder-gray-400 text-lg font-inter w-full bg-white rounded-full border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="h-14 text-lg font-inter text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded-full">Button</button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="w-full object-cover object-center" alt="hero" src="{{ asset('assets/src/contact.svg') }}">
          </div>
        </div>
      </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>  
@endsection
