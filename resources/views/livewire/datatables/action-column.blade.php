<div>
    @isset($viewLink)
        <a 
            href="{{ $viewLink }}"
            class="badge badge-info"
            wire:navigate>
            lihat
        </a>
    @endif
    @isset($editLink)
        <a 
            href="{{ $editLink }}"
            class="badge badge-dark"
            wire:navigate>
            edit
        </a>
    @endif
    @isset($deleteLink)
        <button
            type="button"
            class="btn btn-xs btn-danger"
            wire:click="delete({{$deleteLink}})"
            wire:confirm="Anda yakin?"
            >
            hapus 
        </button>
    @endif
</div>