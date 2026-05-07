@props([
    'variant' => 'blue',
    'prefix' => 'Dr.',
    'name' => '',
    'imageSrc' => 'https://picsum.photos/seed/picsum/345/600',
])

@php
    $schemes = [
        'blue' => [
            'border' => 'border-[#81B6FF]',
            'overlayBurn' =>
                'absolute inset-0 bg-[#81B6FF]/20 mix-blend-color-burn transition-opacity duration-500 group-hover:opacity-0',
            'overlayHover1' =>
                'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#030A15]/70 mix-blend-soft-light',
            'overlayHover2' =>
                'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#92A8CC]/72 mix-blend-multiply',
        ],
    ];
    $scheme = $schemes[$variant] ?? $schemes['blue'];
@endphp

<div
    {{ $attributes->merge([
        'class' =>
            'group snap-start snap-always flex flex-col w-full max-w-[270px] min-h-[465px] md:max-w-[345px] md:min-h-[600px] p-5 rounded-[5px] relative overflow-hidden cursor-pointer',
    ]) }}>
    <div class="absolute inset-0 bg-[lightgray]">
        @if ($imageSrc)
            <img class="w-full h-full object-cover object-center transition-transform duration-700"
                src="{{ $imageSrc }}">
        @endif

        <div class="absolute inset-0 bg-gradient-to-b from-white to-white/0 to-[50%]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#142A4B]/0 to-[#0F192B]/85"></div>

        <div class="{{ $scheme['overlayBurn'] }}"></div>
        <div class="{{ $scheme['overlayHover1'] }}"></div>
        <div class="{{ $scheme['overlayHover2'] }}"></div>
    </div>

    <div class="flex flex-col relative {{ $scheme['border'] }} border rounded-[5px] size-full grow justify-end">
        <div class="p-5 border-b {{ $scheme['border'] }}">
            @if ($prefix)
                <x-paragraph class="text-white mb-0!">{{ $prefix }}</x-paragraph>
            @endif
            @if ($name)
                <x-heading class="text-white! text-[44px]! pb-2 italic! max-w-[200px]">
                    {{ $name }}
                </x-heading>
            @endif
        </div>
    </div>
</div>
