<div class="login-box">
    @if(session()->has('success'))
        <span class="alert alert-success">
            {{ session('success') }}
        </span>
    @elseif(session()->has('failure'))
        <span class="alert alert-danger">
            {{ session('failure') }}
        </span>
    @endif
    
    <!-- Login -->
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>AKSI</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <form wire:submit="login">
                    <div class="input-group mb-3">
                        <input wire:model="npp" type="text" class="form-control" placeholder="Npp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('npp') <p class="text text-danger">{{ $message }}</p> @enderror 
                    <div class="input-group mb-3">
                        <input wire:model="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password') <p class="text text-danger">{{ $message }}</p> @enderror 
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">masuk</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="#">lupa password</a>
                </p>
                <p class="mb-0">
                    <a href="/register" class="text-center">register</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Login -->

</div>
