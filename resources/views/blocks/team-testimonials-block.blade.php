<section
    {{ $attributes->merge([
        'id' => 'equipe',
        'class' =>
            'relative isolate overflow-hidden bg-gradient-to-b from-[#0c1e38] via-[#061125] via-35% to-[#030913] pt-16 pb-16 lg:pt-24 lg:pb-4',
    ]) }}>
    @php
        $team = array_merge(
            [
                'title' => '',
                'subtitle' => '',
                'team_members' => [],
            ],
            is_array($team ?? null) ? $team : [],
        );
        $testimonials = array_merge(
            [
                'title' => '',
                'subtitle' => '',
                'testimonials_items' => [],
            ],
            is_array($testimonials ?? null) ? $testimonials : [],
        );

        $teamMembers = is_array($team['team_members'] ?? null) ? $team['team_members'] : [];
        $testimonialsItems = is_array($testimonials['testimonials_items'] ?? null)
            ? $testimonials['testimonials_items']
            : [];
    @endphp

    <div class="pointer-events-none absolute inset-0 z-0 overflow-hidden" aria-hidden="true">
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
            <div class="flex flex-col items-center">
                @if ($team['title'])
                    <x-heading as="h2" asChild class="pb-8 text-white! text-center">
                        {!! $team['title'] !!}
                    </x-heading>
                @endif
                @if ($team['subtitle'])
                    <x-paragraph as="p" class="text-[#92A8CC] pb-14 text-center max-w-[995px] mx-auto">
                        {!! $team['subtitle'] !!}
                    </x-paragraph>
                @endif
            </div>
        </div>

        <div class="team-carousel overflow-hidden px-5" data-team-carousel data-team-marquee-seconds="50">
            <div class="team-carousel-track flex w-max flex-nowrap gap-5" data-team-carousel-track>
                @foreach ($teamMembers as $member)
                    @php
                        $member = is_array($member) ? $member : [];
                        $image = $member['image'] ?? null;
                        $imageUrl = null;

                        if (is_array($image)) {
                            $imageUrl = $image['url'] ?? null;
                        } elseif (is_numeric($image)) {
                            $imageUrl = wp_get_attachment_image_url((int) $image, 'full') ?: null;
                        } elseif (is_string($image) && filter_var($image, FILTER_VALIDATE_URL)) {
                            $imageUrl = $image;
                        }
                    @endphp
                    <x-card-team variant="blue" prefix="{{ $member['role'] ?? '' }}" name="{{ $member['name'] ?? '' }}"
                        class="shrink-0" :imageSrc="$imageUrl" />
                @endforeach
            </div>
        </div>

        <div class="max-w-[1280px] mx-auto px-5 lg:px-10 pt-12 lg:pt-24">
            <div class="flex flex-col items-center">
                @if ($testimonials['title'])
                    <x-heading as="h2" asChild class="pb-8 text-white! text-center">
                        {!! $testimonials['title'] !!}
                    </x-heading>
                @endif
                @if ($testimonials['subtitle'])
                    <x-paragraph as="p" class="text-[#92A8CC] pb-14 text-center max-w-[600px] mx-auto">
                        {!! $testimonials['subtitle'] !!}
                    </x-paragraph>
                @endif
            </div>

            <div
                class="flex flex-nowrap snap-x snap-mandatory touch-pan-x overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:col-span-3 lg:grid lg:grid-cols-3 gap-5 -mx-5 px-5 scroll-px-5 scroll-smooth">

                @foreach ($testimonialsItems as $testimonial)
                    @php
                        $testimonial = is_array($testimonial) ? $testimonial : [];
                    @endphp
                    <x-card-testimonial variant="google" author="{{ $testimonial['author'] ?? '' }}"
                        date="{{ $testimonial['date'] ?? '' }}" rating="{{ $testimonial['rating'] ?? '' }}"
                        quote="{{ $testimonial['quote'] ?? '' }}" href="{{ $testimonial['url'] ?? '' }}" />
                @endforeach
            </div>
        </div>
        <div class="pb-10 lg:pb-20 px-5 border-b border-[#FFFFFF]/50"></div>
    </div>
</section>
