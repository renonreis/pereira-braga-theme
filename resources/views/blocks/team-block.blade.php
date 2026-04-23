<div {{ $attributes->merge(['class' => 'team-block-wrapper']) }}>
    <div class="team-container">
        <div class="team-header">
            <h2 class="team-title">{{ $title }}</h2>
            <p class="team-subtitle">{{ $subtitle }}</p>
        </div>
        
        <div class="team-members-grid">
            @foreach($members as $member)
                <x-team-member 
                    :name="$member['name']" 
                    :role="$member['role']" 
                    :image-url="$member['image'] ? $member['image']['url'] : null" 
                />
            @endforeach
        </div>
    </div>
</div>
