<section {{ $attributes->merge(['class' => 'bg-[#061125] pt-24 pb-12']) }}>
    <div class="hero-container grid grid-cols-1 md:gap-[18px] md:grid-cols-5 max-w-[1280px] mx-auto px-5 md:px-10">
        <div
            class="absolute w-[732px] h-[732px] rounded-full bg-[#1B365E] blur-[279.75px] top-[-50%] right-0 md:left-0 pointer-events-none">
        </div>

        <div class="hero-content relative flex items-center col-span-2">
            <div class="text-center md:text-left py-12 px-2">
                <x-heading asChild class="text-white!">{!! $title !!}</x-heading>
                <x-paragraph asChild class="hero-subtitle mt-5 text-[#92A8CC] mb-3">
                    {!! $subtitle !!}
                </x-paragraph>
                @if ($cta_link)
                    <x-link href="{{ $cta_link['url'] }}" target="{{ $cta_link['target'] }}">
                        {{ $cta_link['title'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M16.175 13H4V11H16.175L10.575 5.4L12 4L20 12L12 20L10.575 18.6L16.175 13Z"
                                fill="currentColor" />
                        </svg>
                    </x-link>
                @endif
            </div>
        </div>

        <div
            class="hero-cards-grid flex flex-nowrap snap-x snap-mandatory touch-pan-x overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden md:col-span-3 md:grid md:grid-cols-2 gap-5 -mx-5 px-6 scroll-px-5 scroll-smooth">
            {{-- @foreach ($cards as $card)
                <x-feature-card 
                    :title="$card['title']" 
                    :category="$card['category']"
                    :image-url="$card['image'] ? $card['image']['url'] : null" 
                />
            @endforeach --}}

            <div
                class="group snap-start snap-always flex flex-col min-w-[270px] min-h-[465px] md:min-h-[600px] p-5 rounded-[5px] relative overflow-hidden cursor-pointer">
                <div class="absolute inset-0 bg-[lightgray]">
                    <img class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                        src="https://picsum.photos/seed/picsum/345/600" alt="">
                    <!-- Gradient 1 (White to transparent) -->
                    <div class="absolute inset-0 bg-gradient-to-b from-white to-white/0 to-[50%]"></div>
                    <!-- Gradient 2 (Dark blue) -->
                    <div class="absolute inset-0 bg-gradient-to-b from-[#142A4B]/0 to-[#0F192B]/85"></div>

                    <!-- Overlay Default (Color burn) - Azul -->
                    <div
                        class="absolute inset-0 bg-[#81B6FF]/20 mix-blend-color-burn transition-opacity duration-500 group-hover:opacity-0">
                    </div>

                    <!-- Overlays Hover - Azul -->
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#5575A3]/70 mix-blend-soft-light">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#92A8CC]/72 mix-blend-multiply">
                    </div>
                </div>

                <div class="flex flex-col relative border-[#81B6FF] border rounded-[5px] size-full grow justify-end">
                    <div class="p-5 border-b border-[#81B6FF]">
                        <x-heading class="text-white! text-[44px]! pb-2 italic!">Auxílio Acidente</x-heading>
                        <x-paragraph class="text-white">INSS</x-paragraph>
                    </div>

                    <x-link href="#" variant="hero" class="text-[#81B6FF]! p-5 flex justify-end gap-3.5 w-full">
                        saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                            fill="none">
                            <path
                                d="M18 24.577L24.577 18L18 11.423L16.623 12.8L20.823 17H11V19H20.823L16.623 23.2L18 24.577ZM18.0065 36C15.5175 36 13.1773 35.5277 10.986 34.583C8.795 33.6383 6.889 32.3563 5.268 30.737C3.647 29.1177 2.36383 27.2133 1.4185 25.024C0.472833 22.835 0 20.4958 0 18.0065C0 15.5175 0.472333 13.1773 1.417 10.986C2.36167 8.795 3.64367 6.889 5.263 5.268C6.88233 3.647 8.78667 2.36383 10.976 1.4185C13.165 0.472833 15.5042 0 17.9935 0C20.4825 0 22.8227 0.472335 25.014 1.417C27.205 2.36167 29.111 3.64367 30.732 5.263C32.353 6.88233 33.6362 8.78667 34.5815 10.976C35.5272 13.165 36 15.5042 36 17.9935C36 20.4825 35.5277 22.8227 34.583 25.014C33.6383 27.205 32.3563 29.111 30.737 30.732C29.1177 32.353 27.2133 33.6362 25.024 34.5815C22.835 35.5272 20.4958 36 18.0065 36ZM18 34C22.4667 34 26.25 32.45 29.35 29.35C32.45 26.25 34 22.4667 34 18C34 13.5333 32.45 9.75 29.35 6.65C26.25 3.55 22.4667 2 18 2C13.5333 2 9.75 3.55 6.65 6.65C3.55 9.75 2 13.5333 2 18C2 22.4667 3.55 26.25 6.65 29.35C9.75 32.45 13.5333 34 18 34Z"
                                fill="#81B6FF" />
                        </svg>
                    </x-link>
                </div>
            </div>
            <div
                class="group snap-start snap-always flex flex-col min-w-[270px] min-h-[465px] md:min-h-[600px] p-5 rounded-[5px] relative overflow-hidden cursor-pointer">
                <div class="absolute inset-0 bg-[lightgray]">
                    <img class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
                        src="https://picsum.photos/seed/picsum/345/600" alt="">
                    <!-- Gradient 1 (White to transparent) -->
                    <div class="absolute inset-0 bg-gradient-to-b from-white to-white/0 to-[50%]"></div>
                    <!-- Gradient 2 (Dark blue) -->
                    <div class="absolute inset-0 bg-gradient-to-b from-[#142A4B]/0 to-[#0F192B]/85"></div>

                    <!-- Overlay Default (Color burn) - Vermelho -->
                    <div
                        class="absolute inset-0 bg-[#FF8183]/20 mix-blend-color-burn transition-opacity duration-500 group-hover:opacity-0">
                    </div>

                    <!-- Overlays Hover - Vermelho -->
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#E94B4E]/70 mix-blend-soft-light">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-[#4B2323]/24">
                    </div>
                </div>

                <div class="flex flex-col relative border-[#FF8183] border rounded-[5px] size-full grow justify-end">
                    <div class="p-5 border-b border-[#FF8183]">
                        <x-heading class="text-white! text-[44px]! pb-2 italic!">Benefício Autista</x-heading>
                        <x-paragraph class="text-white">BCP/LOAS</x-paragraph>
                    </div>

                    <x-link href="#" variant="hero" class="text-[#FF8183]! p-5 flex justify-end gap-3.5 w-full">
                        saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"
                            fill="none">
                            <path
                                d="M18 24.577L24.577 18L18 11.423L16.623 12.8L20.823 17H11V19H20.823L16.623 23.2L18 24.577ZM18.0065 36C15.5175 36 13.1773 35.5277 10.986 34.583C8.795 33.6383 6.889 32.3563 5.268 30.737C3.647 29.1177 2.36383 27.2133 1.4185 25.024C0.472833 22.835 0 20.4958 0 18.0065C0 15.5175 0.472333 13.1773 1.417 10.986C2.36167 8.795 3.64367 6.889 5.263 5.268C6.88233 3.647 8.78667 2.36383 10.976 1.4185C13.165 0.472833 15.5042 0 17.9935 0C20.4825 0 22.8227 0.472335 25.014 1.417C27.205 2.36167 29.111 3.64367 30.732 5.263C32.353 6.88233 33.6362 8.78667 34.5815 10.976C35.5272 13.165 36 15.5042 36 17.9935C36 20.4825 35.5277 22.8227 34.583 25.014C33.6383 27.205 32.3563 29.111 30.737 30.732C29.1177 32.353 27.2133 33.6362 25.024 34.5815C22.835 35.5272 20.4958 36 18.0065 36ZM18 34C22.4667 34 26.25 32.45 29.35 29.35C32.45 26.25 34 22.4667 34 18C34 13.5333 32.45 9.75 29.35 6.65C26.25 3.55 22.4667 2 18 2C13.5333 2 9.75 3.55 6.65 6.65C3.55 9.75 2 13.5333 2 18C2 22.4667 3.55 26.25 6.65 29.35C9.75 32.45 13.5333 34 18 34Z"
                                fill="#FF8183" />
                        </svg>
                    </x-link>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#061125] pt-12 pb-24">
    <div class="hero-container grid grid-cols-1 md:gap-[18px] md:grid-cols-2 max-w-[1280px] mx-auto px-5 md:px-10">
        <div class="flex justify-center mb-5 md:m-0">
            <img class="w-auto" src="https://picsum.photos/seed/picsum/473/520" width="473" height="520" />
        </div>
        <div class="flex flex-col justify-center md:items-baseline">
            <x-heading class="text-white! text-[48px]! mb-5">Quem somos</x-heading>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    fill="none">
                    <g clip-path="url(#clip0_2021_57)">
                        <path
                            d="M13.601 2.32606C12.8676 1.58555 11.9941 0.998501 11.0314 0.599149C10.0688 0.199797 9.03621 -0.00386082 7.994 5.54251e-05C3.627 5.54251e-05 0.068 3.55806 0.064 7.92606C0.064 9.32506 0.43 10.6861 1.121 11.8911L0 16.0001L4.204 14.8981C5.36649 15.5323 6.66975 15.8641 7.994 15.8631H7.998C12.366 15.8631 15.924 12.3051 15.928 7.93306C15.9289 6.89112 15.7237 5.85929 15.3241 4.897C14.9246 3.9347 14.3396 3.06095 13.601 2.32606ZM7.994 14.5211C6.81318 14.5201 5.65422 14.2024 4.638 13.6011L4.398 13.4571L1.904 14.1111L2.57 11.6781L2.414 11.4271C1.75381 10.3774 1.40465 9.16208 1.407 7.92206C1.407 4.29606 4.364 1.33806 7.998 1.33806C8.86374 1.3365 9.72123 1.50633 10.521 1.83775C11.3208 2.16916 12.0471 2.65562 12.658 3.26906C13.2709 3.8802 13.7568 4.6066 14.0877 5.40638C14.4186 6.20617 14.5879 7.06352 14.586 7.92906C14.582 11.5681 11.625 14.5211 7.994 14.5211ZM11.609 9.58706C11.412 9.48806 10.439 9.00906 10.256 8.94106C10.074 8.87606 9.941 8.84206 9.811 9.04006C9.678 9.23705 9.298 9.68606 9.184 9.81505C9.07 9.94806 8.952 9.96305 8.754 9.86506C8.557 9.76505 7.918 9.55706 7.162 8.88006C6.572 8.35506 6.177 7.70506 6.059 7.50806C5.945 7.31006 6.048 7.20406 6.147 7.10506C6.234 7.01706 6.344 6.87305 6.443 6.75906C6.543 6.64506 6.576 6.56106 6.641 6.42906C6.706 6.29506 6.675 6.18106 6.626 6.08206C6.576 5.98306 6.181 5.00606 6.014 4.61206C5.854 4.22306 5.691 4.27706 5.569 4.27206C5.455 4.26506 5.322 4.26506 5.189 4.26506C5.08857 4.26761 4.98976 4.29087 4.89873 4.33337C4.80771 4.37587 4.72643 4.4367 4.66 4.51206C4.478 4.71006 3.969 5.18906 3.969 6.16606C3.969 7.14305 4.679 8.08206 4.779 8.21506C4.877 8.34806 6.173 10.3471 8.162 11.2071C8.632 11.4121 9.002 11.5331 9.291 11.6251C9.766 11.7771 10.195 11.7541 10.537 11.7051C10.917 11.6471 11.708 11.2251 11.875 10.7621C12.039 10.2981 12.039 9.90206 11.989 9.81906C11.94 9.73506 11.807 9.68606 11.609 9.58706Z"
                            fill="#92A8CC" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2021_57">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </x-button>
        </div>
    </div>
</section>

<section class="relative bg-[#061125] pt-24 pb-24 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://picsum.photos/seed/picsum/1920/475" class="w-full h-full object-cover" />

        <div class="absolute inset-0 bg-[#F7F0F0]/80 mix-blend-color"></div>

        <div class="absolute inset-0 bg-[#F7F0F0]/80"></div>

        <div class="absolute inset-0 bg-gradient-to-t from-[#F7F0F0] via-[#F7F0F0]/0 via-50% to-transparent"></div>
    </div>

    <div class="hero-container relative z-10 max-w-[1280px] mx-auto px-5 md:px-10">
        <x-heading class="text-[48px]! mb-10 text-gray-900 text-center">Quem somos</x-heading>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="flex flex-col text-center">
                <span>+8</span>
                <span>anos de experiência</span>
            </div>
            <div class="flex flex-col text-center">
                <span>+1500</span>
                <span>clientes atendidos</span>
            </div>
            <div class="flex flex-col text-center">
                <span>+472</span>
                <span>avaliações no Google</span>
            </div>
        </div>
    </div>
</section>
