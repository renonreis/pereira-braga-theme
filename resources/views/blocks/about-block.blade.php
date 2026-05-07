  <section
      {{ $attributes->merge(['id' => 'sobre', 'class' => 'relative overflow-hidden bg-[#061125] pt-12 pb-12 lg:pb-24']) }}>
      <div
          class="absolute w-[732px] h-[732px] rounded-full bg-[#1B365E] blur-[279.75px] bottom-[-293px] right-0 lg:right-[-267px] user-select-none pointer-events-none z-0">
      </div>

      <div class="relative grid grid-cols-1 lg:gap-[18px] lg:grid-cols-2 max-w-[1280px] mx-auto px-5 lg:px-10">
          <div class="flex justify-center pb-5 lg:pb-0">
              @if ($image)
                  <img class="w-full max-w-[529px]" src="{{ $image['url'] }}" width="{{ $image['width'] }}"
                      height="{{ $image['height'] }}" />
              @endif
          </div>
          <div class="flex flex-col justify-center lg:items-baseline text-center lg:text-left">
              @if ($title)
                  <x-heading as="h2" asChild class="text-white! pb-5">
                      {!! $title !!}
                  </x-heading>
              @endif

              @if ($content)
                  <div class="text-[#92A8CC] mb-3">
                      {!! $content !!}
                  </div>
              @endif

              @if ($button)
                  <x-button asChild class="mt-2">
                      <a href="{{ $button['url'] }} " target="_blank" class="no-underline!">
                          {{ $button['text'] }}
                          <x-icons.whatsapp />
                      </a>
                  </x-button>
              @endif
          </div>
      </div>
  </section>
