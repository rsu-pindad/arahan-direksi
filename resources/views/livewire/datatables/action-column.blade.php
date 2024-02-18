<div class="container text-center">
    <div claas="btn-group btn-group-md p-2">
    @isset($viewLink)
        <a 
            href="{{ $viewLink }}"
            class="btn btn-info"
            wire:navigate>
            <i class="fas fa-eye"></i>
        </a>
    @endif
    @isset($editLink)
        <a 
            href="{{ $editLink }}"
            class="btn btn-secondary"
            wire:navigate>
            <i class="fas fa-pen-square"></i>
        </a>
    @endif
    @isset($deleteLink)
        <button
            type="button"
            class="btn btn-danger"
            wire:click="delete({{$deleteLink}})"
            wire:confirm="Anda yakin menghapus data?"
            >
            <i class="fas fa-trash"></i>
        </button>
    @endif
    </div>
</div>