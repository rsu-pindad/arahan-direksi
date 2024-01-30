<!-- Template -->
<div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>User Profile</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Layout</a></li>
                     <li class="breadcrumb-item active">Collapsed Sidebar</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">{{auth()->user()->npp}}</h3>
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
                                <label for="pic_id">Pilih Level PIC <sup>*</sup></label>
                                <select wire:model="form.pic_id" class="custom-select rounded-0">
                                    <option disabled>pilih level pic</option>
                                    @foreach($pic as $p)
                                    <option value="{{$p->id}}">{{$p->nama_pic}}</option>
                                    @endforeach
                                </select>
                                @error('form.pic_id') <p class="error text-error">{{ $message }}</p> @enderror 
                            </div>
                            <div class="form-group">
                                <label for="nama_profile">Nama Profile</label>
                                <input type="text" class="form-control" placeholder="masukan nama profile" wire:model="form.nama_profile">
                                @error('form.nama_profile') <p class="error text-error">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_handphone_profile">Nomor Telephone</label>
                                <input type="tel" class="form-control" placeholder="masukan nomor telepon" wire:model="form.nomor_handphone_profile">
                                @error('form.nomor_handphone_profile') <p class="error">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control"placeholder="masukan email" wire:model="form.email">
                                    @error('form.email') <p class="error">{{ $message }}</p> @enderror
                                </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                     </div>
                     <div class="card-footer">
                        <b>*</b><small>: harus di isi</small>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->
