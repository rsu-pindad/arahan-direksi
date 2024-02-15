    <div class="post">
    @use('Carbon\Carbon')
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="https://api.dicebear.com/7.x/bottts/svg" alt="user image">
            <span class="username">
                <a href="#">{{ $profiles->nama_profile ?? 'masukan nama profile' }}</a>
            </span>
        </div>
        <form>
            <input 
                type="hidden"
                wire:model='form.user_profile_id'>
            <input 
                type="hidden"
                wire:model='form.arahan_id'>
            <input 
                type="hidden"
                wire:model='form.parent_id'>
            <textarea
                class="form-control"  
                rows="6"
                wire:model="form.body"
                ></textarea>
            <button
                type="button" 
                class="btn btn-sm btn-success mt-2"
                wire:click.prevent="post"><i class="fas fa-paper-plane fa-lg"></i>post</button>
            @error('form.body') <p class="alert alert-danger">{{ $message }}</p> @enderror
        </form>
        @include('components.alert.alert-timeout-custom')
    </div>
