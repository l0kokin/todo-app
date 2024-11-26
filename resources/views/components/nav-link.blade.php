@props(['icon', 'href'])

<a href="{{ $href }}" class="block px-3 py-2 text-md font-medium text-text-color mb-4 flex gap-x-2 items-center">
    <img src="{{ asset('icons/' . $icon . '.svg') }}" alt="Icon" class="w-8 h-8">
    {{ $slot }}
</a>
