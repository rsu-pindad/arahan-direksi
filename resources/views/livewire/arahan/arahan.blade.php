<!-- Template -->
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-12">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item active">Arahan</li>
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
                        <h3 class="card-title">Arahan</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                           </button>
                        </div>
                     </div>
                     <div class="card-body">
                        <form wire:submit="save">
                           <div class="form-group">
                              <label for="select_pic">Pilih Level PIC</label>
                              <select wire:model.live="select_pic" class="custom-select rounded-0">
                                 <option readonly selected>pilih level pic</option>
                                 @foreach(\App\Models\MasterPic::all() as $pic)
                                 <option value="{{$pic->id}}">{{$pic->nama_pic}}</option>
                                 @endforeach
                              </select>
                              @error('form.pic_id') <div class="alert alert-danger">{{ $message }}</div> @enderror 
                           </div>
                           <div class="form-group">
                              <label for="user_profile_id">Pilih User</label>
                              <select wire:model.lazy="form.user_profile_id" class="custom-select rounded-0" wire:key="{{ $select_pic }}">
                                 <option readonly selected>pilih user</option>
                                 @foreach(\App\Models\UserProfile::where('pic_id', $select_pic)->get() as $up)
                                 <option value="{{$up->id}}">{{$up->nama_profile}}</option>
                                 @endforeach
                              </select>
                              @error('form.user_profile_id') <p class="alert alert-danger">{{ $message }}</p> @enderror 
                           </div>
                           <div class="form-group">
                              <label for="nama_arahan">Nama Arahan</label>
                              <input type="text" class="form-control" placeholder="masukan nama arahan" wire:model="form.nama_arahan">
                              @error('form.nama_arahan') <p class="alert alert-danger">{{ $message }}</p> @enderror
                           </div>
                           <div class="form-group">
                              <label for="output_arahan">Output Arahan</label>
                              <input type="text" class="form-control" placeholder="masukan nama output" wire:model="form.output_arahan">
                              @error('form.output_arahan') <p class="alert alert-danger">{{ $message }}</p> @enderror
                           </div>
                           <div class="form-group">
                              <label for="target_selesai">Target Selesai</label>
                              <input type="date" class="form-control" wire:model="form.target_selesai">
                              @error('form.target_selesai') <p class="alert alert-danger">{{ $message }}</p> @enderror
                           </div>
                           <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                     </div>
                     <div class="card-footer">
                     @if(session()->has('success'))
                     <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                        <div class="alert alert-success alert-dismissible">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h5><i class="icon fas fa-check"></i> </h5>
                           {{ session('success') }}
                        </div>
                     </div>
                     @elseif(session()->has('failure'))
                     <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                        <div class="alert alert-danger alert-dismissible">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h5><i class="icon fas fa-ban"></i></h5>
                           {{ session('failure') }}
                        </div>
                     </div>
                     @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->
