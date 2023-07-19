@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                    @else

            @endif

            {{-- More Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.more')">More</a>
                </li>
            @endif
        </ul>
    </nav>
    <style>
        .pagination {
            margin: 5%;
            justify-content: flex-start;
        }
        .pagination li {
                            list-style: none;
                        }
    </style>

@endif
