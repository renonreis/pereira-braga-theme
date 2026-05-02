<section
    {{ $attributes->merge([
        'id' => 'equipe',
        'class' =>
            'relative isolate overflow-hidden bg-gradient-to-b from-[#0c1e38] via-[#061125] via-35% to-[#030913] pt-16 pb-16 lg:pt-24 lg:pb-4',
    ]) }}>
    <div
        class="pointer-events-none absolute inset-0 z-0 overflow-hidden"
        aria-hidden="true">
        {{-- Luz suave abaixo da equipe, separando as duas zonas --}}
        <div
            class="absolute left-1/2 top-[18%] h-[min(380px,55vw)] w-[min(115vw,960px)] -translate-x-1/2 rounded-full bg-[#4a8fd9]/20 blur-[88px] lg:top-[22%] lg:h-[440px] lg:blur-[115px]">
        </div>
        {{-- Glow principal atrás dos depoimentos (direita / centro-direita) --}}
        <div
            class="absolute right-[-12%] top-[38%] h-[min(580px,95vw)] w-[min(580px,95vw)] max-h-[760px] max-w-[760px] rounded-full bg-[#2f7ee8]/[0.28] blur-[100px] sm:right-[-6%] lg:right-[-4%] lg:top-[40%] lg:blur-[140px]">
        </div>
        {{-- Reforço suave central-direito para volume --}}
        <div
            class="absolute right-[8%] top-[52%] h-[min(340px,70vw)] w-[min(340px,70vw)] max-w-[480px] rounded-full bg-[#1e6fd6]/15 blur-[90px] lg:top-[50%]">
        </div>
    </div>

    <div class="relative z-10">
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
    </div>
</section>
