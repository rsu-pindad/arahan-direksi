<!-- Template -->
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-12">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item active">User Profile</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="card card-secondary card-outline">
                     <div class="card-header">
                        <h3 class="card-title">NPP {{auth()->user()->npp ?? ''}}</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                           </button>
                        </div>
                     </div>
                     <div class="card-body">
                        <form wire:submit="save">
                            <div class="form-group">
                                <label for="form.pic_id">Pilih Level PIC <sup>*</sup></label>
                                <select wire:model.change="form.pic_id" class="custom-select rounded-0">
                                    <option readonly selected>pilih level pic</option>
                                    @foreach($pic as $p)
                                       <option value="{{$p->id}}">{{$p->nama_pic}}</option>
                                    @endforeach
                                </select>
                                @error('form.pic_id') <p class="alert alert-danger">{{ $message }}</p> @enderror 
                            </div>
                            <div class="form-group">
                                <label for="nama_profile">Nama Profile</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="{{ $profiles->nama_profile ?? 'masukan nama profile' }}" 
                                    value="{{ $profiles->nama_profile ?? '' }}"
                                    wire:model="form.nama_profile">
                                @error('form.nama_profile') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_handphone_profile">Nomor Telephone</label>
                                <input 
                                    type="tel" 
                                    class="form-control" 
                                    placeholder="{{ $profiles->nomor_handphone_profile ?? 'masukan nomor telepon' }}"
                                    value="{{ $profiles->nomor_handphone_profile ?? '' }}"
                                    wire:model="form.nomor_handphone_profile">
                                @error('form.nomor_handphone_profile') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    placeholder="{{ $profiles->email ?? 'masukan email' }}" 
                                    value="{{ $profiles->email ?? '' }}"
                                    wire:model="form.email">
                                    @error('form.email') <p class="alert alert-danger">{{ $message }}</p> @enderror
                                </div>
                            <button class="btn btn-primary" type="submit">perbarui</button>
                        </form>
                     </div>
                     <div class="card-footer">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="card card-primary card-outline">
                     <div class="card-body box-profile">
                        <div class="text-center">
                           <img class="profile-user-img img-fluid img-circle" src="https://api.dicebear.com/7.x/bottts/svg" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">
                           {{$profiles->nama_profile ?? '' }}
                        </h3>
                        <p class="text-muted text-center">{{$profiles->pic->nama_pic ?? ''}}</p>
                        <p class="text-muted text-center">{{$profiles->nomor_handphone_profile ?? ''}}</p>
                        <p class="text-muted text-center">{{$profiles->email ?? ''}}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                           <li class="list-group-item">
                              <b>Arahan Selesai</b> <a class="float-right">x</a>
                           </li>
                           <li class="list-group-item">
                              <b>Total Arahan</b> <a class="float-right">x</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->
