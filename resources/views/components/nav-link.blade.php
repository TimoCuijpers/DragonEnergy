@props(['active'])

@php
$classes = ($active ?? false)
            ? "h-12 font-['arimo'] text-body font-bold inline-flex items-center px-1 lg:px-4 pt-1 border-b-2 border-primary font-medium leading-5 text-primary focus:outline-none transition duration-150 ease-in-out"
            : "h-12 font-['arimo'] text-body font-bold inline-flex items-center px-1 lg:px-4 pt-1 border-b-2 border-transparent font-medium leading-5 text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
