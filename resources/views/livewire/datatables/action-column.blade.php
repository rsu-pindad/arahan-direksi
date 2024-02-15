<div class="text-right py-0 align-middle">
    <div claas="btn-group btn-group-sm p-2">
    @isset($viewLink)
        <a 
            href="{{ $viewLink }}"
            class="btn btn-s btn-info"
            wire:navigate>
            <i class="fas fa-eye"></i>
        </a>
    @endif
    @isset($editLink)
        <a 
            href="{{ $editLink }}"
            class="btn btn-s btn-secondary"
            wire:navigate>
            <i class="fas fa-pen-square"></i>
        </a>
    @endif
    @isset($deleteLink)
        <button
            type="button"
            class="btn btn-s btn-danger"
            wire:click="delete({{$deleteLink}})"
            wire:confirm="Anda yakin?"
            >
            <i class="fas fa-trash"></i>
        </button>
    @endif
    </div>
</div>