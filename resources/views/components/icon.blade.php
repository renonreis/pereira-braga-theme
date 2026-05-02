@props(['name'])

@switch($name)
    @case('whatsapp')
        <x-icons.whatsapp {{ $attributes }} />
    @break

    @case('arrowRight')
        <x-icons.arrowRight {{ $attributes }} />
    @break

    @case('arrowRightCircle')
        <x-icons.arrowRightCircle {{ $attributes }} />
    @break

    @case('start')
        <x-icons.start {{ $attributes }} />
    @break

    @case('google')
        <x-icons.google {{ $attributes }} />
    @break

    @case('close')
        <x-icons.close {{ $attributes }} />
    @break
@endswitch
