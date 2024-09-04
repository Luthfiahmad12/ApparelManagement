<x-app-layout title="Create Material/Bahan">
    <div>
        <h2 class="mb-2 text-3xl font-semibold">Tambah Data Bahan</h2>
        <div class="mb-8">
            <a href="{{ route('materials.index') }}">
                <x-primary-button type="button">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                    </x-slot>
                    Kembali
                </x-primary-button>
            </a>
        </div>

        <div class="p-6 bg-white rounded-md shadow-md dark:bg-neutral-800">
            <form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="email" name="name" type="text" value="{{ old('name') }}"
                        class="block w-full mt-1" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="type" :value="__('Type Bahan')" />
                    <x-text-input id="type" name="type" type="text" value="{{ old('type') }}"
                        class="block w-full mt-1" />
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>
                <div class="flex justify-center mt-4">
                    <x-primary-button class="block w-1/4">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
