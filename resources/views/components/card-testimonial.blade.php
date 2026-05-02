@props([
    'variant' => 'google',
    'name' => '',
    'initials' => null,
    'date' => '',
    'rating' => 5,
    'quote' => '',
    'href' => '#',
    'linkLabel' => 'Ver no Google',
    'target' => '_blank',
])

@php
    $variant = in_array($variant, ['google'], true) ? $variant : 'google';
    $rating = max(0, min(5, (int) $rating));

    if ($initials === null && filled($name)) {
        $parts = preg_split('/\s+/', trim($name), -1, PREG_SPLIT_NO_EMPTY);
        $initials = '';
        foreach (array_slice($parts, 0, 2) as $part) {
            $initials .= mb_strtoupper(mb_substr($part, 0, 1));
        }
    }
    $initials = $initials ?? '';

    $linkRel = $target === '_blank' ? 'noopener noreferrer' : null;
@endphp

<div
    {{ $attributes->merge([
        'class' => 'flex flex-col items-start border border-[#2E436A] min-w-[290px] rounded-[5px] p-6 text-[0px]',
    ]) }}>
    @if ($variant === 'google')
        <div class="flex justify-between items-start gap-6 mb-6 w-full">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-4">
                    <div class="flex min-w-[43px] min-h-[43px] items-center justify-center rounded-full bg-[#5584C8]">
                        <x-paragraph class="text-center text-[#B0BCD0]">{{ $initials }}</x-paragraph>
                    </div>
                    <div class="flex flex-col">
                        <x-paragraph class="leading-tight! text-[#B0BCD0]">{{ $name }}</x-paragraph>
                        <x-paragraph class="leading-tight! text-[#92A8CC]">{{ $date }}</x-paragraph>
                    </div>
                </div>
                <div class="flex flex-row">
                    @for ($i = 0; $i < $rating; $i++)
                        <x-icons.start />
                    @endfor
                </div>
            </div>
            <x-icons.google class="hidden md:block" />
        </div>

        <x-paragraph class="mb-4 font-light! text-[16px]! leading-[30px]! text-[#B0BCD0]">
            {{ $quote }}
        </x-paragraph>

        @if ($linkRel)
            <x-link href="{{ $href }}" target="{{ $target }}" rel="{{ $linkRel }}"
                class="font-light! text-[16px]! leading-none! text-[#92A8CC]">
                {{ $linkLabel }}
            </x-link>
        @else
            <x-link href="{{ $href }}" target="{{ $target }}"
                class="font-light! text-[16px]! leading-none! text-[#92A8CC]">
                {{ $linkLabel }}
            </x-link>
        @endif
    @endif
</div>
