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
                        <form>
                            <div class="form-group">
                                <label for="form.pic_id">Pilih Level PIC <sup>*</sup></label>
                                <select wire:model.change="form.pic_id" class="custom-select rounded-0">
                                    <option disabled>pilih level pic</option>
                                    @foreach($this->getPic as $p)
                                       @if($p->id != $this->getProfileId->pic_id)
                                       <option value="{{$p->id}}">{{$p->nama_pic}}</option>
                                       @endif
                                    @endforeach
                                </select>
                                @error('form.pic_id') <p class="alert alert-danger">{{ $message }}</p> @enderror 
                            </div>
                            <div class="form-group">
                                <label for="nama_profile">Nama Profile</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="{{ $this->getProfileIdthis->getProfileId->nama_profile ?? 'masukan nama profile' }}" 
                                    value="{{ $this->getProfileId->nama_profile ?? '' }}"
                                    wire:model="form.nama_profile">
                                @error('form.nama_profile') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_handphone_profile">Nomor Telephone</label>
                                <input 
                                    type="tel" 
                                    class="form-control" 
                                    placeholder="{{ $this->getProfileId->nomor_handphone_profile ?? 'masukan nomor telepon' }}"
                                    value="{{ $this->getProfileId->nomor_handphone_profile ?? '' }}"
                                    wire:model="form.nomor_handphone_profile">
                                @error('form.nomor_handphone_profile') <p class="alert alert-danger">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    placeholder="{{ $this->getProfileId->email ?? 'masukan email' }}" 
                                    value="{{ $this->getProfileId->email ?? '' }}"
                                    wire:model="form.email">
                                    @error('form.email') <p class="alert alert-danger">{{ $message }}</p> @enderror
                                </div>
                            <button 
                              class="btn btn-primary mb-2 btn-block" 
                              type="submit"
                              wire:click.prevent='save'><i class="fas fa-pen-square fa-lg"></i></button>
                            <button 
                              class="btn btn-warning btn-block" 
                              type="submit"
                              wire:click.prevent='clear'>
                              <i class="fas fa-eraser fa-lg"></i>
                              </button>
                        </form>
                     </div>
                     <div class="card-footer">
                        @include('components.alert.alert-timeout-custom')
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="card card-primary card-outline">
                     <div class="card-header">
                        <button
                           class="btn btn-secondary btn-sm"
                           wire:click='$refresh'>
                           <i class="fas fa-sync"></i>
                        </button>
                     </div>
                     <div class="card-body box-profile" wire:ignore.self>
                        <div class="text-center">
                           <img class="profile-user-img img-fluid img-circle" src="https://api.dicebear.com/7.x/bottts/svg" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">
                           {{$this->getProfileId->nama_profile ?? 'mohon isi profile'}}
                        </h3>
                        <p class="text-muted text-center">{{$this->getProfileId->pic->nama_pic ?? 'mohon isi profile'}}</p>
                        <p class="text-muted text-center">{{$this->getProfileId->nomor_handphone_profile ?? 'mohon isi profile'}}</p>
                        <p class="text-muted text-center">{{$this->getProfileId->email ?? 'mohon isi profile'}}</p>
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
