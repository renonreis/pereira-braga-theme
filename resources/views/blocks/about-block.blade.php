  <section {{ $attributes->merge(['id' => 'sobre', 'class' => 'bg-[#061125] pt-12 pb-12 lg:pb-24']) }}>
      <div class="grid grid-cols-1 lg:gap-[18px] lg:grid-cols-2 max-w-[1280px] mx-auto px-5 lg:px-10">
          <div class="flex justify-center mb-5 lg:m-0">
              <img class="w-auto" src="https://picsum.photos/seed/picsum/473/520" width="473" height="520" />
          </div>
          <div class="flex flex-col justify-center lg:items-baseline text-center lg:text-left">
              <x-heading as="h2" class="text-white! mb-5 hidden lg:block">Quem somos</x-heading>
              <x-paragraph class="text-[#92A8CC] mb-3">
                  Somos um escritório especializado em direitos previdenciários, com foco em Auxílio-Acidente e
                  BPC/LOAS para pessoas com autismo.
              </x-paragraph>
              <x-paragraph class="text-[#92A8CC] mb-3">
                  Há mais de 8 anos, ajudamos trabalhadores e famílias em todo o Brasil a conquistarem benefícios
                  essenciais com segurança, agilidade e atendimento humanizado.
              </x-paragraph>
              <x-paragraph class="text-[#92A8CC] mb-3">
                  Nosso compromisso é descomplicar o processo, orientar com clareza e garantir que cada cliente tenha
                  acesso ao que é seu por direito.
              </x-paragraph>

              <x-button class="mt-2">
                  Fale conosco
                  <x-icons.whatsapp />
              </x-button>
          </div>
      </div>
  </section>
