@props(['name', 'rating' => 5, 'text', 'avatarUrl' => null])

<div {{ $attributes->merge(['class' => 'testimonial-card']) }}>
    <div class="testimonial-header">
        @if($avatarUrl)
            <img src="{{ $avatarUrl }}" alt="{{ $name }}" class="testimonial-avatar">
        @else
            <div class="testimonial-avatar-placeholder">{{ substr($name, 0, 1) }}</div>
        @endif
        
        <div class="testimonial-user-info">
            <span class="testimonial-name">{{ $name }}</span>
            <div class="testimonial-rating">
                @for($i = 0; $i < $rating; $i++)
                    <span class="star-icon">★</span>
                @endfor
            </div>
        </div>
        
        <div class="testimonial-google-icon">
            <span class="g-icon-placeholder">G</span>
        </div>
    </div>
    
    <div class="testimonial-body">
        <p class="testimonial-text">{{ $text }}</p>
    </div>
    
    <div class="testimonial-footer">
        <a href="#" class="testimonial-link" target="_blank" rel="noopener noreferrer">Ver no Google</a>
    </div>
</div>
