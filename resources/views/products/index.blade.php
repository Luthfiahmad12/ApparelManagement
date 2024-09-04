<x-app-layout title="Products">
    <div>
        <h2 class="mb-2 text-3xl font-semibold">Data Produk</h2>
        <div class="mb-8">
            <a href="{{ route('products.create') }}"
                class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-medium tracking-wide text-center transition bg-black rounded-md cursor-pointer whitespace-nowrap text-neutral-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-white dark:text-black dark:focus-visible:outline-white">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="size-5 fill-neutral-100 dark:fill-black" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                        clip-rule="evenodd" />
                </svg>
                Tambah Data
            </a>
        </div>

        <div class="mb-8">
            <form class="flex flex-col gap-2 sm:flex-row">
                <input type="text" name="search" placeholder="Search products..."
                    class="flex-grow px-4 py-2 text-sm border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <x-primary-button class="px-8">
                    Cari
                </x-primary-button>
            </form>
        </div>

        @if (request('search') ?? null)
            <h3 class="mb-8 font-medium text-md text-slate-800">
                Hasil pencarian : <span class="font-bold">{{ request('search') }}</span>
            </h3>
        @endif

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
            <!-- Projects Card -->
            @foreach ($products as $product)
                <article
                    class="flex flex-col max-w-sm overflow-hidden border rounded-md group border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                    <!-- Image -->
                    <div class="relative overflow-hidden h-44 md:h-64">
                        <img src="{{ asset('storage/' . $product->image) }}"
                            class="absolute inset-0 object-contain w-full h-full transition-transform duration-700 ease-out group-hover:scale-105"
                            alt="CASIO G-SHOCK GA2100, Black face, black bands" />
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col gap-4 p-6">
                        <div class="flex flex-col justify-between gap-4 md:flex-row md:gap-12">
                            <div class="flex flex-col">
                                <h3 class="text-lg font-bold uppercase text-neutral-900 dark:text-white"
                                    aria-describedby="productDescription">
                                    {{ $product->name }}
                                </h3>
                                <span class="flex items-center gap-1">
                                    <span class="sr-only">Price</span>
                                    {{ formatRupiah($product->price) }}
                                </span>
                            </div>
                            <a href="javascript:void(0)" data-id="{{ $product->id }}"
                                data-desc="{{ $product->description }}" onclick="showDetail(this)">
                                <span class="text-sm text-blue-500 hover:underline">
                                    Detail
                                </span>
                            </a>
                        </div>
                        <p id="productDescription" class="text-sm text-neutral-700 dark:text-neutral-300">
                            {!! Str::limit($product->description, 50) !!}
                        </p>
                        <div class="flex flex-col gap-2 sm:flex-row">
                            <x-link href="{{ route('products.edit', $product->id) }}"
                                class="flex items-center justify-center flex-1 gap-2 px-4 py-2">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </x-slot>
                                Edit
                            </x-link>

                            <x-danger-button type="button"
                                class="flex items-center justify-center flex-1 gap-2 px-4 py-2"
                                data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                                onclick="openModal(this)">
                                <x-slot name="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                            d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </x-slot>
                                Hapus
                            </x-danger-button>

                        </div>
                    </div>
                </article>
            @endforeach

            <x-modal id="deleteModal">
                <div class="text-center md:p-5">
                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        Apakah anda yakin ingin hapus produk <span id="name" class="text-lg font-bold"></span>?
                    </h3>
                    <form id="formDelete" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-danger-button class="px-5 py-2.5">
                            Hapus
                        </x-danger-button>
                        <x-primary-button type="button" class="px-5 py-2.5 ms-2" onclick="hideModal('deleteModal')">
                            Tidak
                        </x-primary-button>
                    </form>
                </div>
            </x-modal>

            <x-modal id="detailModal">
                <article class="prose">
                    <span id="desc"></span>
                </article>
                <div class="mt-4 text-center">
                    <x-primary-button type="button" class="px-5 py-2.5 ms-2" onclick="hideModal('detailModal')">
                        Tutup
                    </x-primary-button>
                </div>
            </x-modal>
        </div>
    </div>

    @push('scripts')
        <script>
            function openModal(element) {
                const id = element.getAttribute('data-id');
                const name = element.getAttribute('data-name');
                // console.log(id, name);

                const nameElement = document.getElementById('name');
                nameElement.textContent = name;

                const modal = document.getElementById('deleteModal');
                modal.showModal();

                const formAction = "{{ route('products.destroy', '__ID') }}".replace('__ID', id);
                document.getElementById('formDelete').action = formAction;
            }

            function showDetail(element) {
                const id = element.getAttribute('data-id');
                const desc = element.getAttribute('data-desc');
                console.log(desc);

                const modal = document.getElementById('detailModal');
                modal.showModal();

                const descElement = document.getElementById('desc');
                // descElement.textContent = desc;
                descElement.innerHTML = desc;
            }

            function hideModal(modalId) {
                document.getElementById(modalId).close();
            }
        </script>
    @endpush
</x-app-layout>
