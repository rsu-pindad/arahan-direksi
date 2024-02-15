
    <div 
        class="post" 
        wire:key="{{$mc->id}}">
        @use('Carbon\Carbon')
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="https://api.dicebear.com/7.x/croodles/svg" alt="user image">
            <span class="username">
                <a href="#">{{$mc->user_profile->nama_profile}}</a>
            </span>
            <span class="description">{{Carbon::parse($mc->created_at)->diffForHumans()}}</span>
        </div>
        @if($editIdKomentar === $mc->id)
            <textarea
                class="form-control"  
                rows="6"
                wire:model='editBodyKomentar'></textarea>
                @error($editIdKomentar)
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
        @else
            <p>{{$mc->body}}</p>
        @endif
        <p>
            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
        </p>
        @if($mc->user_profile_id  == $profiles->id)
            <button type="button" class="btn btn-sm btn-info" wire:click.prevent="editKomentar('{{$mc->id}}')">edit</button>
            <button 
                type="button" 
                class="btn btn-sm btn-warning" 
                wire:click.prevent="hapusKomentar('{{$mc->id}}')"
                wire:confirm="apa anda yakin menghapus komentar">hapus</button>
        @else
            <button type="button" class="btn btn-sm btn-primary">balas</button>
        @endif
    </div>