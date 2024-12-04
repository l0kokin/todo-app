@php
    $classes = 'p-6 text-light-text whitespace-nowrap overflow-hidden'
@endphp

<td {{ $attributes([ 'class' => $classes ]) }}>{{ $slot }}</td>


