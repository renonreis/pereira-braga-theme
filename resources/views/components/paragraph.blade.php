@props([
    'as' => 'p',
    'asChild' => false,
])

@php
$base = "font-['Montserrat'] md:text-[19px] font-style-normal font-weight-normal leading-[35px]";
$mergedAttributes = $attributes->merge(['class' => $base]);
@endphp

@if($asChild)
    <x-internal.slot :merged-attributes="$mergedAttributes">
        {{ $slot }}
    </x-internal.slot>
@else
    <{{ $as }} {{ $mergedAttributes }}>
        {{ $slot }}
    </{{ $as }}>
@endif
