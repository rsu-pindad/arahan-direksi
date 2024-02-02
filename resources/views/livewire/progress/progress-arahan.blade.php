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
            @use('Illuminate\Support\Str')
            @use('Carbon\Carbon')
            @foreach($progress as $p)
            <div class="card card-row card-primary" wire:key="{{ $p->id }}">
                <div class="card-header">
                    <h3 class="card-title">
                        {{$p->status_progress}}
                    </h3>
                </div>
                <div class="card-body">
                @foreach(\App\Models\PivotArahanProgress::all() as $piv)
                    @if($piv->progress_id == $p->id)
                    <div class="card card-primary card-outline" wire:key="{{ $piv->id }}">
                        <a href="/progress-arahan/{{$piv->arahan->id}}" wire.navigate>
                        <div class="card-header">
                            <h5 class="card-title">{{ Str::limit($piv->arahan->nama_arahan,15) }}</h5>
                            <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-link">#</a>
                            <a href="#" class="btn btn-tool">
                            <i class="fas fa-pen"></i>
                            </a>
                            </div>
                        </div>
                        </a>
                        
                        <div class="card-body">
                            <p class="lead text-truncate">{{ $piv->arahan->output_arahan }}</p>
                        </div>
                        <div class="card-footer">
                            <div>
                                Target&nbsp;:&nbsp;
                                @if($piv->arahan->target_selesai > Carbon::now())
                                    {{Carbon::parse($piv->arahan->target_selesai)->diffForHumans()}}
                                @else
                                    @if($piv->progress->status_progress == "done")
                                        Ok
                                    @else
                                        Melebihi target
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
            @endforeach
        </div>
      </section>
    </div>
<!-- End Template -->
