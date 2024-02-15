<div class="mt-2">
    @if(session()->has('success'))
        {{-- <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show"> --}}
            <div class="alert alert-success alert-dismissible">
                <span><i class="icon fas fa-check fa-lg"></i> 
                {{ session()->get('success') }}</span>
            </div>
        {{-- </div> --}}
    @elseif(session()->has('failure'))
        {{-- <div x-data="{show: true}" x-init="setTimeout(() => show = false, 50000)" x-show="show"> --}}
            <div class="alert alert-danger alert-dismissible">
                <span><i class="icon fas fa-ban fa-lg"></i> 
                {{ session()->get('failure') }}</span>
            </div>
        {{-- </div> --}}
    @endif
</div>