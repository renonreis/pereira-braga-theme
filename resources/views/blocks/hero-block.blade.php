<section {{ $attributes->merge(['class' => 'bg-[#061125] pt-[93px] lg:pt-[117px] lg:pb-24 pb-12']) }}>
    <div
        class="hero-container grid grid-cols-1 lg:gap-[18px] lg:grid-cols-5 max-w-[1280px] mx-auto px-5 lg:px-10 lg:pt-24">
        <div
            class="absolute w-[732px] h-[732px] rounded-full bg-[#1B365E] blur-[279.75px] top-[-50%] right-0 lg:left-0 user-select-none pointer-events-none">
        </div>

        <div class="hero-content relative flex justify-center items-center col-span-2">
            <div class="text-center lg:text-left py-12">
                <x-heading asChild class="text-white!">{!! $title !!}</x-heading>
                <x-paragraph asChild class="hero-subtitle mt-5 text-[#92A8CC] mb-3">
                    {!! $subtitle !!}
                </x-paragraph>
                @if ($cta_link)
                    <x-link href="{{ $cta_link['url'] }}" target="{{ $cta_link['target'] }}"
                        class="user-select-none pointer-events-none">
                        {{ $cta_link['title'] }}
                        <x-icons.arrowRight class="rotate-90 lg:rotate-0" />
                    </x-link>
                @endif
            </div>
        </div>

        <div
            class="hero-cards-grid flex flex-nowrap lg:justify-center snap-x snap-mandatory touch-pan-x overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:col-span-3 lg:grid lg:grid-cols-2 gap-5 -mx-5 px-6 scroll-px-5 scroll-smooth">
            <x-card-service variant="blue" title="Auxílio Acidente" category="INSS" href="#" />
            <x-card-service variant="red" title="Benefício Autista" category="BCP/LOAS" href="#" />
        </div>
    </div>
</section>
