<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{--  Font Awesome  --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>
<body>

<header class="sticky w-full bg-[#f9f9f9] shadow-md top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-5">
        <h1 class="text-center text-3xl font-bold uppercase">Landing</h1>
        <nav class="flex justify-center space-x-4">
            <a class="text-lg">Home</a>
            <a class="text-lg">Leading</a>
            <a class="text-lg">Trailing</a>
        </nav>
    </div>

</header>

<main class=" w-full space-y-20 bg-white">

    {{--    Banner section--}}
    <section class="w-full ">
        <section class="w-full h-[800px] bg-[#f9f9f9] "
                 style="background-image: url('/images/hero-banner.png');
                 background-size: cover;
                 background-position: center;">
            {{--            <div class=" w-[55%] flex flex-col items-start pl-5 justify-center">--}}
            {{--                <p class=" text-ms text-green-600 ">OUR KEY FEATURES</p>--}}
            {{--                <div class="relative flex gap-2 ">--}}
            {{--                    <hr class="absolute top-[48px] left-[-35px] w-[80px] h-1 bg-black  rounded-full rotate-90"/>--}}
            {{--                    <h1 class="text-5xl font-bold pl-8">Our Feature That Streamlinging Healyhcare Management </h1>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </section>
    </section>
    {{--    Feature section--}}
    <section class=" w-full ">
        <section class=" container mx-auto flex flex-col items-center justify-center py-10 space-y-10 ">

            <div class="w-full flex flex-col gap-10">
                <div class=" w-[55%] flex flex-col items-start pl-5 justify-center">
                    <p class=" text-ms text-green-600 ">OUR KEY FEATURES</p>
                    <div class="relative flex gap-2 ">
                        <hr class="absolute top-[48px] left-[-35px] w-[80px] h-1 bg-black  rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">Our Feature That Streamlinging Healyhcare Management </h1>
                    </div>
                </div>
                <div class=" w-[60%] flex justify-end">
                    <p class="text-lg text-gray-400 pl-5 ">Our platform empowers healthcare professionals with
                        intuitive tools to streamline operations, enhance collaboration, and deliver exceptional patient
                        care with ease and efficiency.
                    </p>
                </div>
            </div>


            <div class=" w-full flex gap-10 justify-center">

                <div
                    class=" bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50">

                    <div
                        class=" w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100  text-blue-900">
                        <i class="fa-solid fa-calendar text-3xl "></i>
                    </div>
                    <div class=" flex gap-4  ">
                        <div class=" flex flex-col justify-between py-[5px]">
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                        </div>
                        <h1 class="text-2xl font-bold "> Management Biulds </h1>
                    </div>
                    <p class="text-lg text-gray-400">A proficient manager plays a crucial role in cultivating a positive
                        and productive work environment.
                    </p>
                </div>

                <div
                    class=" bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50">

                    <div
                        class=" w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100  text-blue-900">
                        <i class="fa-solid fa-user text-3xl "></i>
                    </div>
                    <div class=" flex gap-4  ">
                        <div class=" flex flex-col justify-between py-[5px]">
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                        </div>
                        <h1 class="text-2xl font-bold "> Employees </h1>
                    </div>
                    <p class="text-lg text-gray-400">Empower your team with exceptional management. Great leaders
                        inspire, motivate, and foster a thriving workplace.</p>
                </div>

                <div
                    class=" bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50">

                    <div
                        class=" w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100  text-blue-900">
                        <i class="fa-solid fa-boxes-stacked text-3xl "></i>
                    </div>
                    <div class=" flex gap-4  ">
                        <div class=" flex flex-col justify-between py-[5px]">
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                        </div>
                        <h1 class="text-2xl font-bold "> Products </h1>
                    </div>
                    <p class="text-lg text-gray-400">Skilled managers
                        align teams, streamline processes, and deliver innovative solutions that win markets.</p>
                </div>

                <div
                    class=" bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50">

                    <div
                        class=" w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100  text-blue-900">
                        <i class="fa-regular fa-calendar text-3xl "></i>
                    </div>
                    <div class=" flex gap-4  ">
                        <div class=" flex flex-col justify-between py-[5px]">
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                            <div class=" w-1 h-1 rounded-full bg-blue-900 "></div>
                        </div>
                        <h1 class="text-2xl font-bold "> Management Biulds </h1>
                    </div>
                    <p class="text-lg text-gray-400">A proficient manager plays a crucial role in cultivating a positive
                        and productive work environment.
                    </p>
                </div>


            </div>
        </section>
    </section>


    {{--    --}}
    <section class=" w-full ">
        <section class=" container mx-auto flex justify-center gap-10 py-10 space-y-10 ">


            <div class=" w-full min-h-[200px] ">

                <img src="/images/destop-landing.png" alt="hero banner"
                     class="w-[600px] h-full object-cover object-center rounded-[10px]"/>

            </div>

            <div class="w-full flex flex-col gap-10">
                <div class=" w-full flex flex-col items-start pl-5 justify-center">
                    <p class=" text-ms text-green-600 uppercase">Why choose (name)?</p>
                    <div class="relative flex gap-2 ">
                        <hr class="absolute top-[48px] left-[-35px] w-[80px] h-1 bg-black  rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">Why You Should Choose (name) As Your Companion?</h1>
                    </div>
                </div>
                <div class=" w-full flex">
                    <p class="text-lg text-gray-400 pl-5">Our Medical Dashboard Platform is designed to make
                        healthcare management intuitive and efficient.</p>
                </div>
            </div>

        </section>
        <section class=" container mx-auto ">
            <div class=" grid grid-cols-4 gap-10 ">


                <div class=" w-full h-[80px] bg-[#f9f9f9] rounded-[10px] ">
                    <div class=" w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Accurate Information Access</h1>
                    </div>
                </div>


                <div class=" w-full h-[80px] bg-[#f9f9f9] rounded-[10px] ">
                    <div class=" w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Appointment Management </h1>
                    </div>
                </div>


                <div class=" w-full h-[80px] bg-[#f9f9f9] rounded-[10px] ">
                    <div class=" w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Revenue Optimization </h1>
                    </div>
                </div>


                <div class=" w-full h-[80px] bg-[#f9f9f9] rounded-[10px] ">
                    <div class=" w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Interface Customization </h1>
                    </div>
                </div>


            </div>
        </section>
    </section>


    <section class=" w-full ">
        <section class=" container mx-auto flex flex-col items-center justify-center py-10 space-y-10 ">

            <div class="w-full flex flex-col gap-10">
                <div class=" w-[55%] flex flex-col items-start pl-5 justify-center">
                    <p class=" text-ms text-green-600 ">OUR CUSTOMER</p>
                    <div class="relative flex gap-2 ">
                        <hr class="absolute top-[48px] left-[-35px] w-[80px] h-1 bg-black  rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">Hear What Our Customers Are Saying </h1>
                    </div>
                </div>
                <div class=" w-[60%] flex justify-end">
                    <p class="text-lg text-gray-400 pl-5">Discover how our platform transforms healthcare
                        management, as shared by satisfied professionals and administrators who trust us to enhance
                        their workflows and patient care.
                    </p>
                </div>
            </div>


            <div class="w-full grid grid-cols-6 gap-10">

                <!-- Testimonial 1 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full bg-blue-900"></div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Dr. Sarah Lim</h1>
                                <p class="text-gray-500 text-sm font-medium">Clinic Director, Singapore</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            This platform streamlined our scheduling and patient records, saving us hours daily and
                            improving care quality.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full bg-blue-900"></div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Michael Chen</h1>
                                <p class="text-gray-500 text-sm font-medium">Hospital Administrator, Kuala Lumpur,
                                    Malaysia</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            The analytics tools helped us optimize resources and make data-driven decisions,
                            transforming our operations.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full bg-blue-900"></div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Dr. Priya Sharma</h1>
                                <p class="text-gray-500 text-sm font-medium">Physician, Mumbai, India</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            Patient communication is now seamless, allowing me to focus on delivering personalized care
                            with ease.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2 col-start-2">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full bg-blue-900"></div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Emma Nguyen</h1>
                                <p class="text-gray-500 text-sm font-medium">Practice Manager, Ho Chi Minh City,
                                    Vietnam</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            Billing and compliance tasks are now effortless, letting our team prioritize patient
                            satisfaction.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full bg-blue-900"></div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Dr. John Torres</h1>
                                <p class="text-gray-500 text-sm font-medium">Medical Director, Manila, Philippines</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            The platform’s intuitive design boosted our team’s efficiency, making healthcare delivery
                            smoother than ever.
                        </p>
                    </div>
                </div>

            </div>


        </section>
    </section>

</main>

</body>
</html>
