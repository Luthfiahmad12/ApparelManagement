<x-app-layout title="Dashboard || {{ auth()->user()->name }}">
    <!-- Overview -->
    <div>
        <h2 class="mb-2 text-3xl font-semibold">Overview</h2>
        <h3 class="mb-8 text-sm font-medium text-slate-500">
            Welcome John, everything looks great!
        </h3>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
            <!-- Projects Card -->
            <a href="javascript:void(0)"
                class="flex flex-col rounded-2xl border bg-white hover:border-slate-300 active:border-slate-200">
                <div class="flex w-full grow items-center justify-between p-5 lg:p-6">
                    <dl>
                        <dt class="text-2xl font-bold">4</dt>
                        <dd class="text-slate-600">Projects</dd>
                    </dl>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg class="bi bi-briefcase-fill inline-block h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500 lg:px-6">
                    <p>Currently active</p>
                </div>
            </a>
            <!-- END Projects Card -->

            <!-- Tickets Card -->
            <a href="javascript:void(0)"
                class="flex flex-col rounded-2xl border bg-white hover:border-slate-300 active:border-slate-200">
                <div class="flex w-full grow items-center justify-between p-5 lg:p-6">
                    <dl>
                        <dt class="text-2xl font-bold">20</dt>
                        <dd class="text-slate-600">Tickets</dd>
                    </dl>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg class="bi bi-life-preserver inline-block h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500 lg:px-6">
                    <p>Currently open and pending</p>
                </div>
            </a>
            <!-- END Tickets Card -->

            <!-- Customers Card -->
            <a href="javascript:void(0)"
                class="flex flex-col rounded-2xl border bg-white hover:border-slate-300 active:border-slate-200">
                <div class="flex w-full grow items-center justify-between p-5 lg:p-6">
                    <dl>
                        <dt class="text-2xl font-bold">782</dt>
                        <dd class="text-slate-600">Customers</dd>
                    </dl>
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg class="bi bi-people-fill inline-block h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500 lg:px-6">
                    <p>All active accounts</p>
                </div>
            </a>
            <!-- END Customers Card -->
        </div>
    </div>
    <!-- END Overview -->

    <!-- Projects -->
    <div>
        <h2 class="mb-2 text-3xl font-semibold">Projects</h2>
        <h3 class="mb-8 text-sm font-medium text-slate-500">
            You've completed over
            <span class="font-semibold">200 projects</span> till now, keep
            it up!
        </h3>
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 items-start gap-4 md:grid-cols-2 xl:grid-cols-4">
            <!-- Project #1 -->
            <div class="space-y-4 rounded-xl border p-5">
                <div>
                    <h4 class="mb-1 flex items-center justify-between gap-2 font-semibold">
                        <span>Dashboard Design</span>
                        <a href="javascript:void(0)"
                            class="text-sm font-medium text-blue-600 transition hover:text-blue-700">
                            <svg class="hi-solid hi-external-link inline-block h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </h4>
                    <h5 class="text-sm text-slate-600">
                        Project for
                        <a href="javascript:void(0)"
                            class="font-medium text-blue-600 transition hover:text-blue-700">Jeremy Smith</a>
                    </h5>
                </div>
                <div class="space-y-3">
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-orange-400"></div>
                            <p>Main Layout</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-emerald-400"></div>
                            <p>Dashboard Icons</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-orange-400"></div>
                            <p>Auth Pages</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    class="hi-solid hi-eye inline-block h-5 w-5">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    4
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-emerald-400"></div>
                            <p>Logo Design</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Project #1 -->

            <!-- Project #2 -->
            <div class="space-y-4 rounded-xl border p-5">
                <div>
                    <h4 class="mb-1 flex items-center justify-between gap-2 font-semibold">
                        <span>5 Clean Logos</span>
                        <a href="javascript:void(0)"
                            class="text-sm font-medium text-blue-600 transition hover:text-blue-700">
                            <svg class="hi-solid hi-external-link inline-block h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </h4>
                    <h5 class="text-sm text-slate-600">
                        Project for
                        <a href="javascript:void(0)"
                            class="font-medium text-blue-600 transition hover:text-blue-700">Alex Saunders</a>
                    </h5>
                </div>
                <div class="space-y-3">
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-emerald-400"></div>
                            <p>Exploring concepts</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-orange-400"></div>
                            <p>Main Layout</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-orange-400"></div>
                            <p>Implement designs</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    2
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Project #2 -->

            <!-- Project #3 -->
            <div class="space-y-4 rounded-xl border p-5">
                <div>
                    <h4 class="mb-1 flex items-center justify-between gap-2 font-semibold">
                        <span>SEO Marketing</span>
                        <a href="javascript:void(0)"
                            class="text-sm font-medium text-blue-600 transition hover:text-blue-700">
                            <svg class="hi-solid hi-external-link inline-block h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </h4>
                    <h5 class="text-sm text-slate-600">
                        Project for
                        <a href="javascript:void(0)"
                            class="font-medium text-blue-600 transition hover:text-blue-700">Anna Doe</a>
                    </h5>
                </div>
                <div class="space-y-3">
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-orange-400"></div>
                            <p>Writing posts</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    2
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-emerald-400"></div>
                            <p>Improving website markup</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    6
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-purple-400"></div>
                            <p>Best Practices</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    class="hi-solid hi-eye inline-block h-5 w-5">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    7
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Project #3 -->

            <!-- Project #4 -->
            <div class="space-y-4 rounded-xl border p-5">
                <div>
                    <h4 class="mb-1 flex items-center justify-between gap-2 font-semibold">
                        <span>Mobile App</span>
                        <a href="javascript:void(0)"
                            class="text-sm font-medium text-blue-600 transition hover:text-blue-700">
                            <svg class="hi-solid hi-external-link inline-block h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </h4>
                    <h5 class="text-sm text-slate-600">
                        Project for
                        <a href="javascript:void(0)"
                            class="font-medium text-blue-600 transition hover:text-blue-700">John Smith</a>
                    </h5>
                </div>
                <div class="space-y-3">
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-orange-400"></div>
                            <p>Prototype</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-pink-400"></div>
                            <p>Platforms</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    class="hi-solid hi-eye inline-block h-5 w-5">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    6
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex flex-col rounded bg-slate-50 hover:bg-slate-100 active:bg-slate-50">
                        <div class="space-y-2 p-3 text-sm">
                            <div class="h-1.5 w-8 rounded bg-pink-400"></div>
                            <p>Logo Design</p>
                            <div class="flex items-center gap-2 text-slate-400">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    class="hi-solid hi-eye inline-block h-5 w-5">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div class="inline-flex items-center gap-1.5">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                        class="hi-solid hi-annotation inline-block h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    4
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Project #4 -->
        </div>
        <!-- END Projects Grid -->
    </div>
    <!-- END Projects -->
</x-app-layout>
