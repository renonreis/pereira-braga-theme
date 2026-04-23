@props(['name', 'role' => null, 'imageUrl' => null])

<div {{ $attributes->merge(['class' => 'team-member-card']) }}>
    <div class="team-member-image-wrapper">
        @if($imageUrl)
            <img src="{{ $imageUrl }}" alt="{{ $name }}" class="team-member-image">
        @else
            <div class="team-member-placeholder"></div>
        @endif
    </div>
    
    <div class="team-member-info">
        @if($role)
            <span class="team-member-role">{{ $role }}</span>
        @endif
        <h4 class="team-member-name">{{ $name }}</h4>
    </div>
</div>
