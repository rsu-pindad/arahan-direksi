<!-- Template -->
    <div class="content-wrapper kanban">
    @use('Illuminate\Support\Str')
    @use('Carbon\Carbon')
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
                @foreach(\App\Models\PivotArahanProgress::all() as $piv)
                    @if($piv->progress_id === $p->id)
                    <div class="card card-secondary card-outline m-4" wire:key="{{ $piv->id }}">
                        <div class="card-header">
                            <a href="/progress-arahan/{{$piv->arahan->id}}" wire:navigate>    
                                <h5 class="card-title">
                                    {{ Str::limit($piv->arahan->nama_arahan,15) }}
                                </h5>
                            </a>
                            <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-link">#</a>
                            <a href="#" class="btn btn-tool"><i class="fas fa-pen"></i></a>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <p class="lead text-truncate">{{ $piv->arahan->output_arahan }}</p>
                        </div>
                        <div class="card-footer">
                            <div>
                                Target&nbsp;:&nbsp;
                                @php
                                    $now = Carbon::now();
                                    $target = Carbon::parse($piv->arahan->target_selesai);
                                @endphp
                                @if( $target > Carbon::now())
                                    {{$target->diffForHumans()}}
                                @else
                                    @if($piv->progress->status_progress == "done")
                                        Tercapai
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
