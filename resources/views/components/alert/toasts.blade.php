<div wire:ignore.self>
    @if(session()->has('success'))
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message. A
    </div>
    </div>
    @elseif(session()->has('failure'))
    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" id="toastsDefault">
        <div class="toast-header">
            <i class="mr-2 fas fa-envelope fa-lg"></i>
            <strong class="mr-auto">error</strong>
            <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <div class="toast-body text-danger">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
    </div>
    @endif

    @push('scripts')
        <script>
            $('#toastsDefault').toast('dispose');
        </script>
    @endpush

</div>