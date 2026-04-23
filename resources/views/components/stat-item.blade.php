@props(['number', 'label'])

<div {{ $attributes->merge(['class' => 'stat-item']) }}>
    <div class="stat-item-number">{{ $number }}</div>
    <div class="stat-item-label">{{ $label }}</div>
</div>
