@props(['active'])

@php
    $classes = ($active ?? false)
                ? "text-primary cursor-default sm:-my-px sm:ml-10 ml-2 font-comic_sans_ms text-title font-bold justify-center items-center"
                : "hidden";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
