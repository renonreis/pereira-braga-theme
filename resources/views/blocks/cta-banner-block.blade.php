<section {{ $attributes->merge(['id' => 'cta-banner', 'class' => 'relative bg-[#92A8CC] py-4']) }}>
    <div class="border-y border-[#FFFFFF]/50">
        <div class="text-center  max-w-[1280px] mx-auto pt-16 pb-16 lg:pt-20 lg:pb-20 px-5 lg:px-10">
            <x-heading as="h2" class="mb-4 text-white!">
                Você pode ter um benefício e não saber
            </x-heading>
            <x-paragraph class="text-white mb-5 text-center">
                Nossa equipe está pronta para analisar seu caso e te orientar da forma correta.
            </x-paragraph>

            <x-button variant="dark" class="w-full lg:w-auto">
                Fale conosco
                <x-icons.whatsapp />
            </x-button>
        </div>
    </div>
</section>
