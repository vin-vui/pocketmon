@if ($paginator->hasPages())
<nav class=" px-4 flex items-center justify-between sm:px-0">

    <div class="w-0 flex-1 flex">
        @if (!$paginator->onFirstPage())
        <button wire:click="previousPage" dusk="previousPage.after" rel="prev"
            aria-label="{{ __('pagination.previous') }}"
            class="-mt-px border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
            <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Previous
        </button>
        @endif
    </div>

    <div class="hidden md:flex">

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <span
                class="-mt-px border-t-2 border-transparent pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-gray-500">
                {{ $element }}
            </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                <span wire:key="paginator-page{{ $page }}">
                    @if ($page == $paginator->currentPage())
                    <button aria-current="page"
                        class="-mt-px border-t-2 border-pink-500 pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-pink-600 focus:outline-none focus:text-pink-800 focus:border-pink-700 transition ease-in-out duration-150">
                        {{ $page }}
                    </button>
                    @else
                    <button wire:click="gotoPage({{ $page }})" aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                        class="-mt-px border-t-2 border-transparent pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
                        {{ $page }}
                    </button>
                    @endif
                </span>
                @endforeach
            @endif
        @endforeach

    </div>

    <div class="w-0 flex-1 flex justify-end">

        @if($paginator->hasMorePages())
        <button wire:click="nextPage" dusk="nextPage.after" rel="next" aria-label="{{ __('pagination.next') }}"
            class="-mt-px border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
            Next
            <svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        @endif

    </div>

</nav>
@endif
