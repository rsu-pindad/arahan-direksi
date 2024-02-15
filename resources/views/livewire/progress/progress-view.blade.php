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
                        <a href="/progress/table" wire:navigate>Tabel Progress</a>
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
                        <p>
                           {{$progress->status_progress}}
                        </p>
                     </div>
                     <div class="card-footer clearfix">
                     <a 
                        href="/progress/table"
                        class="btn btn-secondary"
                        wire:navigate>
                     <i class="fas fa-backspace fa-lg"></i>
                     </a>
                     <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item">
                           <a class="page-link" href="{{$previous}}" wire:navigate>
                              <i class="fas fa-chevron-circle-right fa-lg"></i>
                           </a>
                        </li>
                        <li class="page-item">
                           <a class="page-link" href="{{$next}}" wire:navigate>
                              <i class="fas fa-chevron-circle-left fa-lg"></i>
                           </a>
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