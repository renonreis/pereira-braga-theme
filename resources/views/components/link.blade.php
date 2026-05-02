@props([
    'asChild' => false,
])

@php
    $base =
        'inline-flex items-center gap-2 text-[#B0BCD0] leading-[35px] hover:text-white transition-all duration-300 no-underline!';
    $mergedAttributes = $attributes->merge(['class' => $base]);
@endphp

@if ($asChild)
    <x-internal.slot :merged-attributes="$mergedAttributes">
        {{ $slot }}
    </x-internal.slot>
@else
    <a {{ $mergedAttributes }}>
        {{ $slot }}
    </a>
@endif
