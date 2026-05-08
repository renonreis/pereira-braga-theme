@props([
    'variant' => 'blue',
    'title' => '',
    'category' => '',
    'href' => '#',
    'imageSrc' => 'https://picsum.photos/seed/picsum/345/600',
    'imageAlt' => '',
    'buttonText' => 'Saiba mais',
])

@php
    $variant = in_array($variant, ['blue', 'red'], true) ? $variant : 'blue';

    $scheme = match ($variant) {
        'blue' => [
            'accent' => '#81B6FF',
            'border' => 'border-[#81B6FF]',
            'overlayBurn' =>
                'absolute inset-0 bg-[#81B6FF]/20 mix-blend-color-burn transition-opacity duration-500 group-hover:opacity-0',
            'overlayHover1' =>
                'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#5575A3]/70 mix-blend-soft-light',
            'overlayHover2' =>
                'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#92A8CC]/72 mix-blend-multiply',
            'linkClass' => 'text-[#81B6FF]! p-5 flex justify-end gap-3.5 w-full',
        ],
        'red' => [
            'accent' => '#FF8183',
            'border' => 'border-[#FF8183]',
            'overlayBurn' =>
                'absolute inset-0 bg-[#FF8183]/20 mix-blend-color-burn transition-opacity duration-500 group-hover:opacity-0',
            'overlayHover1' =>
                'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#E94B4E]/70 mix-blend-soft-light',
            'overlayHover2' =>
                'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#4B2323]/24',
            'linkClass' => 'text-[#FF8183]! p-5 flex justify-end gap-3.5 w-full',
        ],
    };
@endphp

<div
    {{ $attributes->merge([
        'class' =>
            'group flex flex-col items-start min-w-[270px] min-h-[465px] md:min-h-[600px] p-5 rounded-[5px] relative overflow-hidden cursor-pointer',
    ]) }}>
    <div class="absolute inset-0 bg-[lightgray]">
        @if ($imageSrc)
            <img class="w-full h-full object-cover object-center transition-transform duration-700"
                src="{{ $imageSrc }}" alt="{{ $imageAlt }}">
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-white to-white/0 to-[50%]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#142A4B]/0 to-[#0F192B]/85"></div>

        <div class="{{ $scheme['overlayBurn'] }}"></div>

        <div class="{{ $scheme['overlayHover1'] }}"></div>
        <div class="{{ $scheme['overlayHover2'] }}"></div>
    </div>

    <div class="flex flex-col relative {{ $scheme['border'] }} border rounded-[5px] size-full grow justify-end">
        <div class="p-5 border-b {{ $scheme['border'] }}">
            @if ($title)
                <x-heading class="text-white! text-[44px]! pb-2 italic!">
                    {{ $title }}
                </x-heading>
            @endif
            @if ($category)
                <x-paragraph class="text-white">{{ $category }}</x-paragraph>
            @endif
        </div>

        @if ($href)
            <x-link href="{{ $href }}" variant="hero" class="{{ $scheme['linkClass'] }}">
                {{ $buttonText }}
                <x-icons.arrowRightCircle />
            </x-link>
        @endif
    </div>
</div>
