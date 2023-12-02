@if (session()->has('success'))
    <div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
            </div>
            <div class="ms-3">
                <div class="text-success">{{ session('success') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert border-0 bg-light-danger alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
            </div>
            <div class="ms-3">
                <div class="text-danger">{{ session('error') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('info'))
    <div class="alert border-0 bg-light-info alert-dismissible fade show py-2">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-info"><i class="bi bi-info-circle-fill"></i>
            </div>
            <div class="ms-3">
                <div class="text-info"> {{ session('info') }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
