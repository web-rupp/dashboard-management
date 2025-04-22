<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Management Dashboard</title>

    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" rel="stylesheet">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
    <div class="container mx-auto flex items-center justify-between py-3">
        <img src="/images/rupp.png" alt="logo" class="w-[60px] h-[60px]"/>
        <nav class="flex justify-center space-x-4">
            <a class="text-lg">Home</a>
            <a class="text-lg">Features</a>
            <a class="text-lg">Contact</a>
        </nav>
    </div>
</header>

<main class="w-full space-y-20 bg-white">

    {{-- Banner section --}}
    <section class="w-full">
        <section class="w-full h-[700px] bg-[#f9f9f9]"
                 style="background-image: url('/images/hero-banner.png');
                 background-size: cover;
                 background-position: center;">

            <div class=" container mx-auto pt-40 h-full space-y-3">
                <p class="text-sm text-green-600 uppercase"></p>
                <h1 class="text-5xl font-bold ">Smart Solutions For</h1>
                <h1 class="text-5xl font-bold "> Dashboard Management</h1>
                <p class=" text-base text-gray-400 w-[620px]">Access critical patient data, and enhance collaboration
                    among your healthcare team effortlessly.</p>
                <div class=" w-[40%] flex gap-5 mt-10">
                    <input
                        class="block w-full bg-white text-lg rounded-md shadow-sm p-3"
                        placeholder="Enter your phone number"/>
                    <button class=" text-white bg-blue-600 rounded-md w-[200px]">GET START</button>

                </div>
            </div>
        </section>
    </section>

    {{-- Feature section --}}
    <section class="w-full">
        <section class="container mx-auto flex flex-col items-center justify-center py-10 space-y-10">
            <div class="w-full flex flex-col gap-10">
                <div class="w-[55%] flex flex-col items-start pl-5 justify-center" data-aos="fade-up">
                    <p class="text-sm text-green-600 uppercase">Our Key Features</p>
                    <div class="relative flex gap-2">
                        <hr class="absolute top-[48px] left-[-35px] w-[80px] h-1 bg-black rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">Streamline Your Business Management</h1>
                    </div>
                </div>
                <div class="w-[60%] flex justify-end" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-lg text-gray-400 pl-5">
                        Our platform empowers businesses with intuitive tools to manage dashboards, employees, and
                        product categories, enhancing efficiency and productivity.
                    </p>
                </div>
            </div>

            <div class="w-full flex gap-10 justify-center">
                <div class="bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100 text-blue-900">
                        <i class="fa-solid fa-chart-line text-3xl"></i>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col justify-between py-[5px]">
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                        </div>
                        <h1 class="text-2xl font-bold">Dashboard Insights</h1>
                    </div>
                    <p class="text-lg text-gray-400">
                        Gain real-time insights with customizable dashboards to monitor performance and make informed
                        decisions.
                    </p>
                </div>

                <div class="bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100 text-blue-900">
                        <i class="fa-solid fa-user text-3xl"></i>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col justify-between py-[5px]">
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                        </div>
                        <h1 class="text-2xl font-bold">Employee Management</h1>
                    </div>
                    <p class="text-lg text-gray-400">
                        Simplify employee scheduling, performance tracking, and team collaboration with intuitive tools.
                    </p>
                </div>

                <div class="bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100 text-blue-900">
                        <i class="fa-solid fa-boxes-stacked text-3xl"></i>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col justify-between py-[5px]">
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                        </div>
                        <h1 class="text-2xl font-bold">Product Categories</h1>
                    </div>
                    <p class="text-lg text-gray-400">
                        Organize and manage product categories efficiently to streamline inventory and sales processes.
                    </p>
                </div>

                <div class="bg-[#f9f9f9] w-full rounded-[10px] flex flex-col p-10 space-y-5 shadow-md hover:bg-blue-50" data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-[54px] h-[54px] flex items-center justify-center rounded-[5px] bg-blue-100 text-blue-900">
                        <i class="fa-solid fa-plug text-3xl"></i>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col justify-between py-[5px]">
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                            <div class="w-1 h-1 rounded-full bg-blue-900"></div>
                        </div>
                        <h1 class="text-2xl font-bold">Integrations</h1>
                    </div>
                    <p class="text-lg text-gray-400">
                        Seamlessly connect with other tools to enhance workflow and centralize your management
                        processes.
                    </p>
                </div>
            </div>
        </section>
    </section>

    {{-- Why Choose Section --}}
    <section class="w-full">
        <section class="container mx-auto flex justify-center gap-10 py-10 space-y-10">
            <div class="w-full min-h-[200px]" data-aos="fade-right">
                <img src="/images/destop-landing.png" alt="dashboard preview"
                     class="w-[600px] h-full object-cover object-center rounded-[10px]"/>
            </div>

            <div class="w-full flex flex-col gap-10" data-aos="fade-left">
                <div class="w-full flex flex-col items-start pl-5 justify-center">
                    <p class="text-sm text-green-600 uppercase">Why Choose Us?</p>
                    <div class="relative flex gap-2">
                        <hr class="absolute top-[48px] left-[-35px] w-[80px] h-1 bg-black rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">Why Choose Our Management Platform?</h1>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="text-lg text-gray-400 pl-5">
                        Our platform simplifies business management with a user-friendly dashboard, robust employee
                        tools, and efficient product organization.
                    </p>
                </div>
            </div>
        </section>
        <section class="container mx-auto">
            <div class="grid grid-cols-4 gap-10">
                <div class="w-full h-[80px] bg-[#f9f9f9] rounded-[10px]" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Real-Time Analytics</h1>
                    </div>
                </div>

                <div class="w-full h-[80px] bg-[#f9f9f9] rounded-[10px]" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Employee Scheduling</h1>
                    </div>
                </div>

                <div class="w-full h-[80px] bg-[#f9f9f9] rounded-[10px]" data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Inventory Management</h1>
                    </div>
                </div>

                <div class="w-full h-[80px] bg-[#f9f9f9] rounded-[10px]" data-aos="zoom-in" data-aos-delay="400">
                    <div class="w-full h-full flex items-center justify-center gap-3">
                        <i class="fa-solid fa-circle-check text-blue-600"></i>
                        <h1 class="text-lg text-black font-medium">Customizable Interface</h1>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Testimonials Section --}}
    <section class="w-full">
        <section class="container mx-auto flex flex-col items-center justify-center py-10 space-y-10">
            <div class="w-full flex flex-col gap-10">
                <div class="w-[55%] flex flex-col items-start pl-5 justify-center" data-aos="fade-up">
                    <p class="text-sm text-green-600 uppercase">Our Customers</p>
                    <div class="relative flex gap-2">
                        <hr class="absolute top-[24px] left-[-15px] w-[40px] h-1 bg-black rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">What Our Customers Say</h1>
                    </div>
                </div>
                <div class="w-[60%] flex justify-end" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-lg text-gray-400 pl-5">
                        Hear from business owners and managers who trust our platform to streamline their operations and
                        boost productivity.
                    </p>
                </div>
            </div>

            <div class="w-full grid grid-cols-6 gap-10">
                <!-- Testimonial 1 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full ">
                                <img src="/images/place-holder.png" class=" w-full"/>
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Sarah Lim</h1>
                                <p class="text-gray-500 text-sm font-medium">Business Owner, Singapore</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            The platform simplified our employee scheduling and product tracking, saving hours daily and
                            boosting efficiency.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full ">
                                <img src="/images/place-holder.png" class=" w-full"/>
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Michael Chen</h1>
                                <p class="text-gray-500 text-sm font-medium">Operations Manager, Kuala Lumpur,
                                    Malaysia</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            The dashboard’s analytics helped us optimize resources and make smarter business decisions.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2" data-aos="fade-up" data-aos-delay="400">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full ">
                                <img src="/images/place-holder.png" class=" w-full"/>
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Priya Sharma</h1>
                                <p class="text-gray-500 text-sm font-medium">Retail Manager, Mumbai, India</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            Managing product categories is now seamless, allowing us to focus on growing our sales.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2 col-start-2" data-aos="fade-up" data-aos-delay="500">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full ">
                                <img src="/images/place-holder.png" class=" w-full"/>
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">Emma Nguyen</h1>
                                <p class="text-gray-500 text-sm font-medium">Team Lead, Ho Chi Minh City, Vietnam</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            Employee management tools are intuitive, helping our team stay organized and productive.
                        </p>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] p-10 col-span-2" data-aos="fade-up" data-aos-delay="600">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center">
                            <div class="h-14 w-14 rounded-full ">
                                <img src="/images/place-holder.png" class=" w-full"/>
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-xl uppercase font-semibold">John Torres</h1>
                                <p class="text-gray-500 text-sm font-medium">Business Manager, Manila, Philippines</p>
                            </div>
                        </div>
                        <p class="text-base line-clamp-3">
                            The platform’s design makes managing our operations smoother and more efficient than ever.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Contact Section --}}
    <section class="w-full">
        <section class="container mx-auto flex justify-center gap-10 py-10 space-y-10">
            <div class="w-full flex justify-start items-start" data-aos="fade-right">
                <div class="flex flex-col bg-[#f9f9f9] w-[80%] h-full rounded-[10px] shadow-md p-10 gap-7">
                    <div class="space-y-2">
                        <label class="block text-base font-medium text-gray-700">Username</label>
                        <input
                            class="block w-full bg-white rounded-md shadow-sm p-3"
                            placeholder="Enter your username"/>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-base font-medium text-gray-700">Email</label>
                        <input
                            class="block w-full bg-white rounded-md shadow-sm p-3"
                            placeholder="Enter your email"/>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-base font-medium text-gray-700">Phone Number</label>
                        <input
                            class="block w-full bg-white rounded-md shadow-sm p-3"
                            placeholder="Enter your phone number"/>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-base font-medium text-gray-700">Request</label>
                        <textarea
                            class="block w-full bg-white rounded-md shadow-sm p-3"
                            rows="4"
                            cols="50"
                            placeholder="Enter your request"></textarea>
                    </div>

                    <div class="w-full text-end">
                        <button class="bg-blue-600 text-white p-3 rounded-md cursor-pointer hover:bg-blue-700">
                            Submit
                        </button>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col gap-10" data-aos="fade-left">
                <div class="w-full flex flex-col items-start pl-5 justify-center">
                    <p class="text-sm text-green-600 uppercase">Get in Touch</p>
                    <div class="relative flex gap-2">
                        <hr class="absolute top-[24px] left-[-15px] w-[40px] h-1 bg-black rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">We Value Your Feedback</h1>
                    </div>
                </div>
                <div class="w-full flex">
                    <p class="text-lg text-gray-400 pl-5">
                        Share your thoughts and questions with us to help improve our management platform.
                    </p>
                </div>

                <div class="flex flex-col gap-10 pl-5">
                    <div class="flex gap-5">
                        <div
                            class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-blue-100 text-blue-900">
                            <i class="fa-solid fa-phone-volume text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-medium">Phone Number</h1>
                            <p class="text-base text-gray-400">+885 096 789 901</p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div
                            class="w-[60px] h-[60px] flex items-center justify-center rounded-full bg-blue-100 text-blue-900">
                            <i class="fa-solid fa-envelope text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-lg font-medium">Email</h1>
                            <p class="text-base text-gray-400">support@managementplatform.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- FAQ Section --}}
    <section class="w-full">
        <section class="container mx-auto flex flex-col items-center justify-center py-10 space-y-10">
            <div class="w-full flex flex-col gap-10">
                <div class="w-[55%] flex flex-col items-start pl-5 justify-center" data-aos="fade-up">
                    <p class="text-sm text-green-600 uppercase">Your Questions Answered</p>
                    <div class="relative flex gap-2">
                        <hr class="absolute top-[24px] left-[-15px] w-[40px] h-1 bg-black rounded-full rotate-90"/>
                        <h1 class="text-5xl font-bold pl-8">Frequently Asked Questions</h1>
                    </div>
                </div>
                <div class="w-[60%] flex justify-end" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-lg text-gray-400 pl-5">
                        Find quick answers to common questions about our management platform’s features and
                        functionality.
                    </p>
                </div>
            </div>

            <div class="w-full grid grid-cols-4 gap-5 mb-20">
                <!-- FAQ 1 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2 row-span-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">How does the dashboard streamline operations?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-minus text-blue-900"></i>
                            </div>
                        </div>
                        <p class="text-base line-clamp-4 text-gray-500">
                            Our dashboard provides real-time insights, allowing you to monitor performance, track
                            metrics, and optimize workflows efficiently.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">What makes employee management easier?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-plus text-blue-900"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2" data-aos="fade-up" data-aos-delay="400">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">How does it simplify product category organization?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-plus text-blue-900"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2" data-aos="fade-up" data-aos-delay="500">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">Can the platform integrate with other tools?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-plus text-blue-900"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2" data-aos="fade-up" data-aos-delay="600">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">How does the dashboard improve decision-making?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-plus text-blue-900"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2" data-aos="fade-up" data-aos-delay="700">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">Is managing product data secure and reliable?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-plus text-blue-900"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="w-full bg-[#f9f9f9] rounded-[10px] px-10 py-5 col-span-2" data-aos="fade-up" data-aos-delay="800">
                    <div class="space-y-5">
                        <div class="flex gap-5 items-center justify-between">
                            <h1 class="text-lg font-medium">Why is this platform ideal for team management?</h1>
                            <div class="bg-blue-300 h-10 w-10 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-plus text-blue-900"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</main>

{{-- AOS JS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
