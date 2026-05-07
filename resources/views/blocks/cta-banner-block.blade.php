<section
    {{ $attributes->merge([
        'id' => 'cta-banner',
        'class' => 'relative isolate overflow-hidden bg-[#92A8CC] py-4',
    ]) }}>
    <div class="pointer-events-none absolute inset-0 z-0 overflow-hidden" aria-hidden="true">
        <div
            class="absolute top-1/2 h-[2323px] w-[2323px] max-w-none rounded-[2323px] bg-[#1B365E] opacity-[0.62] blur-[279.75px] lg:top-[-309px] lg:right-[489px] user-select-none pointer-events-none">
        </div>
    </div>

    <div class="relative z-10 border-y border-[#FFFFFF]/50">
        <div class="max-w-[1280px] mx-auto px-5 pt-16 pb-16 text-center lg:px-10 lg:pt-20 lg:pb-20">
            @if ($title)
                <x-heading asChild class="pb-4 text-white! inverse">
                    {!! $title !!}
                </x-heading>
            @endif

            @if ($subtitle)
                <x-paragraph class="pb-5 text-center text-white">
                    {!! $subtitle !!}
                </x-paragraph>
            @endif


            <x-button variant="dark" asChild class="w-full lg:w-auto">
                <a href="{{ $button_link }}" target="_blank" class="no-underline!">
                    {{ $button_text }}
                    <x-icons.whatsapp />
                </a>
            </x-button>
        </div>
    </div>
</section>
