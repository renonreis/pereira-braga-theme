@props([
    'to' => 0,
    'from' => 0,
    'prefix' => '',
    'suffix' => '',
    'duration' => 2000,
    'label' => null,
    'labelClass' => 'text-[#061125]',
])

@php
    $base = "font-['Noto_Serif_Display']";
@endphp

<div class="flex flex-col text-center">
    <span data-counter data-counter-from="{{ (int) $from }}" data-counter-to="{{ (int) $to }}"
        data-counter-duration="{{ (int) $duration }}" data-counter-prefix="{{ $prefix }}"
        data-counter-suffix="{{ $suffix }}"
        {{ $attributes->merge(['class' => "{$base} text-[#445C82] text-[100px] leading-[1.36]"]) }}>
        {{ $prefix }}{{ (int) $to }}{{ $suffix }}
    </span>

    @if ($label)
        <x-paragraph as="span" class="{{ $labelClass }}">{{ $label }}</x-paragraph>
    @endif
</div>
