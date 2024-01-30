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
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                        Pic
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a wire:navigate href="/pic" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Data Pic</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a href="../widgets.html" class="nav-link">
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                        Widgets
                        <span class="right badge badge-danger">New</span>
                     </p>
                  </a>
               </li>
               <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                     <i class="nav-icon fas fa-copy"></i>
                     <p>
                        Layout Options
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="../layout/top-nav.html" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Top Navigation</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-header">EXAMPLES</li>
               <li class="nav-item">
                  <a href="../calendar.html" class="nav-link">
                     <i class="nav-icon far fa-calendar-alt"></i>
                     <p>
                        Calendar
                        <span class="badge badge-info right">2</span>
                     </p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="../gallery.html" class="nav-link">
                     <i class="nav-icon far fa-image"></i>
                     <p>
                        Gallery
                     </p>
                  </a>
               </li>
               <li class="nav-header">MULTI LEVEL EXAMPLE</li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="fas fa-circle nav-icon"></i>
                     <p>Level 1</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-circle"></i>
                     <p>
                        Level 1
                        <i class="right fas fa-angle-left"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Level 2</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>
                              Level 2
                              <i class="right fas fa-angle-left"></i>
                           </p>
                        </a>
                        <ul class="nav nav-treeview">
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-dot-circle nav-icon"></i>
                                 <p>Level 3</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-dot-circle nav-icon"></i>
                                 <p>Level 3</p>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="far fa-dot-circle nav-icon"></i>
                                 <p>Level 3</p>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">
                           <i class="far fa-circle nav-icon"></i>
                           <p>Level 2</p>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-header">LABELS</li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon far fa-circle text-danger"></i>
                     <p class="text">Important</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon far fa-circle text-warning"></i>
                     <p>Warning</p>
                  </a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon far fa-circle text-info"></i>
                     <p>Informational</p>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </aside>