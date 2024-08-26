@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'group flex items-center gap-2 border-r-4 border-rose-400 bg-rose-50 px-5 py-0.5 text-sm font-medium text-rose-900 dark:bg-rose-800 dark:text-rose-200'
            : 'group flex items-center gap-2 px-5 py-0.5 text-sm font-medium text-gray-700 hover:bg-rose-50 hover:text-rose-900 dark:bg-rose-800 dark:text-rose-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if (isset($icon))
        <div
            class="hi-outline hi-home inline-block h-6 w-6 {{ $active ? 'text-rose-600' : 'text-gray-400' }} group-hover:text-rose-400 dark:text-rose-300">
            {{ $icon }}
        </div>
    @endif

    {{ $slot }}
</a>
