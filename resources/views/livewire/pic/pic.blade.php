<div>
    <form wire:submit="save">
        <input type="number" value="1" min="1" max="6" wire:model="level_pic">
        <div>
            @error('level_pic') <span class="error">{{ $message }}</span> @enderror 
        </div>
        
        <input type="text" placeholder="masukan nama level pic" wire:model="nama_pic">
        <div>
            @error('nama_pic') <span class="error">{{ $message }}</span> @enderror 
        </div>
    
        <button type="submit">simpan</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('failure'))
        <div class="alert alert-danger">
            {{ session('failure') }}
        </div>
    @endif
</div>
