@props(['active'])

@php
    $default_classes = '
        flex items-center inline-flex
        p-3 pl-6
        w-full
        font-normal text-base
        transition duration-150 ease-in-out
        text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
        hover:rounded-r-md
        ';
    $classes = ($active ?? false)
                ? 'rounded-none border border-4 border-l-0 border-t-0 border-b-0 border-fnl-500 bg-gray-200/75 dark:bg-gray-700/50'
                : '';
@endphp

<a {{ $attributes->merge(['class' => $default_classes . ' ' . $classes]) }}>
    {{ $slot }}
</a>
