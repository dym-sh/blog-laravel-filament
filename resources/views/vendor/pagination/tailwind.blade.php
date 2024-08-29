@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="h-10 font-semibold text-gray-800 hover:text-white hover:bg-blue-600 text-sm flex items-center justify-center flex flex-nowrap gap-2 px-4">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="h-10 font-semibold text-gray-800 hover:text-white hover:bg-blue-600 text-sm flex items-center justify-center px-4 flex flex-nowrap gap-2 content-center justify-center">
                    {!! __('pagination.next') !!}
                </a>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse rounded-md">
                    {{-- Previous Page Link --}}
                    @if (!$paginator->onFirstPage())
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="h-10 font-semibold text-gray-800 hover:text-white hover:bg-blue-600 text-sm flex items-center justify-center flex flex-nowrap gap-2 px-4" aria-label="{{ __('pagination.previous') }}">
                            <i class="fas fa-arrow-left"></i>
                            Prev
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="h-10 font-semibold text-gray-800 hover:text-white hover:bg-blue-600 text-sm flex items-center justify-center px-4 flex flex-nowrap gap-2" aria-label="{{ __('pagination.next') }}">
                                Next
                                <i class="fas fa-arrow-right"></i>
                        </a>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
