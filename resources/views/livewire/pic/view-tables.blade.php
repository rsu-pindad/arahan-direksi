<!-- Template -->
   <div class="content-wrapper"> 
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-12">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item">
                        <a href="/pic" wire:navigate>PIC</a>
                     </li>
                     <li class="breadcrumb-item active">
                        Tabel PIC
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="card card-primary card-outline">
                     <div class="card-body">
                        @livewire('pic.pic-table', [
                           'lazy' => true,
                           'navigate' => true,
                           ])
                        <!-- <livewire:pic.pictable lazy /> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->