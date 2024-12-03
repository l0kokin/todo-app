@php
    $classes = 'py-4 px-6 text-light-text whitespace-nowrap overflow-hidden'
@endphp

<td {{ $attributes([ 'class' => $classes ]) }}>{{ $slot }}</td>


