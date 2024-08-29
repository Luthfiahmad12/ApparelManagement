<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'cursor-pointer whitespace-nowrap rounded-md bg-red-700 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500 capitalize']) }}>
    @if (isset($icon))
        {{ $icon }}
    @endif
    {{ $slot }}
</button>
