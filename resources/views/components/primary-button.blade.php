<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-medium tracking-wide text-center transition bg-black rounded-md cursor-pointer whitespace-nowrap text-neutral-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-white dark:text-black dark:focus-visible:outline-white capitalize']) }}>
    @if (isset($icon))
        {{ $icon }}
    @endif
    {{ $slot }}
</button>
