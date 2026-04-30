<section {{ $attributes->merge(['class' => 'bg-[#061125] pt-24 pb-24']) }}>
    <div class="hero-container grid grid-cols-1 md:grid-cols-5 max-w-[1280px] mx-auto px-4 md:px-10">
        <div class="hero-content col-span-2">
            <x-heading asChild class="text-white!">{!! $title !!}</x-heading>
            <x-paragraph asChild class="hero-subtitle mt-5 text-[#92A8CC]">{!! $subtitle !!}</x-paragraph>
            @if($cta_link)
                <x-link href="{{ $cta_link['url'] }}" target="{{ $cta_link['target'] }}">
                    {{ $cta_link['title'] }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M16.175 13H4V11H16.175L10.575 5.4L12 4L20 12L12 20L10.575 18.6L16.175 13Z" fill="currentColor"/>
                    </svg>
                </x-link>
            @endif
        </div>
        
        <div class="hero-cards-grid">
            @foreach($cards as $card)
                <x-feature-card 
                    :title="$card['title']" 
                    :category="$card['category']" 
                    :image-url="$card['image'] ? $card['image']['url'] : null" 
                />
            @endforeach
        </div>
    </div>
</section>
