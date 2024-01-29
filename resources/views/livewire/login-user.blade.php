<div>
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
    <form wire:submit="login">
        <input type="text" wire:model="npp">
        <div>
            @error('npp') <span class="error">{{ $message }}</span> @enderror 
        </div>
    
        <input type="password" wire:model="password">
        <div>
            @error('password') <span class="error">{{ $message }}</span> @enderror 
        </div>
    
        <button type="submit">masuk</button>
    </form>
</div>
