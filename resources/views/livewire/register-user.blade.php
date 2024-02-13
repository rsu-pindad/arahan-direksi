    <div class="login-box">
        <div class="login-logo">
        @include('components.alert.alert-custom')
        </div>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="input-group mb-3">
                        <input 
                            type="text" 
                            class="form-control" 
                            placeholder="masukan npp"
                            wire:model="npp">
                    </div>
                    @error('npp')
                        <p class="text text-danger text-md">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="input-group mb-3">
                        <input 
                            type="password" 
                            class="form-control"
                            placeholder="masukan password" 
                            wire:model="password">
                    </div>
                    @error('password')
                        <p class="text text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="row">
                        <div class="col">
                        <button 
                                type="submit" 
                                class="btn btn-primary btn-block"  
                                wire:click.prevent="save" 
                                wire:loading.attr="disabled" 
                                wire:loading.longest.remove>register</button>
                            <div class="overlay"
                                wire:loading wire:target="save">
                              <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-flex flex-column mt-2">
                    <p class="mb-2">
                        <a 
                            href="/login" 
                            wire:navigate>
                            login
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>