<x-auth-layout>
    <div class="flex justify-center flex-1 max-w-screen-xl m-0 bg-white shadow sm:m-20 sm:rounded-lg">
        <div class="p-6 lg:w-1/2 xl:w-5/12 sm:p-12">
            <div>
                <img src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png"
                    class="w-32 mx-auto" />
            </div>
            <div class="flex flex-col items-center mt-12">
                <h1 class="text-2xl font-extrabold xl:text-3xl">
                    Log In
                </h1>
                @if ($errors->has('throttle'))
                    <div class="mt-2 relative w-full overflow-hidden rounded-md border border-amber-500 bg-white text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300"
                        role="alert">
                        <div class="flex w-full items-center gap-2 bg-amber-500/10 p-2">
                            <div class="bg-amber-500/15 text-amber-500 rounded-full p-1" aria-hidden="true">
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
