@if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}

    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
    </div>
@endif


@if (session('info'))
    <div class="alert alert-info text-center">
        {{ session('info') }}
    </div>
@endif