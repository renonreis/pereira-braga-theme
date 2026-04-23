<section {{ $attributes->merge(['class' => 'bg-[#061125]']) }}>
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">{{ $title }}</h1>
            <p class="hero-subtitle">{{ $subtitle }}</p>
            <a href="#" class="hero-link-cta">{{ $cta_text }}</a>
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
