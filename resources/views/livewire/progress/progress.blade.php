<!-- Template -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-12">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">
                        Progress
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/table/progress" wire:navigate>Tabel Progress</a>
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
                  <div class="card card-secondary card-outline">
                     <div class="card-header">
                        <h3 class="card-title">Progress</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                           </button>
                        </div>
                     </div>
                     <div class="card-body">
                        <form 
                           wire:submit.prevent="save">
                            <div class="form-group">
                              <input 
                                 type="text" 
                                 placeholder="masukan nama progress" 
                                 class="form-control" 
                                 wire:model="status_progress">
                                @error('status_progress') <p class="error">{{ $message }}</p> @enderror     
                            </div>
                            <button class="btn btn-primary" type="submit">simpan</button>
                        </form>
                     </div>
                     <div class="card-footer">
                        @include('components.alert.alert-timeout-custom')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->