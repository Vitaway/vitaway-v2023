@extends('layouts.admin')

@section('content')
    <div class="relative py-16 bg-gradient-to-br  dark:bg-gray-900">
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl  shadow-xl dark:bg-gray-700">

                    <div class="p-6 sm:p-16">
                        <div class="space-y-4 text-center flex flex-col justify-center items-center">
                            <x-application-logo />
                            <h2 class="mb-8 text-2xl font-anek text-cyan-900 font-bold dark:text-white" style="font-size: 25px; line-height: 30px">
                                Login To Admin Dashboard
                            </h2>
                        </div>

                        <div class="mt-16 grid space-y-1">
                            <a href="{{ route('init.oauth', ['google']) }}" class="text-white font-anek bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-full text-md px-5 py-2 text-center inline-flex items-center justify-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                                <svg class="mr-2 -ml-1 w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                                <span class="mt-1" style="font-size: 19px">Google Account</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
