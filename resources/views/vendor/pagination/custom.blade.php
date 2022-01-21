@if ($paginator->hasPages())
    <div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align gdlr-core-item-pdlr"  >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span aria-current="page" class="page-numbers current">&lsaquo;</span>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">&lsaquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers dots">&hellip;</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        @else
            <span aria-hidden="true">&rsaquo;</span>
        @endif
    </div>
@endif
