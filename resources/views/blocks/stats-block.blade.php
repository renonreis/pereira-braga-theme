  <section
      {{ $attributes->merge(['id' => 'stats', 'class' => 'relative bg-[#061125] pt-16 pb-16 lg:pt-24 lg:pb-24 border-y border-[#FFFFFF]/50']) }}>
      <div class="absolute inset-0 z-0 top-4 bottom-4">
          <img src="https://picsum.photos/seed/picsum/1920/475" class="w-full h-full object-cover" />

          <div class="absolute inset-0 bg-[#F7F0F0]/80 mix-blend-color"></div>

          <div class="absolute inset-0 bg-[#F7F0F0]/80"></div>

          <div class="absolute inset-0 bg-gradient-to-t from-[#F7F0F0] via-[#F7F0F0]/0 via-50% to-transparent"></div>
      </div>

      <div class="relative z-10 max-w-[1280px] mx-auto px-5 lg:px-10">
          <x-heading as="h2" class="mb-10 text-center">
              Quem somos
          </x-heading>

          <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-5">
              <x-counter :to="8" prefix="+" label="anos de experiência" />
              <x-counter :to="1500" prefix="+" label="clientes atendidos" />
              <x-counter :to="472" prefix="+" label="avaliações no Google" />
          </div>
      </div>
  </section>
