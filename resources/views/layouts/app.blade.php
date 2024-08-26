<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body x-data="{ mobileSidebarOpen: false, desktopSidebarOpen: true, darkMode: false, userDropdownOpen: false }">
    <div>
        <!-- Page Container -->
        <div id="page-container"
            class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-gray-100 transition-all duration-300 ease-out dark:bg-gray-800 dark:text-gray-200 lg:ps-64"
            x-bind:class="{ 'lg:ps-64': desktopSidebarOpen }">
            <!-- Page Sidebar -->
            @include('partials.sidebar')
            <!-- Page Sidebar -->

            <!-- Page Header -->
            @include('partials.header')
            <!-- END Page Header -->

            <!-- Page Content -->
            <main id="page-content" class="flex max-w-full flex-auto flex-col pt-16">
                <div class="container mx-auto space-y-10 px-4 py-8 lg:space-y-16 lg:px-8 lg:py-12 xl:max-w-7xl">

                    {{ $slot }}

                </div>
            </main>
            <!-- END Page Content -->

            <!-- Page Footer -->
            @include('partials.footer')
            <!-- END Page Footer -->
        </div>
        <!-- END Page Container -->
    </div>
</body>

</html>
