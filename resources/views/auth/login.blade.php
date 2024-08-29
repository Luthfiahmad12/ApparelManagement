<x-auth-layout>
    <div class="flex justify-center flex-1 max-w-screen-xl m-0 bg-white shadow sm:m-20 sm:rounded-lg">
        <div class="p-6 lg:w-1/2 xl:w-5/12 sm:p-12">
            <div>
                <svg class="mx-auto size-12" viewBox="0 0 128 128">
                    <path fill="#f0513f"
                        d="M27.271.11c-.2.078-5.82 3.28-12.487 7.112-8.078 4.644-12.227 7.09-12.449 7.32-.19.225-.34.482-.438.76-.167.564-.179 82.985-.01 83.578.061.23.26.568.44.754.436.46 48.664 28.19 49.25 28.324.272.065.577.054.88-.03.658-.165 48.76-27.834 49.188-28.286.175-.195.375-.532.44-.761.084-.273.115-4.58.115-13.655v-13.26l11.726-6.735c11.056-6.357 11.733-6.755 12.017-7.191l.29-.47V43.287c0-15.548.03-14.673-.585-15.235-.165-.146-5.798-3.433-12.53-7.31L100.89 13.71h-1.359l-11.963 6.87c-6.586 3.788-12.184 7.027-12.457 7.203-.272.18-.597.512-.73.753l-.242.417-.054 13.455-.048 13.46-9.879 5.69c-5.434 3.124-9.957 5.71-10.053 5.734-.175.049-.187-1.232-.187-25.966V15.293l-.26-.447c-.326-.545 1.136.324-13.544-8.114C27.803-.348 28.098-.2 27.27.11zm11.317 10.307c5.15 2.955 9.364 5.4 9.364 5.43 0 .031-4.516 2.641-10.035 5.813l-10.041 5.765-10.023-5.764c-5.507-3.173-10.02-5.783-10.02-5.814 0-.03 4.505-2.64 10.013-5.805l9.999-5.752.69.376c3.357 1.907 6.708 3.824 10.053 5.751zm71.668 13.261c5.422 3.122 9.908 5.702 9.95 5.744.114.103-19.774 11.535-20.046 11.523-.272-.008-19.915-11.335-19.907-11.473.01-.157 19.773-11.527 19.973-11.496.091.022 4.607 2.59 10.03 5.702zM16.3 25.328l9.558 5.503.055 27.247.05 27.252.233.368c.122.194.352.459.52.581.158.115 5.477 3.146 11.818 6.724l11.52 6.506v11.527c0 6.326-.043 11.516-.097 11.516-.041 0-10-5.699-22.124-12.676L5.793 97.201l-.03-38.966-.019-38.954.49.271c.283.15 4.807 2.748 10.065 5.775zm33.754 19.18v25.109l-.387.253c-.525.332-19.667 11.335-19.732 11.335-.03 0-.054-11.336-.054-25.193l.012-25.182 10-5.752c5.499-3.165 10.034-5.733 10.088-5.714.039.024.073 11.34.073 25.144zm38.15-5.775 10.023 5.763V55.92c0 10.838-.011 11.42-.176 11.357-.107-.041-4.642-2.64-10.083-5.774l-9.91-5.69v-11.42c0-6.287.032-11.424.062-11.424.043 0 4.577 2.592 10.084 5.764zm34.164 5.587c0 6.254-.042 11.412-.084 11.462-.072.115-19.896 11.538-20.022 11.538-.031 0-.062-5.135-.062-11.423v-11.42l10-5.756c5.507-3.16 10.042-5.752 10.084-5.752.053 0 .084 5.105.084 11.351zM95.993 70.933 52.005 96.04 32.056 84.693S76 59.277 76.176 59.343zm2.215 14.827-.034 11.442-22.028 12.676c-12.12 6.976-22.082 12.675-22.132 12.675-.053 0-.095-4.658-.095-11.516V99.51l22.08-12.592c12.132-6.923 22.101-12.59 22.154-12.602.043 0 .062 5.148.054 11.443z">
                    </path>
                </svg>
            </div>
            <div class="flex flex-col items-center mt-12">
                <h1 class="text-2xl font-extrabold xl:text-3xl">
                    Log In
                </h1>
                @if ($errors->has('throttle'))
                    <div class="relative w-full mt-2 overflow-hidden bg-white border rounded-md border-amber-500 text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300"
                        role="alert">
                        <div class="flex items-center w-full gap-2 p-2 bg-amber-500/10">
                            <div class="p-1 rounded-full bg-amber-500/15 text-amber-500" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-6" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-2">
                                <h3 class="text-sm font-semibold text-amber-500">Too many login attempts!!</h3>
                                <p class="text-xs font-medium sm:text-sm">Please try again in
                                    {{ $errors->first('seconds') }} seconds.</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="flex-1 w-full mt-8">
                    <div class="max-w-xs mx-auto">
                        <form action="{{ route('postLogin') }}" method="POST">
                            @csrf
                            <input type="email" name="email"
                                class="w-full px-5 py-3 rounded-lg font-medium bg-white border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-gray-100 @error('email') border-red-400 @enderror"
                                placeholder="Email" value="{{ old('email') }}" />
                            @error('email')
                                <span class="text-xs text-red-400">{{ $message }}</span>
                            @enderror
                            <input
                                class="w-full px-5 py-3 rounded-lg font-medium bg-white border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-gray-100 mt-5  @error('password') border-red-400 @enderror"
                                type="password" name="password" placeholder="Password" />
                            @error('password')
                                <span class="text-xs text-red-400">{{ $message }}</span>
                            @enderror
                            <button type="submit" class="w-full mt-5 btn btn-outline btn-primary">
                                Submit
                            </button>
                        </form>
                        <p class="mt-6 text-xs text-center text-gray-600">
                            I agree to abide by templatana's
                            <a href="#" class="border-b border-gray-500 border-dotted">
                                Terms of Service
                            </a>
                            and its
                            <a href="#" class="border-b border-gray-500 border-dotted">
                                Privacy Policy
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 hidden text-center bg-indigo-100 lg:flex">
            <div class="flex items-center justify-center w-full m-12 xl:m-16">
                <div class="size-80">
                    <x-auth-logo />
                </div>
            </div>
        </div>

    </div>
</x-auth-layout>
