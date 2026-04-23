@props([
    'type' => 'button',
    'variant' => 'blue'
])

@php
$base = 'inline-flex gap-3 py-4 px-8 rounded-[5px] cursor-pointer text-[14px] font-normal leading-none tracking-[4.2px] uppercase transition ease-in-out duration-300 box-border';

$class = match ($variant) {
    'outline' => 'border-2 border-[#2E436A] border-solid text-[#92A8CC] hover:border-transparent hover:bg-[#324870]/39',
    'blue' => 'border-2 border-transparent border-solid bg-[#324870]/39 hover:border-[#2E436A] text-[#92A8CC]',
    'dark' => 'border-2 border-transparent border-solid bg-[#030A15] text-[#92A8CC] hover:border-[#030A15] hover:bg-transparent',
};
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "{$base} {$class}"]) }}>
    {{ $slot }}
</button>