<section {{ $attributes->merge(['class' => 'bg-[#061125] pt-[93px] lg:pt-[117px] lg:pb-24 pb-12']) }}>
    <div
        class="hero-container grid grid-cols-1 lg:gap-[18px] lg:grid-cols-5 max-w-[1280px] mx-auto px-5 lg:px-10 lg:pt-24">
        <div
            class="absolute w-[732px] h-[732px] rounded-full bg-[#1B365E] blur-[279.75px] top-[-50%] right-0 lg:left-0 pointer-events-none">
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

<section id="sobre" class="bg-[#061125] pt-12 pb-12 lg:pb-24">
    <div class="grid grid-cols-1 lg:gap-[18px] lg:grid-cols-2 max-w-[1280px] mx-auto px-5 lg:px-10">
        <div class="flex justify-center mb-5 lg:m-0">
            <img class="w-auto" src="https://picsum.photos/seed/picsum/473/520" width="473" height="520" />
        </div>
        <div class="flex flex-col justify-center lg:items-baseline text-center lg:text-left">
            <x-heading as="h2" class="text-white! mb-5 hidden lg:block">Quem somos</x-heading>
            <x-paragraph class="text-[#92A8CC] mb-3">
                Somos um escritório especializado em direitos previdenciários, com foco em Auxílio-Acidente e
                BPC/LOAS para pessoas com autismo.
            </x-paragraph>
            <x-paragraph class="text-[#92A8CC] mb-3">
                Há mais de 8 anos, ajudamos trabalhadores e famílias em todo o Brasil a conquistarem benefícios
                essenciais com segurança, agilidade e atendimento humanizado.
            </x-paragraph>
            <x-paragraph class="text-[#92A8CC] mb-3">
                Nosso compromisso é descomplicar o processo, orientar com clareza e garantir que cada cliente tenha
                acesso ao que é seu por direito.
            </x-paragraph>

            <x-button class="mt-2">
                Fale conosco
                <x-icons.whatsapp />
            </x-button>
        </div>
    </div>
</section>

<section class="relative bg-[#061125] pt-16 pb-16 lg:pt-24 lg:pb-24 border-y border-[#FFFFFF]/50">
    <div class="absolute inset-0 z-0 top-4 bottom-4">
        <img src="https://picsum.photos/seed/picsum/1920/475" class="w-full h-full object-cover" />

        <div class="absolute inset-0 bg-[#F7F0F0]/80 mix-blend-color"></div>

        <div class="absolute inset-0 bg-[#F7F0F0]/80"></div>

        <div class="absolute inset-0 bg-gradient-to-t from-[#F7F0F0] via-[#F7F0F0]/0 via-50% to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-[1280px] mx-auto px-5 lg:px-10">
        <x-heading as="h2" class="mb-10 text-center">
            Quem somos
        </x-heading>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-5">
            <x-counter :to="8" prefix="+" label="anos de experiência" />
            <x-counter :to="1500" prefix="+" label="clientes atendidos" />
            <x-counter :to="472" prefix="+" label="avaliações no Google" />
        </div>
    </div>
</section>

<section id="equipe" class="relative bg-[#061125] pt-16 pb-16 lg:pt-24 lg:pb-4 overflow-hidden">
    <div class="max-w-[1280px] mx-auto px-5 lg:px-10">
        <x-heading as="h2" class="mb-8 text-white! text-center">
            Nossa equipe
        </x-heading>
        <x-paragraph class="text-[#92A8CC] mb-14 text-center">
            Uma equipe experiente e comprometida, preparada para analisar o seu caso com atenção, clareza e a estratégia
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

<section class="relative bg-[#92A8CC] py-4">
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
