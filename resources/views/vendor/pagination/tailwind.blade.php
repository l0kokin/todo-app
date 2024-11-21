@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center">
        <div>
            <span class="relative z-0 inline-flex rtl:flex-row-reverse rounded-md gap-x-2">
                @foreach (range(1, 3) as $page)
                    @if ($page <= $paginator->lastPage())
                        <a href="{{ $paginator->url($page) }}"
                           class="{{ $page == $paginator->currentPage() ? 'bg-blue-gradient text-blue' : 'text-text-color hover:bg-blue-gradient' }} relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach

                {{-- Middle Dots --}}
                @if ($paginator->currentPage() > 4)
                    <span class="px-4 py-2 text-sm text-gray-700">...</span>
                @endif

                @if ($paginator->currentPage() > 3 && $paginator->currentPage() < $paginator->lastPage() - 2)
                    <a href="{{ $paginator->url($paginator->currentPage()) }}"
                       class="bg-blue-gradient text-blue relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md">
                        {{ $paginator->currentPage() }}
                    </a>
                @endif

                {{-- Middle Dots --}}
                @if ($paginator->currentPage() < $paginator->lastPage() - 3)
                    <span class="px-4 py-2 text-sm text-gray-700">...</span>
                @endif

                @foreach (range(max($paginator->lastPage() - 2, 4), $paginator->lastPage()) as $page)
                    @if ($page >= 4)
                        <a href="{{ $paginator->url($page) }}"
                           class="{{ $page == $paginator->currentPage() ? 'bg-blue-gradient text-blue' : 'text-text-color hover:bg-blue-gradient' }} relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            </span>
        </div>
    </nav>
@endif
