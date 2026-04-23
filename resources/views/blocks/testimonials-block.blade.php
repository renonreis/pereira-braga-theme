<div {{ $attributes->merge(['class' => 'testimonials-block-wrapper']) }}>
    <div class="testimonials-container">
        <div class="testimonials-header">
            <h2 class="testimonials-title">{{ $title }}</h2>
            <p class="testimonials-subtitle">{{ $subtitle }}</p>
        </div>
        
        <div class="testimonials-carousel-or-grid">
            @foreach($testimonials as $testimonial)
                <x-testimonial-card 
                    :name="$testimonial['name']" 
                    :rating="$testimonial['rating']" 
                    :text="$testimonial['text']"
                    :avatar-url="$testimonial['avatar'] ? $testimonial['avatar']['url'] : null"
                />
            @endforeach
        </div>
    </div>
</div>
