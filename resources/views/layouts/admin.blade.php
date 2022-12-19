<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title-block')</title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- favicons -->
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/jost/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/cormorant_garamond/stylesheet.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/fontawesome-pro/css/fontawesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/line-awesome/css/line-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/slick/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/quilljs/css/quill.bubble.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/quilljs/css/quill.core.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/quilljs/css/quill.snow.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('libs/chosen/chosen.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />


    <script src="{{asset('/js/jquery-1.12.4.js')}}"></script>
    <script src="{{asset('/libs/popper/popper.js')}}"></script>
    <script src="{{asset('/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/libs/slick/slick.min.js')}}"></script>
    <script src="{{asset('/libs/slick/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('/libs/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/libs/quilljs/js/quill.core.js')}}"></script>
    <script src="{{asset('/libs/quilljs/js/quill.js')}}"></script>
    <script src="{{asset('/libs/chosen/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('/libs/waypoints/jquery.waypoints.min.js')}}"></script>


    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body>
<div>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <img class="logo-header-admin" src="{{asset('/images/assets/logo_w.png')}}" alt="">
                </div>
            </div>

            <nav class="mt-10">
                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="{{route('admin.places-live.index')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3">Проживание</span>
                </a>
                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="{{route('admin.routes.index')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3">Маршруты</span>
                </a>
                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="{{route('admin.routes.index')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3">Отзывы</span>
                </a>
                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="{{route('admin.routes.index')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3">Пользователи</span>
                </a>

            </nav>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>

                <div class="flex items-center">
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img class="h-full w-full object-cover"
                                 src="{{asset('/images/avatars/default.jpg')}}"
                                 alt="Your avatar">
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                             style="display: none;"></div>

                        <div x-show="dropdownOpen"
                             class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                             style="display: none;">
                            <a href="{{route('admin.logout')}}"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Выйти</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                @yield('content')
            </main>
        </div>
    </div>
</div>

@yield('map-script')

</body>
</html>
