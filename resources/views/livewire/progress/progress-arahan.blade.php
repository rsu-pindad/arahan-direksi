<!-- Template -->
    <div class="content-wrapper kanban">
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
        @foreach($progress as $p)
            <div class="card card-row card-primary" wire:key="{{ $p->id }}">
                <div class="card-header">
                    <h3 class="card-title">
                        {{$p->status_progress}}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Create first milestone</h5>
                            <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-link">#5</a>
                            <a href="#" class="btn btn-tool">
                            <i class="fas fa-pen"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </section>
    </div>
<!-- End Template -->
