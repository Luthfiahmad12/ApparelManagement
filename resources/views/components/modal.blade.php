@props(['id' => 'modal'])

<dialog id="{{ $id }}" class="modal">
    <div class="modal-box">
        {{ $slot }}
    </div>
    {{-- <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form> --}}
    <form method="dialog" class="modal-top">
        <button>close</button>
    </form>
</dialog>
