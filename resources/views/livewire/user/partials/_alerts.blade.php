@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif
@if (session()->has('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
@endif