<nav id="page-sidebar"
    class="fixed bottom-0 start-0 top-0 z-50 flex h-full w-full flex-col border-gray-200 bg-white transition-transform duration-300 ease-out dark:border-gray-700/75 dark:bg-gray-900 lg:w-64 ltr:border-r rtl:border-l"
    x-bind:class="{
        'ltr:-translate-x-full rtl:translate-x-full': !mobileSidebarOpen,
        'translate-x-0': mobileSidebarOpen,
        'ltr:lg:-translate-x-full rtl:lg:translate-x-full': !desktopSidebarOpen,
        'ltr:lg:translate-x-0 rtl:lg:translate-x-0': desktopSidebarOpen,
    }"
    aria-label="Main Sidebar Navigation">
    <!-- Sidebar Header -->
    <div class="flex h-16 w-full flex-none items-center justify-between px-5 shadow-sm">
        <!-- Brand -->
        <a href="javascript:void(0)"
            class="group inline-flex items-center gap-2 font-semibold text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="hi-outline hi-video-camera inline-block h-6 w-6 text-rose-500 transition group-hover:scale-110">
                <path stroke-linecap="round"
                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <span>TailTube</span>
        </a>
        <!-- END Brand -->

        <!-- Extra Actions -->
        <div class="flex items-center">
            <!-- Dark Mode Toggle -->
            <button type="button"
                class="inline-flex items-center justify-center leading-5 text-gray-800 hover:text-gray-600 focus:outline-none active:text-gray-800 dark:text-gray-200 dark:hover:text-gray-300 dark:active:text-gray-200"
                x-on:click="darkMode = !darkMode">
                <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="hi-outline hi-moon inline-block h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                </svg>
                <svg x-cloak x-show="darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="hi-outline hi-sun inline-block h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                </svg>
            </button>
            <!-- END Dark Mode Toggle -->

            <!-- Close Sidebar on Mobile -->
            <button type="button"
                class="ms-3 inline-flex items-center justify-center leading-5 text-gray-800 hover:text-rose-600 focus:outline-none active:text-rose-800 dark:text-gray-200 dark:hover:text-rose-300 dark:active:text-rose-200 lg:hidden"
                x-on:click="mobileSidebarOpen = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="hi-solid hi-x-mark inline-block h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- END Close Sidebar on Mobile -->
        </div>
        <!-- END Extra Actions -->
    </div>
    <!-- END Sidebar Header -->

    <!-- Sidebar Navigation -->
    <div class="overflow-y-auto">
        <div class="w-full py-4">
            <nav class="space-y-1">
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 border-r-4 border-rose-400 bg-rose-50 px-5 py-0.5 text-sm font-medium text-rose-900 dark:bg-rose-800 dark:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hi-outline hi-home inline-block h-6 w-6 text-rose-600 dark:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </span>
                    <span class="grow py-2">Home</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-rose-800 dark:hover:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hi-outline hi-globe-americas inline-block h-6 w-6 text-gray-400 group-hover:text-rose-600 dark:group-hover:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                        </svg>
                    </span>
                    <span class="grow py-2">Explore</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-rose-800 dark:hover:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hi-outline hi-clipboard-list inline-block h-6 w-6 text-gray-400 group-hover:text-rose-600 dark:group-hover:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Subscriptions</span>
                </a>
                <div class="px-5 pb-2 pt-6 text-xs font-medium uppercase tracking-wider text-gray-400">
                    management
                </div>
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-rose-800 dark:hover:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 inline-block text-gray-400 group-hover:text-rose-600 dark:group-hover:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                        </svg>

                    </span>
                    <span class="grow py-2">Products</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-rose-800 dark:hover:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-play-circle inline-block h-6 w-6 text-gray-400 group-hover:text-rose-600 dark:group-hover:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Your Videos</span>
                    <span
                        class="rounded-full bg-rose-400/10 px-2 py-1 text-xs font-medium leading-4 text-rose-700 transition dark:bg-rose-400/20 dark:text-rose-200 dark:group-hover:bg-rose-400/30">26</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-rose-800 dark:hover:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-clock inline-block h-6 w-6 text-gray-400 group-hover:text-rose-600 dark:group-hover:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Watch Later</span>
                    <span
                        class="rounded-full bg-rose-400/10 px-2 py-1 text-xs font-medium leading-4 text-rose-700 transition dark:bg-rose-400/20 dark:text-rose-200 dark:group-hover:bg-rose-400/30">12</span>
                </a>
                <a href="javascript:void(0)"
                    class="group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 active:bg-gray-50 dark:text-gray-200 dark:hover:bg-rose-800 dark:hover:text-rose-200">
                    <span class="flex flex-none items-center opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="hi-outline hi-heart inline-block h-6 w-6 text-gray-400 group-hover:text-rose-600 dark:group-hover:text-rose-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </span>
                    <span class="grow py-2">Liked Videos</span>
                    <span
                        class="rounded-full bg-rose-400/10 px-2 py-1 text-xs font-medium leading-4 text-rose-700 transition dark:bg-rose-400/20 dark:text-rose-200 dark:group-hover:bg-rose-400/30">39</span>
                </a>

            </nav>
        </div>
    </div>
    <!-- END Sidebar Navigation -->
</nav>
