@if ($paginator->hasPages())
   


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="page-item disabled"><span class="page-link">{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-item selected"><span class="page-link">{{ $page }}</span></a>
                    @else
                        <span class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <span class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></span>
        @else
            <a class="page-item disabled"><span class="page-link">&raquo;</span></a>
        @endif
   
@endif
