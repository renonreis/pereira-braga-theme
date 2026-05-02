<footer class="relative bg-[#FFFFFF] pt-4">
    <div class="border-t border-[#4B648A]/50 w-full"></div>
    <div class="text-center max-w-[1280px] mx-auto pt-16 pb-16 lg:pt-20 lg:pb-20 px-5 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <div>
                <x-icons.brand-dark class="mb-12 lg:mb-20 mx-auto" />
                <x-heading as="h4" class="mb-3 lg:mb-6 italic!">
                    Siga-nos
                </x-heading>
                <div class="flex items-center justify-center gap-6">
                    <x-link
                        class="border border-[#92A8CC] rounded-full p-2 text-[#061125]! w-[60px] h-[60px] flex items-center justify-center hover:bg-[#92A8CC]"
                        href="#" target="_blank">
                        <x-icons.instagram />
                    </x-link>
                    <x-link
                        class="border border-[#92A8CC] rounded-full p-2 text-[#061125]! w-[60px] h-[60px] flex items-center justify-center hover:bg-[#92A8CC]"
                        href="#" target="_blank">
                        <x-icons.tiktok />
                    </x-link>
                    <x-link
                        class="border border-[#92A8CC] rounded-full p-2 text-[#061125]! w-[60px] h-[60px] flex items-center justify-center hover:bg-[#92A8CC]"
                        href="#" target="_blank">
                        <x-icons.facebook />
                    </x-link>
                </div>
            </div>
            <div>
                <x-heading as="h4" class="mb-6 lg:mb-5 italic! lg:text-left">
                    Contato
                </x-heading>
                <ul class="flex flex-col gap-5">
                    <li class="flex flex-row justify-center lg:justify-start">
                        <span class="flex flex-col lg:flex-row items-center text-left gap-3">
                            <x-icons.phone class="text-[#92A8CC]" />
                            <span class="flex flex-col items-center lg:items-start">
                                <x-paragraph class="text-[#293E59]! text-[14px]! font-semibold! leading-none!">
                                    Auxílio Acidente
                                </x-paragraph>
                                <x-link href="#" target="_blank"
                                    class="text-[#293E59]! font-light! text-[16px]! leading-[30px] hover:underline!">
                                    41 95190-3143
                                </x-link>
                            </span>
                        </span>
                    </li>
                    <li class="flex flex-row justify-center lg:justify-start">
                        <span class="flex flex-col lg:flex-row items-center text-left gap-3">
                            <x-icons.phone class="text-[#92A8CC]" />
                            <span class="flex flex-col items-center lg:items-start">
                                <x-paragraph class="text-[#293E59]! text-[14px]! font-semibold! leading-none!">
                                    Benefício para Autismo
                                </x-paragraph>
                                <x-link href="#" target="_blank"
                                    class="text-[#293E59]! font-light! text-[16px]! leading-[30px] hover:underline!">
                                    41 99907-1270
                                </x-link>
                            </span>
                        </span>
                    </li>
                    <li class="flex flex-row justify-center lg:justify-start">
                        <span class="flex flex-col lg:flex-row items-center text-left gap-3">
                            <x-icons.email class="text-[#92A8CC]" />
                            <span class="flex flex-col items-center lg:items-start">
                                <x-paragraph class="text-[#293E59]! text-[14px]! font-semibold! leading-none!">
                                    E-mail
                                </x-paragraph>
                                <x-link href="#" target="_blank"
                                    class="text-[#293E59]! font-light! text-[16px]! leading-[30px] hover:underline!">
                                    pereirabragaadvogados@gmail.com
                                </x-link>
                            </span>
                        </span>
                    </li>
                    <li class="flex flex-row justify-center lg:justify-start">
                        <span class="flex flex-col lg:flex-row items-center text-left gap-3">
                            <x-icons.map-pin class="text-[#92A8CC]" />
                            <span class="flex flex-col items-center lg:items-start">
                                <x-paragraph class="text-[#293E59]! text-[14px]! font-semibold! leading-none!">
                                    Endereço
                                </x-paragraph>
                                <x-link href="#" target="_blank"
                                    class="text-[#293E59]! font-light! text-[16px]! leading-[30px] hover:underline!">
                                    Rua Apucarana, 629 - Curitiba/PR
                                </x-link>
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
            <div>
                <x-heading as="h4" class="mb-6 lg:mb-5 italic! lg:text-left">
                    Navegação
                </x-heading>

                {!! wp_nav_menu([
                    'theme_location' => 'footer_navigation',
                    'container_class' => 'w-auto',
                    'menu_class' => 'flex flex-col gap-5 lg:text-left',
                    'add_li_class' => 'text-[#293E59]! font-light! text-[16px]! leading-[30px] hover:underline!',
                    'add_a_class' => 'block no-underline!',
                    'echo' => false,
                ]) !!}
            </div>
        </div>
    </div>
    <div class="copyright text-center px-5 py-12 border-t border-[#39455A]/50">
        <x-paragraph
            class="text-[#293E59]! text-[16px]! font-light! leading-[30px]! max-w-[240px] mx-auto lg:max-w-none">
            Todos os direitos reservados a Pereira Braga Advogados
        </x-paragraph>
    </div>
</footer>
