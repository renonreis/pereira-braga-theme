  <section
      {{ $attributes->merge(['id' => 'stats', 'class' => 'relative bg-[#061125] pt-16 pb-16 lg:pt-24 lg:pb-24 border-y border-[#FFFFFF]/50']) }}>
      <div class="absolute inset-0 z-0 top-4 bottom-4">
          @if ($background_image)
              <img src="{{ $background_image['url'] }}" class="w-full h-full object-cover object-center" aria-hidden="true"
                  width="{{ $background_image['width'] }}" height="{{ $background_image['height'] }}" />
          @endif

          <div class="absolute inset-0 bg-[#F7F0F0]/80 mix-blend-color"></div>

          <div class="absolute inset-0 bg-[#F7F0F0]/80"></div>

          <div class="absolute inset-0 bg-gradient-to-t from-[#F7F0F0] via-[#F7F0F0]/0 via-50% to-transparent"></div>
      </div>

      <div class="relative z-10 max-w-[1280px] mx-auto px-5 lg:px-10">
          @if ($title)
              <x-heading as="h2" asChild class="pb-10 text-center">
                  {!! $title !!}
              </x-heading>
          @endif

          <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-5">
              @foreach ($items as $item)
                  <x-counter :to="$item['number']" prefix="+" label="{{ $item['label'] }}" />
              @endforeach
          </div>
      </div>
  </section>
