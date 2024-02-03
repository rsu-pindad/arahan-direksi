            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @include('components.layouts.notif')
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-user-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a 
                                href="/profile" 
                                class="dropdown-item" 
                                wire:navigate>
                                <i class="fas fa-user-edit"></i>
                                <span class="float-right text-muted text-sm">Profile</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a 
                                class="dropdown-item" 
                                href="/logout" 
                                role="button" 
                                wire:navigate 
                                wire:confirm="Are you sure you want to delete this post?">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="float-right text-muted text-sm">Keluar</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">{{ auth()->user()->npp ?? '' }}</a>
                        </div>
                    </li>
                </ul>
            </nav>