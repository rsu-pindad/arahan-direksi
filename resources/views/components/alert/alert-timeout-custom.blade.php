<div wire:ignore.self>
    @if(session()->has('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 10000)" x-show="show">
            <p class="alert alert-success alert-dismissible">
            <i class="icon fas fa-check fa-lg"></i> 
            {{ session()->get('success') }}
            </p>
        </div>
    @elseif(session()->has('failure'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 50000)" x-show="show">
            <p class="alert alert-danger alert-dismissible">
            <i class="icon fas fa-ban fa-lg"></i> 
            {{ session()->get('failure') }}
            </p>
        </div>
    @endif
</div>