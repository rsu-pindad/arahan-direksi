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
                        <p>
                            {{$pic->level_pic}}
                        </p>
                        <p>
                            {{$pic->nama_pic}}
                        </p>
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