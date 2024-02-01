<div>

    <form wire:submit="save">
        <input type="text" wire:model="npp">
        <div>
            @error('npp') <span class="error">{{ $message }}</span> @enderror 
        </div>
    
        <input type="password" wire:model="password">
        <div>
            @error('password') <span class="error">{{ $message }}</span> @enderror 
        </div>
    
        <button type="submit">Save</button>
    </form>

    @if(session('failure'))
        <div class="alert alert-success">
            {{ session('failure') }}
        </div>
    @endif

</div>
