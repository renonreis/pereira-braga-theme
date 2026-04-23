<div {{ $attributes->merge(['class' => 'stats-block-wrapper']) }}>
    @if($background_image)
        <div class="stats-background" style="background-image: url('{{ $background_image['url'] }}');"></div>
    @endif
    
    <div class="stats-overlay"></div>

    <div class="stats-container">
        <!-- Título opcional da seção decorativo dependendo do layout -->
        <h2 class="stats-section-title">Quem somos</h2>
        
        <div class="stats-grid">
            @foreach($items as $item)
                <x-stat-item :number="$item['number']" :label="$item['label']" />
            @endforeach
        </div>
    </div>
</div>
