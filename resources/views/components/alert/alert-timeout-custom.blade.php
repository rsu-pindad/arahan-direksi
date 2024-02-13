<div>
    @if(session()->has('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> </h5>
                {{ session()->get('success') }}
            </div>
        </div>
    @elseif(session()->has('failure'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i></h5>
                {{ session()->get('failure') }}
            </div>
        </div>
    @endif
</div>