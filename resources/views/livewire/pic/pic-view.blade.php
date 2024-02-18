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
                     <li class="breadcrumb-item">
                        <a href="/pic/table" wire:navigate>Tabel Pic</a>
                     </li>
                     <li class="breadcrumb-item active">
                        <b>{{Route::current()->id}}</b>
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
                        <h3 class="card-title">Level PIC</h3>
                     </div>
                     <div class="card-body">
                        <h2>Level : {{$pic->level_pic}}</h2>
                        <h2>Nama : {{$pic->nama_pic}}</h2>
                     </div>
                     <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="{{$previous}}" wire:navigate>«</a></li>
                            <li class="page-item"><a class="page-link" href="{{$next}}" wire:navigate>»</a></li>
                        </ul>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
<!-- End Template -->