    <!-- Login -->
    <div class="login-box">
        <div class="login-logo">
            <a href="#" class="text-muted"><b>AKSI</b></a>
            @include('components.alert.toasts')
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <form>
                    <div class="input-group mb-3">
                        <input  
                            type="text" 
                            class="form-control" 
                            placeholder="npp" 
                            autocomplete="off" 
                            wire:model="npp"
                            wire:loading.attr="disabled">   
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
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
                            placeholder="password" 
                            autocomplete="off" 
                            wire:model="password"
                            wire:loading.attr="disabled">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <p class="text text-danger text-md">
                            {{ $message }}
                        </p>
                    @enderror 
                    <div class="row">
                        <div class="col text-center">
                            <button 
                                type="submit" 
                                class="btn btn-primary btn-block"  
                                wire:click.prevent="login" 
                                wire:loading.attr="disabled" 
                                wire:loading.longest.remove>masuk</button>
                            <div class="overlay"
                                wire:loading wire:target="login">
                              <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-flex flex-column mt-2">
                    <p class="mb-2">
                        <a 
                            href="#" 
                            wire:navigate
                            wire:loading.longest.remove
                            wire:loading.attr="disabled">lupa password
                        </a>
                    </p>
                    <p class="mb-0">
                        <a 
                            href="/register" 
                            wire:navigate
                            wire:loading.longest.remove
                            wire:loading.attr="disabled">daftar
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->