<section
    {{ $attributes->merge(['id' => 'equipe', 'class' => 'relative bg-[#061125] pt-16 pb-16 lg:pt-24 lg:pb-4 overflow-hidden']) }}>
    <div class="max-w-[1280px] mx-auto px-5 lg:px-10">
        <x-heading as="h2" class="mb-8 text-white! text-center">
            Nossa equipe
        </x-heading>
        <x-paragraph class="text-[#92A8CC] mb-14 text-center">
            Uma equipe experiente e comprometida, preparada para analisar o seu caso com atenção, clareza e a
            estratégia
            necessária para buscar o seu direito.
        </x-paragraph>
    </div>

    @php($teamCarouselCount = 9)

    <div class="team-carousel overflow-hidden px-5" data-team-carousel data-team-marquee-seconds="50">
        <div class="team-carousel-track flex w-max flex-nowrap gap-5" data-team-carousel-track>
            @for ($i = 0; $i < $teamCarouselCount; $i++)
                <x-card-team variant="blue" prefix="Dr." name="Gabriel Marinho" class="shrink-0" />
            @endfor
        </div>
    </div>

    <div class="max-w-[1280px] mx-auto px-5 lg:px-10 pt-12 lg:pt-24">
        <x-heading as="h2" class="mb-8 text-white! text-center">
            O que nossos clientes disseram
        </x-heading>
        <x-paragraph class="text-[#92A8CC] mb-14 text-center">
            Veja as avaliações reais de quem já contou com a nossa ajuda
            e entenda por que temos uma excelente reputação no Google.
        </x-paragraph>

        <div
            class="flex flex-nowrap snap-x snap-mandatory touch-pan-x overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:col-span-3 lg:grid lg:grid-cols-3 gap-5 -mx-5 px-5 scroll-px-5 scroll-smooth">
            <x-card-testimonial variant="google" name="Jaqueline Ramos" date="04/11/2025" :rating="5"
                initials="JR"
                quote="Os melhores advogados que já tive. Muito atenciosos e super confiáveis. Depois da perícia, foram apenas 26 dias para ser aprovado o BP."
                href="#" />
            <x-card-testimonial variant="google" name="Jaqueline Ramos" date="04/11/2025" :rating="5"
                initials="JR"
                quote="Os melhores advogados que já tive. Muito atenciosos e super confiáveis. Depois da perícia, foram apenas 26 dias para ser aprovado o BP."
                href="#" />
            <x-card-testimonial variant="google" name="Jaqueline Ramos" date="04/11/2025" :rating="5"
                initials="JR"
                quote="Os melhores advogados que já tive. Muito atenciosos e super confiáveis. Depois da perícia, foram apenas 26 dias para ser aprovado o BP."
                href="#" />
        </div>
    </div>
    <div class="pb-10 lg:pb-20 px-5 border-b border-[#FFFFFF]/50"></div>
</section>
