@extends('layouts.guest')

@section('title') Download @stop

@section('metas')
    <meta name="robots" content="index, follow">
    <meta name="description" content="Download the latest healthcare resources, guides, and products from Vitaway. Access valuable information to support your well-being and stay informed about our innovative healthcare solutions.">
    <meta name="keywords" content="Vitaway Downloads, Well-being Support, Downloadable Content, Healthcare Solutions, Medical Information, Healthcare Resources,vitaway, vitaway.org, e-clinic, digital healthcare, platform, multi-disciplinary, health practices, equipping, young, NCDs, nutritional, education, download vitaway, vitaway download">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/pages/download.css">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative bg-white overflow-hidden">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="absolute inset-0 inset-x-10">
                    <div class="absolute inset-y-0 z-0 w-full h-full from-indigo-100 bg-gradient-to-b lg:w-3/6"></div>
                </div>
                <div class="relative">
                    <div class="grid gap-10 lg:grid-cols-2">
                        <div class="flex flex-col justify-center md:pr-10 xl:pr-0 lg:max-w-lg">
                            <div class="max-w-xl mb-6 section-title-content">
                                <h2 class="mb-6 font-patua font-normal text-3xl tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                                    <span class="relative inline-block">
                                        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-28 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-32 lg:-mt-10 sm:block">
                                            <defs>
                                            <pattern id="6b0188f3-b7a1-4e9b-b95e-cad916bb3042" x="0" y="0" width=".135" height=".30">
                                                <circle cx="1" cy="1" r=".7"></circle>
                                            </pattern>
                                            </defs>
                                            <rect fill="url(#6b0188f3-b7a1-4e9b-b95e-cad916bb3042)" width="52" height="24"></rect>
                                        </svg>
                                        <span class="relative font-patua font-normal bg-[#2e91ce]/50 hover:bg-[#1da1f2]/90 rounded-tl-lg rounded-br-lg px-3">All-in-One</span>
                                    </span>
                                    Virtual Health Companion
                                    Empowering Your Wellness <br/> Comprehensive Care
                                </h2>
                                <p class="text-base text-gray-700 md:text-lg">
                                    Designed to improve your healthcare experience,
                                    from virtual doctor consultations to health tracking and personalized wellness plans.
                                </p>
                                <hr class="my-8 border-gray-600" />
                                <div class="flex items-center mb-3 sm:justify-left">
                                    <a href="https://play.google.com/store/search?q=vitaway&c=apps" class="mr-3 transition duration-300 hover:shadow-lg">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1000px-Download_on_the_App_Store_Badge.svg.png" class="object-cover object-top w-32 mx-auto" alt="Download Vitaway From App Store" />
                                    </a>
                                    <a href="https://play.google.com/store/search?q=vitaway&c=apps" class="transition duration-300 hover:shadow-lg">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1000px-Google_Play_Store_badge_EN.svg.png" class="object-cover object-top w-32 mx-auto" alt="Download Vitaway From Google Play Store" />
                                    </a>
                                </div>
                                <p class="max-w-xs text-xs text-gray-600 sm:text-sm sm:max-w-sm">
                                    Take charge of your well-being with convenience and comprehensive care at your fingertips.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center lg:pl-8 ml-20">
                            <div class="flex flex-col items-end px-3">
                                <div class="relative border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[500px] w-[250px] shadow-xl">
                                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                    <div class="rounded-[2rem] ml-2 mt-2 mb-2 overflow-hidden w-[94%] h-[97%] bg-white dark:bg-gray-800">
                                        <img src="/images/blood-pressure.png" class="dark:hidden" alt="Vitaway Blood Pressure Dashboard Screen">
                                        <img src="/images/blood-pressure.png" class="hidden dark:block" alt="Vitaway Blood Pressure Dashboard Screen">
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="relative border-gray-800 pt-[13px] dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                                        <img src="/images/Categories.png" class="dark:hidden w-[272px] h-[572px]" alt="Vitaway client Dashboard Screen">
                                        <img src="/images/Categories.png" class="hidden dark:block w-full h-full" alt="Vitaway client Dashboard Screen">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end px-3">
                                <div class="relative border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[500px] w-[250px] shadow-xl">
                                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                    <div class="rounded-[2rem] ml-2 mt-2 mb-2 overflow-hidden w-[94%] h-[97%] bg-white dark:bg-gray-800">
                                        <img src="/images/weight-screen.png" class="dark:hidden" alt="Vitaway Weight management Screen">
                                        <img src="/images/weight-screen.png" class="hidden dark:block" alt="Vitaway Weight management Screen">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <x-footer />
@endsection
