@props(['href' => '#'])

<li class="flex w-full mt-12 xl:mt-0 xl:w-auto">
    <x-button variant="outline" :as-child="true" class="w-full xl:w-auto">
        <a href="{{ $href }}">
            Fale conosco
            <x-icons.whatsapp />
        </a>
    </x-button>
</li>
