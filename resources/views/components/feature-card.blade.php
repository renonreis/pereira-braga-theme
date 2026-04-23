@props(['title', 'category', 'imageUrl' => null])

<div {{ $attributes->merge(['class' => 'feature-card']) }}>
    @if($imageUrl)
        <div class="feature-card-image">
            <img src="{{ $imageUrl }}" alt="{{ $title }}">
        </div>
    @endif
    
    <div class="feature-card-content">
        @if($category)
            <span class="feature-card-category">{{ $category }}</span>
        @endif
        
        <h3 class="feature-card-title">{{ $title }}</h3>
        
        <div class="feature-card-action">
            <button class="feature-card-add-button" aria-label="Saiba mais sobre {{ $title }}">+</button>
        </div>
    </div>
</div>
