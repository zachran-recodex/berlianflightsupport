<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Recodex" />
    <meta name="description" content="Berlian Flight Support" />

    <title>Berlian Flight Support</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header class="bg-transparent absolute w-full z-50 border-b py-4">
        <nav class="container mx-auto flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <img src="{{ asset('images/logo/logo-light.png') }}" alt="logo" class="h-16">
                <div class="">
                    <h1 class="text-2xl font-semibold text-white">Berlian Ground Support</h1>
                    <span class="text-bgs2-400">Elevate Your Aviation Business</span>
                </div>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col md:flex-row md:space-x-8 p-4 md:p-0">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bgs1-950 md:p-0 transition-all duration-300">Company</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bgs1-950 md:p-0 md:w-auto transition-all duration-300">
                            Services
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Ground Handling</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Flight Planning</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Permits</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">In-Flight Catering</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bgs1-950 md:p-0 transition-all duration-300">Gallery</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-bgs1-950 md:p-0 transition-all duration-300">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="#"
                class="bg-bgs2-400 text-white p-3 rounded hover:bg-bgs2-500 transition-all duration-300">Request A
                Quote</a>
        </nav>
    </header>

    {{ $slot }}

    <footer class="bg-gray-800 text-white">
        <div class="py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <!-- Logo Section -->
                    <div class="w-full lg:w-1/4 xl:w-1/3 px-4 mb-6 lg:mb-0">
                        <div class="flex items-center">
                            <img src="assets/images/logo/logo-light.png" alt="logo" class="h-12 w-auto">
                        </div>
                    </div>
                    <!-- Newsletter Section -->
                    <div class="w-full lg:w-3/4 xl:w-2/3 px-4">
                        <div class="bg-gray-700 p-6 rounded-md">
                            <p class="mb-4">Sign up for industry alerts, <br> insights from Equita.</p>
                            <form class="flex">
                                <input type="email" name="email" placeholder="Your Email Address"
                                    class="w-full p-2 rounded-l-md border border-gray-300 focus:outline-none">
                                <button type="submit"
                                    class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-r-md">Sign
                                    Up!</button>
                            </form>
                            <div class="mt-2 text-sm text-gray-300"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Center -->
        <div class="bg-gray-700 py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <!-- About Widget -->
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-6">
                        <h5 class="text-lg font-semibold mb-4">About</h5>
                        <p class="text-sm text-gray-300">Equita is a representative logistics operator providing a full
                            range of services in the sphere of customs cargo and transportation worldwide.</p>
                        <div class="flex mt-4 space-x-3">
                            <a href="#" class="text-white hover:text-primary-500"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white hover:text-primary-500"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white hover:text-primary-500"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <!-- Services Links -->
                    <div class="w-full sm:w-1/2 md:w-1/6 px-4 mb-6">
                        <h5 class="text-lg font-semibold mb-4">Services</h5>
                        <ul class="text-sm text-gray-300 space-y-2">
                            <li><a href="#" class="hover:text-primary-500">Warehouse</a></li>
                            <li><a href="#" class="hover:text-primary-500">Air Freight</a></li>
                            <li><a href="#" class="hover:text-primary-500">Ocean Freight</a></li>
                            <li><a href="#" class="hover:text-primary-500">Road Freight</a></li>
                            <li><a href="#" class="hover:text-primary-500">Supply Chain</a></li>
                            <li><a href="#" class="hover:text-primary-500">Packaging</a></li>
                        </ul>
                    </div>
                    <!-- Industries Links -->
                    <div class="w-full sm:w-1/2 md:w-1/6 px-4 mb-6">
                        <h5 class="text-lg font-semibold mb-4">Industries</h5>
                        <ul class="text-sm text-gray-300 space-y-2">
                            <li><a href="#" class="hover:text-primary-500">Retail & Consumer</a></li>
                            <li><a href="#" class="hover:text-primary-500">Sciences & Healthcare</a></li>
                            <li><a href="#" class="hover:text-primary-500">Industrial & Chemical</a></li>
                            <li><a href="#" class="hover:text-primary-500">Power Generation</a></li>
                            <li><a href="#" class="hover:text-primary-500">Food & Beverage</a></li>
                            <li><a href="#" class="hover:text-primary-500">Oil & Gas</a></li>
                        </ul>
                    </div>
                    <!-- Contact Info -->
                    <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-6">
                        <h5 class="text-lg font-semibold mb-4">Quick Contact</h5>
                        <p class="text-sm text-gray-300 mb-4">If you have any questions or need help, feel free to
                            contact with our team.</p>
                        <ul class="text-sm text-gray-300 space-y-2">
                            <li><a href="tel:+01061245741" class="flex items-center hover:text-primary-500"><i
                                        class="fas fa-phone-alt mr-2"></i>01061245741</a></li>
                            <li><a href="#" class="flex items-center hover:text-primary-500"><i
                                        class="fas fa-map-marker-alt mr-2"></i>2307 Beverley Rd, Brooklyn, NY 11226</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="bg-gray-800 py-4">
            <div class="container mx-auto px-4">
                <p class="text-center text-sm text-gray-400">&copy; Equita, With Love by <a
                        href="https://1.envato.market/kP9BV" class="text-primary-500 hover:underline">Zytheme.com</a>
                </p>
            </div>
        </div>
    </footer>

    <div class="fixed bottom-4 right-4 bg-primary-500 text-white rounded-full p-2 cursor-pointer hover:bg-primary-600"
        id="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>

</body>

</html>
