@php
    $classes = 'py-4 pr-6 text-light-text'
@endphp

<td {{ $attributes([ 'class' => $classes ]) }}>{{ $slot }}</td>


