<section {{ $attributes->merge(['class' => '']) }}>
    <div class="about-container">
        
        <div class="about-media-column">
            <div class="about-image-mask">
                @if($image)
                    <img src="{{ $image['url'] }}" alt="Equipe Pereira Braga" class="about-image">
                @else
                    <div class="about-image-placeholder"></div>
                @endif
            </div>
        </div>

        <div class="about-content-column">
            <h2 class="about-title">{{ $title }}</h2>
            <div class="about-rich-text">
                {!! $content !!}
            </div>
            
            <x-button class="about-cta-button" variant="dark">
                {{ $cta_text }}
            </x-button>
        </div>

    </div>
</section>
