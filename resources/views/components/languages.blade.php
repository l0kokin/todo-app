@php
    $classes = 'flex gap-x-1 absolute bottom-0 right-0'
@endphp

<div {{ $attributes([ 'class' => $classes ]) }}>
    <form action="{{ route('session.locale', ['locale' => 'en']) }}" method="post">
        @csrf
        @method('PUT')

        <button class="text-sm px-4 py-3 rounded-xl hover:bg-gray">English</button>
    </form>

    <form action="{{ route('session.locale', ['locale' => 'ka']) }}" method="post">
        @csrf
        @method('PUT')

        <button class="text-sm px-4 py-3 rounded-xl hover:bg-gray">ქართული</button>
    </form>
</div>