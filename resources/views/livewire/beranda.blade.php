<!-- Template -->
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>Beranda</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item active">Beranda</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <section class="content">
         <div class="container-fluid"> 
            <div class="row">
               <div class="col-3">
                  @include('livewire.mist.sticky-arahan')
               </div>
               <div class="col-3">
                  @include('livewire.mist.sticky-progress')
               </div>
               <div class="col-9">
                  <div class="row">
                     @include('livewire.widget.widget')
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->