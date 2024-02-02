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
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon far fa-envelope"></i>
                     <p>
                        Deskripsi Arahan
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a wire:navigate href="/arahan" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data Deskripsi Arahan</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-tasks"></i>
                     <p>
                        Progress
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a wire:navigate href="/progress" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data Progress</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a wire:navigate href="/table/progress" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Tabel Progress</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-user-tag"></i>
                     <p>
                        PIC
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a wire:navigate href="/pic" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data PIC</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a wire:navigate href="/table/pic" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Tabel PIC</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-header">TUGAS</li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-paper-plane"></i>
                     <p>
                        Assign Arahan
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a wire:navigate href="/assign-arahan" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data Assign Arahan</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-header">MONITOR</li>
               <li class="nav-item">
                  <a href="/progress-arahan" class="nav-link" wire:navigate>
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