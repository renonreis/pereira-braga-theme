@props(['href' => '#'])

<li class="flex w-full md:w-auto">
    <x-button variant="outline" :as-child="true" class="w-full md:w-auto">
        <a href="{{ $href }}">
            Fale conosco
            <x-icons.whatsapp />
        </a>
    </x-button>
</li>
