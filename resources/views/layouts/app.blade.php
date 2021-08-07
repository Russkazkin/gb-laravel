<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 text-gray-800 antialiased font-sans">
<div id="app" class="flex flex-col min-h-screen">
    <header>
        <div class="container items-center">
            <div class="text-blueGray-700 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
                <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
                    <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                        <div class="inline-flex items-center">
                            <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                            </div>
                            <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> wickedblocks </h2>
                        </div>
                    </a>
                    <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
                        <ul class="items-center inline-block list-none lg:inline-flex">
                            <li>
                                <a href="{{ route('category.index') }}" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Категории</a>
                            </li>
                            <li>
                                <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Services</a>
                            </li>
                            <li>
                                <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Now</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Button </button>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-grow">
        @yield('content')
    </main>
    <div class="container items-center">
        <footer class="text-blueGray-700 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
            <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
                <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                    <div class="inline-flex items-center">
                        <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                        </div>
                        <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> wickedblocks </h2>
                    </div>
                </a>
                <nav class="flex flex-wrap items-center justify-center text-base lg:mr-auto lg:border-l lg:pl-8">
                    <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-900">Pricing</a>
                    <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-900">Contact</a>
                    <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-900">Services</a>
                    <a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black hover:bg-blueGray-900">Now</a>
                </nav>
                <span class="inline-flex justify-center mt-2 mr-2 sm:ml-auto sm:mt-0 sm:justify-start">
                  <a class="text-blue-500 hover:text-black">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-blue-500 hover:text-black">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                      </path>
                    </svg>
                  </a>
                  <a class="ml-3 text-blue-500 hover:text-black">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-blue-500 hover:text-black">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                      <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                      </path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </a>
                </span>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
