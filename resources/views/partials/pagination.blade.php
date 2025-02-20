@if ($items->lastPage() > 1)
<div class="row">
    <div class="col-12">
        <div class="tp-dashboard-pagination">
            <div class="tp-pagination">
                <nav>
                    <ul class="justify-content-center">
                        <!-- Previous Button -->
                        <li>
                            <a href="{{ $items->previousPageUrl() }}"
                                class="tp-pagination-prev prev page-numbers {{ $items->onFirstPage() ? 'disabled' : '' }}">
                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>

                        <!-- Page Numbers -->
                        @for ($i = 1; $i <= $items->lastPage(); $i++)
                            <li>
                                <a href="{{ $items->url($i) }}"
                                    class="{{ $items->currentPage() == $i ? 'current' : '' }}">
                                    {{ $i }}
                                </a>
                            </li>
                            @endfor

                            <!-- Next Button -->
                            <li>
                                <a href="{{ $items->nextPageUrl() }}"
                                    class="next page-numbers {{ $items->hasMorePages() ? '' : 'disabled' }}">
                                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endif
