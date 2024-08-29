<x-app-layout title="Create Products">
    <div>
        <h2 class="mb-2 text-3xl font-semibold">Tambah Produk</h2>
        <div class="mb-8">
            <a href="{{ route('products.index') }}">
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
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="email" name="name" type="text" value="{{ old('name') }}"
                        class="block w-full mt-1" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="price" :value="__('Harga')" />
                    <x-text-input id="price" name="price" type="text" value="{{ old('price') }}"
                        class="block w-full mt-1" />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="image" :value="__('Gambar')" />
                    <div
                        class="flex flex-col items-center justify-center w-full gap-2 p-4 border border-dashed rounded-md border-neutral-300 text-neutral-600 dark:border-neutral-700 dark:text-neutral-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                            fill="currentColor" class="w-12 h-12 opacity-75">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6 6 0 0 0-5.98 6.496A5.25 5.25 0 0 0 6.75 20.25H18a4.5 4.5 0 0 0 2.206-8.423 3.75 3.75 0 0 0-4.133-4.303A6.001 6.001 0 0 0 10.5 3.75Zm2.03 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v4.94a.75.75 0 0 0 1.5 0v-4.94l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="group">
                            <label for="fileInputDragDrop"
                                class="font-medium text-black cursor-pointer group-focus-within:underline dark:text-white">
                                <input id="fileInputDragDrop" type="file" name="image" class="sr-only"
                                    aria-describedby="validFileFormats" onchange="handleFileChange(event)" />
                                <span class="hover:underline">Click to upload</span>
                            </label>
                        </div>
                        <small id="validFileFormats">PNG, JPG, WebP - Max 5MB</small>
                    </div>
                    <div id="uploadedFiles" class="mt-4"></div>

                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="description" name="description" :value="__('Deskripsi')" />
                    <textarea id="tinymce" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="flex justify-center mt-4">
                    <x-primary-button class="block w-1/4">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            function handleFileChange(event) {
                const uploadedFiles = document.getElementById('uploadedFiles');
                uploadedFiles.innerHTML = '';

                const files = event.target.files;
                for (const file of files) {
                    const fileElement = document.createElement('div');
                    fileElement.classList.add('flex', 'items-center', 'justify-between', 'p-2', 'border', 'border-neutral-300',
                        'rounded-md', 'dark:border-neutral-700');
                    fileElement.innerHTML = `
                <span class="text-sm text-neutral-600 dark:text-neutral-300">${file.name}</span>
                <button class="px-4 py-2 text-sm font-medium tracking-wide text-center text-white transition bg-red-600 rounded-md cursor-pointer whitespace-nowrap hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500" onclick="removeFile(this)">Remove</button>
            `;
                    uploadedFiles.appendChild(fileElement);
                }
            }

            function removeFile(button) {
                const fileElement = button.parentElement;
                fileElement.remove();
            }
        </script>
    @endpush
</x-app-layout>
