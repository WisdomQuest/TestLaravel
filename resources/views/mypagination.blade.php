@if ($paginator->hasPages())
    <nav>

        @if ($paginator->onFirstPage())
            <span>
{{--                    {!! __('pagination.previous') !!}--}}
                <p>предыдущая</p>

                </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">
                {{--                {!! __('pagination.previous') !!}--}}

                <p>предыдущая</p>

            </a>
        @endif



        {{--        ---------------------------------------------------------}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}


            @if (is_string($element))
                <span> {{ $element }}</span>

            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))

                @foreach ($element as $page => $url)


                    @if ($page == $paginator->currentPage())
                        <span>{{ $page }}</span>

                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{--        -------------------------------------------------------------------------------}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">
                {{--                    {!! __('pagination.next') !!}--}}
                <p>следующая</p>
            </a>
        @else
            <span>
{{--                    {!! __('pagination.next') !!}--}}

                   <p>следующая</p>
                </span>
        @endif
    </nav>
@endif


{{--@if ($paginator->hasPages())
    <nav>
        @if ($paginator->onFirstPage())
            <span>
                    {!! __('pagination.previous') !!}
                </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif
        --}}{{-- Pagination Elements --}}{{--
        @foreach ($elements as $element)
            --}}{{-- "Three Dots" Separator --}}{{--
            @if (is_string($element))
                <span> {{ $element }}</span>
            @endif
            --}}{{-- Array Of Links --}}{{--
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span>{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        --}}{{--        Next Page Link --}}{{--
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span>
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif--}}
