@php
    $cards = is_array($cards ?? null) ? $cards : [];
@endphp
<section {{ $attributes->merge(['class' => 'bg-[#061125] pt-[93px] lg:pt-[117px] lg:pb-24 pb-12']) }}>
    <div
        class="hero-container grid grid-cols-1 lg:gap-[18px] lg:grid-cols-5 max-w-[1280px] mx-auto px-5 lg:px-10 lg:pt-24">
        <div
            class="absolute w-[732px] h-[732px] rounded-full bg-[#1B365E] blur-[279.75px] top-[-50%] right-0 lg:left-0 user-select-none pointer-events-none">
        </div>

        <div class="hero-content relative flex justify-center items-center col-span-2">
            <div class="text-center lg:text-left py-12">
                @if ($title)
                    <x-heading asChild class="text-white!">{!! $title !!}</x-heading>
                @endif
                @if ($subtitle)
                    <x-paragraph asChild class="hero-subtitle text-[#92A8CC] pt-5 pb-3">
                        {!! $subtitle !!}
                    </x-paragraph>
                @endif
                @if ($suffix)
                    <x-paragraph as="p" class="inline-flex gap-2 items-center hero-suffix text-[#B0BCD0] mb-0">
                        {!! $suffix !!}
                        <x-icons.arrowRight class="rotate-90 lg:rotate-0" />
                    </x-paragraph>
                @endif
            </div>
        </div>

        <div
            class="hero-cards-grid flex flex-nowrap lg:justify-center snap-x snap-mandatory touch-pan-x overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:col-span-3 lg:grid lg:grid-cols-2 gap-5 -mx-5 px-6 scroll-px-5 scroll-smooth">
            @foreach ($cards as $card)
                @php
                    $card = is_array($card) ? $card : [];
                    $button = is_array($card['button'] ?? null) ? $card['button'] : [];
                @endphp
                <x-card-service variant="{{ $card['variant'] }}" title="{{ $card['title'] }}"
                    category="{{ $card['category'] }}" href="{{ $button['url'] }}"
                    imageSrc="{{ $card['image']['url'] }}" buttonText="{{ $button['text'] }}" />
            @endforeach
        </div>
    </div>
</section>
