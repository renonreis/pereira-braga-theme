<header data-site-header data-mobile-nav="closed" data-nav-drawer-hydrated="false"
    class="group/header fixed top-0 z-50 w-full xl:border-b xl:border-[#1E3051] bg-transparent py-3 transition-all duration-300 ease-out xl:py-6 data-[header-scrolled=true]:bg-[#061125] data-[header-scrolled=true]:border-[#061125] data-[header-scrolled=true]:py-3 data-[header-scrolled=true]:shadow-[0_0_10px_rgba(0,0,0,0.75)]">
    <div class="relative z-100 mx-auto flex max-w-[1280px] items-center justify-between px-5 xl:px-10">
        <a href="{{ home_url('/') }}" aria-label="">
            <x-icons.brand />
        </a>

        @if (has_nav_menu('primary_navigation'))
            <div data-drawer-backdrop
                class="pointer-events-none invisible fixed inset-0 z-90 bg-black/50 opacity-0 group-data-[nav-drawer-hydrated=true]/header:transition-opacity group-data-[nav-drawer-hydrated=true]/header:duration-300 group-data-[nav-drawer-hydrated=true]/header:ease-out group-data-[mobile-nav=open]/header:pointer-events-auto group-data-[mobile-nav=open]/header:visible group-data-[mobile-nav=open]/header:opacity-100 xl:hidden"
                aria-hidden="true"></div>

            <nav id="primary-navigation"
                class="nav-primary pointer-events-none fixed right-0 top-0 z-95 flex h-dvh w-full max-w-sm translate-x-full flex-col bg-[#061125] shadow-[-8px_0_24px_rgba(0,0,0,0.35)] group-data-[nav-drawer-hydrated=true]/header:transition-transform group-data-[nav-drawer-hydrated=true]/header:duration-300 group-data-[nav-drawer-hydrated=true]/header:ease-out group-data-[mobile-nav=open]/header:translate-x-0 group-data-[mobile-nav=open]/header:pointer-events-auto xl:static xl:z-auto xl:block xl:h-auto xl:max-w-none xl:translate-x-0 xl:bg-transparent xl:p-0 xl:shadow-none xl:transition-none xl:pointer-events-auto"
                aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                <div class="flex shrink-0 items-center justify-between border-b border-[#2E436A] px-5 py-3 xl:hidden">
                    <a href="{{ home_url('/') }}" aria-label="">
                        <x-icons.brand />
                    </a>

                    <button type="button"
                        class="flex h-12 w-12 -mr-3 items-center justify-center text-[#92A8CC] transition-colors hover:text-white"
                        aria-label="Fechar menu" data-menu-close>
                        <x-icons.close />
                    </button>
                </div>

                <div
                    class="flex flex-row items-center justify-end gap-12 overflow-y-auto px-5 pb-8 pt-2 xl:flex xl:flex-row xl:overflow-visible xl:p-0">
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'container_class' => 'w-full',
                        'menu_class' =>
                            'flex w-full flex-col items-stretch gap-0 text-left xl:flex-row xl:items-center xl:justify-end xl:gap-12',
                        'add_li_class' =>
                            'text-[#92A8CC] hover:text-white uppercase text-[14px] w-full leading-[48px] tracking-[4.2px] transition-all duration-300 ease-out border-b border-[#92A8CC] xl:border-none xl:w-auto',
                        'add_a_class' => 'block no-underline!',
                        'echo' => false,
                    ]) !!}
                </div>
            </nav>

            <button type="button"
                class="-mr-3 flex h-12 w-12 shrink-0 items-center justify-center text-[#92A8CC] transition-all duration-300 ease-out hover:text-white xl:hidden"
                aria-label="Abrir menu" aria-expanded="false" aria-controls="primary-navigation" data-menu-toggle>
                <x-icons.menuLine aria-hidden="true" />
            </button>
        @endif
    </div>
</header>
