<section
    {{ $attributes->merge([
        'id' => 'cta-banner',
        'class' => 'relative isolate overflow-hidden bg-[#92A8CC] py-4',
    ]) }}>
    <div class="pointer-events-none absolute inset-0 z-0 overflow-hidden" aria-hidden="true">
        {{-- Ellipse from Figma: 2323×2323, #1B365E @ 62%, blur 279.75px; center shifted right --}}
        <div
            class="absolute top-1/2 h-[2323px] w-[2323px] max-w-none rounded-[2323px] bg-[#1B365E] opacity-[0.62] blur-[279.75px] lg:top-[-309px] lg:right-[489px] user-select-none pointer-events-none">
        </div>
    </div>

    <div class="relative z-10 border-y border-[#FFFFFF]/50">
        <div class="max-w-[1280px] mx-auto px-5 pt-16 pb-16 text-center lg:px-10 lg:pt-20 lg:pb-20">
            <x-heading as="h2" class="pb-4 text-white!">
                Você pode ter um benefício e não saber
            </x-heading>
            <x-paragraph class="pb-5 text-center text-white">
                Nossa equipe está pronta para analisar seu caso e te orientar da forma correta.
            </x-paragraph>

            <x-button variant="dark" class="w-full lg:w-auto">
                Fale conosco
                <x-icons.whatsapp />
            </x-button>
        </div>
    </div>
</section>
