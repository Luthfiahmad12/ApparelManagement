<header id="page-header"
    class="fixed end-0 start-0 top-0 z-30 flex h-16 flex-none items-center bg-white shadow-sm transition-all duration-300 ease-out dark:bg-gray-900 lg:ps-64"
    x-bind:class="{ 'lg:ps-64': desktopSidebarOpen }">
    <div class="mx-auto flex w-full max-w-7xl justify-between px-4 lg:px-8">
        <!-- Left Section -->
        <div class="flex items-center">
            <!-- Toggle Sidebar on Mobile -->
            <div class="me-2 lg:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center gap-2 rounded border border-gray-300 bg-white px-3 py-2 font-semibold leading-6 text-gray-800 shadow-sm hover:border-gray-300 hover:bg-gray-100 hover:text-gray-800 hover:shadow focus:outline-none focus:ring focus:ring-gray-500/25 active:border-white active:bg-white active:shadow-none dark:border-gray-700/75 dark:bg-gray-900 dark:text-gray-200 dark:hover:border-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 dark:focus:ring-gray-700 dark:active:border-gray-900 dark:active:bg-gray-900"
                    x-on:click="mobileSidebarOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-menu-alt-1 inline-block h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Mobile -->

            <!-- Toggle Sidebar on Desktop -->
            <div class="hidden lg:block">
                <button type="button"
                    class="inline-flex items-center justify-center gap-2 rounded border border-gray-300 bg-white px-3 py-2 font-semibold leading-6 text-gray-800 shadow-sm hover:border-gray-300 hover:bg-gray-100 hover:text-gray-800 hover:shadow focus:outline-none focus:ring focus:ring-gray-500/25 active:border-white active:bg-white active:shadow-none dark:border-gray-700/75 dark:bg-gray-900 dark:text-gray-200 dark:hover:border-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 dark:focus:ring-gray-700 dark:active:border-gray-900 dark:active:bg-gray-900"
                    x-on:click="desktopSidebarOpen = !desktopSidebarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-menu-alt-1 inline-block h-5 w-5">
                        <path fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Desktop -->
        </div>
        <!-- END Left Section -->

        <!-- Main Section -->
        <div class="flex items-center">
            <!-- Search -->
            {{-- <div class="hidden sm:block">
                            <form onsubmit="return false;">
                                <div class="relative">
                                    <input
                                        class="block w-96 rounded border border-gray-300 py-2 pe-10 text-sm leading-5 focus:border-rose-500 focus:ring focus:ring-rose-500/50 dark:border-gray-700 dark:bg-gray-800 dark:placeholder:text-gray-400 dark:focus:border-rose-400 dark:focus:ring-rose-400"
                                        type="text" id="search" name="search" placeholder="Search.." />
                                    <div
                                        class="pointer-events-none absolute inset-y-0 end-0 my-px me-px flex w-10 items-center justify-center rounded-r text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" class="hi-solid hi-magnifying-glass h-5 w-5">
                                            <path fill-rule="evenodd"
                                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
            <!-- END Search -->

            <!-- Brand -->
            <a href="javascript:void(0)"
                class="group inline-flex items-center gap-2 font-semibold text-gray-800 hover:text-gray-600 sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="hi-outline hi-video-camera inline-block h-6 w-6 text-rose-500 transition group-hover:scale-110">
                    <path stroke-linecap="round"
                        d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </a>
            <!-- END Brand -->
        </div>
        <!-- END Main Section -->

        <!-- Right Section -->
        <div class="flex items-center gap-2">
            <!-- User Dropdown -->
            <div class="relative inline-block">
                <!-- Dropdown Toggle Button -->
                <button type="button"
                    class="inline-flex items-center justify-center rounded border border-gray-300 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 shadow-sm hover:border-gray-300 hover:bg-gray-100 hover:text-gray-800 hover:shadow focus:outline-none focus:ring focus:ring-gray-500/25 active:border-white active:bg-white active:shadow-none dark:border-gray-700/75 dark:bg-gray-900 dark:text-gray-200 dark:hover:border-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 dark:focus:ring-gray-700 dark:active:border-gray-900 dark:active:bg-gray-900"
                    id="tk-dropdown-layouts-user" aria-haspopup="true" x-bind:aria-expanded="userDropdownOpen"
                    x-on:click="userDropdownOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-user-circle inline-block h-5 w-5 sm:hidden">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="hidden sm:inline">{{ auth()->user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="hi-solid hi-chevron-down ms-1 hidden h-5 w-5 opacity-50 sm:inline-block">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- END Dropdown Toggle Button -->

                <!-- Dropdown -->
                <div x-cloak x-show="userDropdownOpen" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75"
                    x-on:click.outside="userDropdownOpen = false" role="menu"
                    aria-labelledby="tk-dropdown-layouts-user"
                    class="z-1 absolute end-0 mt-2 w-48 rounded shadow-xl ltr:origin-top-right rtl:origin-top-left">
                    <div
                        class="divide-y divide-gray-100 rounded bg-white ring-1 ring-black/5 dark:divide-gray-700 dark:bg-gray-900 dark:ring-gray-700">
                        <div class="space-y-1 p-2">
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center gap-2 rounded px-3 py-2 text-sm font-medium text-gray-600 bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                <span>{{ auth()->user()->email }}</span>
                            </a>
                        </div>
                        <div class="space-y-1 p-2">
                            <a role="menuitem" href="javascript:void(0)"
                                class="flex items-center gap-2 rounded px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                <span>Settings</span>
                            </a>
                        </div>
                        <div class="space-y-1 p-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" role="menuitem"
                                    class="flex w-full items-center gap-2 rounded px-3 py-2 text-start text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-700 focus:bg-gray-100 focus:text-gray-700 focus:outline-none dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100 dark:focus:bg-gray-800 dark:focus:text-gray-100">
                                    <span>Sign out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END Dropdown -->
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
</header>
