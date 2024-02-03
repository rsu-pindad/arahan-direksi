<div>
    @if(session()->has('success'))
    <div class="container-fluid text-md p-2 alert alert-success">
        <span class="text-lowercase">
            {{ session()->get('success') }}
        </span>
    </div>
    @endif
    @if(session()->has('failure'))
    <div class="container-fluid text-md p-2 alert alert-danger">
        <span class="text-lowercase">
            {{ session()->get('failure') }}
        </span>
    </div>
    @endif
</div>