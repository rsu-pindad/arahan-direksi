   <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a wire:navigate href="/beranda" class="brand-link">
      <img src="https://api.dicebear.com/7.x/lorelei/svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$title ?? 'RSU Pindad'}}</span>
      </a>
      <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               <img src="https://api.dicebear.com/7.x/bottts/svg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
               <a wire:navigate href="/profile" class="d-block">{{auth()->user()->npp ?? 'RSU'}}</a>
            </div>
         </div>
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-header">MASTER</li>

               <li 
                  class="nav-item 
                  {{ Route::is('arahan') ? 'menu-is-opening menu-open' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="nav-icon far fa-envelope"></i>
                     <p>
                        Deskripsi Arahan
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a 
                           href="/arahan" 
                           class="nav-link {{ Route::is('arahan') ? 'active' : '' }}"
                           wire:navigate>
                           <i class="far fa-circle nav-icon"></i>
                           <p>Menetapkan Arahan</p>
                        </a>
                     </li>
                  </ul>
               </li>

               @if(Route::is('progress') or Route::is('progress-table'))
                  <li class="nav-item menu-is-opening menu-open">
                  @else
                  <li class="nav-item">
               @endif
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-tasks"></i>
                     <p>
                        Progress
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a  
                           href="/progress" 
                           class="nav-link {{ Route::is('progress') ? 'active' : '' }}"
                           wire:navigate>
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data Progress</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a 
                           href="/progress/table" 
                           class="nav-link {{ Route::is('progress-table') ? 'active' : '' }}"
                           wire:navigate>
                           <i class="far fa-circle nav-icon"></i>
                           <p>Tabel Progress</p>
                        </a>
                     </li>
                  </ul>
               </li>
               @if(Route::is('pic') or Route::is('pic-table'))
                  <li class="nav-item menu-is-opening menu-open">
                  @else
                  <li class="nav-item">
               @endif
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-user-tag"></i>
                     <p>
                        PIC
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a  
                           href="/pic" 
                           class="nav-link {{ Route::is('pic') ? 'active' : '' }}"
                           wire:navigate>
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data PIC</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a 
                           href="/pic/table" 
                           class="nav-link {{ Route::is('pic-table') ? 'active' : '' }}"
                           wire:navigate>
                           <i class="far fa-circle nav-icon"></i>
                           <p>Tabel PIC</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-header">TUGAS</li>
               <li class="nav-item {{ Route::is('assign-arahan') ? 'menu-is-opening menu-open' : '' }}">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-paper-plane"></i>
                     <p>
                        Menetapkan Arahan
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a 
                           href="/assign-arahan" 
                           class="nav-link {{ Route::is('assign-arahan') ? 'active' : '' }}"
                           wire:navigate>
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data Menetapkan Arahan</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-header">MONITOR</li>
               <li class="nav-item">
                  <a 
                     href="/progress-arahan" 
                     class="nav-link {{ Route::is('progress-arahan') ? 'active' : '' }}" 
                     wire:navigate>
                     <i class="nav-icon fas fa-mail-bulk"></i>
                     <p>
                        Progress Arahan
                     </p>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </aside>