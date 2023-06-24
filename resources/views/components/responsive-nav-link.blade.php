@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-end block w-full pl-3 pr-4 py-2 border-r-4 border-primary text-left text-base font-medium text-primary bg-secondary transition duration-150 ease-in-out'
            : 'text-end block w-full pl-3 pr-4 py-2 border-r-4 border-transparent text-left text-base font-medium text-accent hover:text-secondary hover:bg-primary hover:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
