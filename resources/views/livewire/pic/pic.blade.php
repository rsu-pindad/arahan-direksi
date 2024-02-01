<!-- Template -->
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-12">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item active">PIC</li>
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
                        <h3 class="card-title">Level PIC</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                     <div class="card-body">
                        <form wire:submit="save">
                            <div class="form-group">
                            <input type="number" placeholder="masukan nomor level" min="1" max="6" class="form-control" wire:model="level_pic" place>
                                @error('level_pic') <p class="error">{{ $message }}</p> @enderror     
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="masukan nama level pic" class="form-control" wire:model="nama_pic">
                                @error('nama_pic') <p class="error">{{ $message }}</p> @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">simpan</button>
                        </form>
                     </div>
                     <div class="card-footer">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session()->has('failure'))
                            <div class="alert alert-danger">
                                {{ session('failure') }}
                            </div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="content content-table">
        <livewire:pic.pic-table></livewire:pic.pic-table>
      </section>
   </div>
<!-- End Template -->