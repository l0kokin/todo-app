@php
    $classes = 'inline-flex gap-x-3 items-center rounded-xl border border-transparent ring-1 ring-inset ring-blue px-6 py-4 text-sm font-semibold shadow-sm max-h-12 transition-all duration-300 uppercase'
@endphp

<button type="button" {{ $attributes([ 'class' => $classes ]) }}>
{{ $slot }}
</button>

