<div {{ $attributes->merge(['class' => 'cta-banner-wrapper']) }}>
    <div class="cta-banner-container">
        <div class="cta-banner-content">
            <h2 class="cta-banner-title">{{ $title }}</h2>
            <p class="cta-banner-subtitle">{{ $subtitle }}</p>
            
            <a href="{{ $button_link }}" class="cta-banner-link-button">
                <x-button class="cta-banner-button">
                    {{ $button_text }}
                </x-button>
            </a>
        </div>
    </div>
</div>
