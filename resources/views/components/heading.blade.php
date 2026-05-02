@props([
    'as' => 'h2',
    'asChild' => false,
])

@php
    $base = "font-['Noto_Serif_Display']";

    $class = match ($as) {
        'h1' => 'text-5xl md:text-[64px]',
        'h2' => 'text-4xl md:text-5xl',
        'h3' => 'text-3xl md:text-4xl',
        'h4' => 'text-2xl md:text-3xl',
        'h5' => 'text-xl md:text-2xl',
        'h6' => 'text-lg md:text-xl',
        default => '',
    };
@endphp

@php
    $mergedAttributes = $attributes->merge(['class' => "{$base} {$class}"]);
@endphp

@if ($asChild)
    <x-internal.slot :merged-attributes="$mergedAttributes">
        {{ $slot }}
    </x-internal.slot>
@else
    <{{ $as }} {{ $mergedAttributes }}>
        {{ $slot }}
        </{{ $as }}>
@endif
