@php
    $classes = 'flex gap-x-1 absolute bottom-0 right-0'
@endphp

<div {{ $attributes([ 'class' => $classes ]) }}>
    <p class="text-sm px-4 py-3 rounded-xl hover:bg-gray">English</p>
    <p class="text-sm px-4 py-3 rounded-xl hover:bg-gray">ქართული</p>
</div>

