<div {{ $attributes->merge(['class' => 'my-alert-block-wrapper']) }}>
  <x-alert :type="$type" :message="$message" />
</div>
