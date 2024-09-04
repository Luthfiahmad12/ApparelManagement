<x-app-layout title="Materials">
    <div>
        <h2 class="mb-2 text-3xl font-semibold">Data Meterial/Bahan</h2>
        <div class="mb-8">
            <a href="{{ route('materials.create') }}"
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

        <div
            class="w-full overflow-hidden overflow-x-auto border rounded-md border-neutral-300 dark:border-neutral-700">
            <table class="w-full text-sm text-left text-neutral-600 dark:text-neutral-300">
                <thead
                    class="text-sm border-b border-neutral-300 bg-neutral-50 text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                    <tr>
                        <th scope="col" class="p-4">No</th>
                        <th scope="col" class="p-4">Nama</th>
                        <th scope="col" class="p-4">Type Bahan</th>
                        <th scope="col" class="flex justify-end p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                    @foreach ($materials as $index => $material)
                        <tr>
                            <td class="p-4">{{ $index + 1 }}</td>
                            <td class="p-4">{{ $material->name }}</td>
                            <td class="p-4">{{ $material->type }}</td>
                            <td class="flex justify-end p-4">
                                <x-link href="{{ route('materials.edit', $material->id) }}">
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
                                <x-danger-button class="ms-2" data-id="{{ $material->id }}"
                                    data-name="{{ $material->name }}" onclick="openModal(this)">
                                    Hapus
                                </x-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <x-modal id="deleteModal">
            <div class="text-center md:p-5">
                <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                    Apakah anda yakin ingin hapus material <span id="name" class="text-lg font-bold"></span>?
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

                const formAction = "{{ route('materials.destroy', '__ID') }}".replace('__ID', id);
                document.getElementById('formDelete').action = formAction;
            }

            function hideModal(modalId) {
                document.getElementById(modalId).close();
            }
        </script>
    @endpush
</x-app-layout>
