@props([
    'as' => 'h2',
    'asChild' => false,
])

@php
$base = "font-['Noto_Serif_Display']";

$class = match ($as) {
    'h1' => 'text-2xl md:text-[64px]',
    'h2' => 'text-2xl md:text-4xl',
    'h3' => 'text-xl md:text-3xl',
    'h4' => 'text-lg md:text-2xl',
    'h5' => 'text-base md:text-xl',
    'h6' => 'text-base md:text-xl',
    default => '',
};
@endphp

@php
    $mergedAttributes = $attributes->merge(['class' => "{$base} {$class}"]);
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
