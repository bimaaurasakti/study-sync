<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast overflow-hidden" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000">
        <div class="toast-body position-relative">
            @if ($status == 'success')
                <div class="toast-left-border bg-success d-flex px-1"></div>
            @elseif($status == 'failed')
                <div class="toast-left-border bg-danger d-flex px-1"></div>
            @endif

            <div class="d-flex align-items-center ps-2">
                @if ($status == 'success')
                    <i class="bi bi-check-circle-fill text-success h1 mb-0 me-3"></i>
                @elseif($status == 'failed')
                    <i class="bi bi-x-circle-fill text-danger h1 mb-0 me-3"></i>
                @endif
                <div>
                    <p class="fw-bold text-capitalize mb-0">{{ $status }}</p>
                    <p class="mb-0">{{ $message }}</p>
                </div>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>