<!-- Template -->
<div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-12">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item active">Assign Arahan</li>
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
                        <h3 class="card-title">Assign Arahan</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                           </button>
                        </div>
                     </div>
                     <div class="card-body">
                        <form wire:submit="save">
                            <div class="form-group">
                              <label for="arahan_id">Arahan</label>
                              <select wire:model.lazy="form.arahan_id" class="custom-select rounded-0">
                                 <option readonly selected>pilih deskripsi arahan</option>
                                 @foreach(\App\Models\MasterArahan::where('assign_status', 0)->get() as $ar)
                                       <option value="{{$ar->id}}">{{$ar->nama_arahan}}</option>
                                 @endforeach
                              </select>
                              @error('form.arahan_id') <div class="alert alert-danger">{{ $message }}</div> @enderror 
                            </div>
                            <div class="form-group">
                              <label for="progress_id">Pilih Progress</label>
                              <select wire:model.lazy="form.progress_id" class="custom-select rounded-0">
                                 <option readonly selected>pilih Progress</option>
                                 @foreach(\App\Models\MasterProgress::all() as $pro)
                                 <option value="{{$pro->id}}">{{$pro->status_progress}}</option>
                                 @endforeach
                              </select>
                              @error('form.progress_id') <div class="alert alert-danger">{{ $message }}</div> @enderror 
                            </div>
                            <button class="btn btn-primary" type="submit">Assign</button>
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
                     <!-- <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"> -->
                        <div class="alert alert-danger alert-dismissible">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h5><i class="icon fas fa-ban"></i></h5>
                           {{ session('failure') }}
                        </div>
                     <!-- </div> -->
                     @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->