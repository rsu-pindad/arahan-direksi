<!-- Template -->
    <div class="content-wrapper">
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Deskripsi Arahan</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <h4>{{$arahan->nama_arahan ?? ''}}</h4>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Dibuat pada</span>
                                <span class="info-box-number text-center text-muted mb-0">{{Carbon::parse($arahan->created_at ?? '')->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Target selesai</span>
                                <span class="info-box-number text-center text-muted mb-0">{{Carbon::parse($arahan->target_selesai ?? '')->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Sisa hari</span>
                                @php
                                    $target = Carbon::parse($arahan->target_selesai ?? '');
                                    $nows = Carbon::now();
                                    $deadline = $target->diffInDays($nows);
                                @endphp
                                    <span class="info-box-number text-center text-muted mb-0">{{$deadline ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="dropdown-divider"></div>
                            <h5>aktivitas arahan terbaru</h5>
                            <div class="dropdown-divider"></div>
                            {{-- <livewire: lazy/> --}}
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-bullseye"></i>&nbsp;Output Arahan</h3>
                    <h4 class="text-muted mb-2">{{$arahan->output_arahan ?? ''}}</h4>
                    <h4 class="text-primary mt-2"><i class="fas fa-tag"></i>&nbsp;Status Arahan</h4>
                        <h5>
                            <span class="badge badge-info badge-lg">
                                {{$pivot->progress->status_progress ?? ''}}
                            </span>
                        </h5>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">ditujukan untuk
                            <b class="d-block">{{$arahan->user_profile->nama_profile ?? ''}}</b>
                        </p>
                        <p class="text-sm">email
                            <b class="d-block">{{$arahan->user_profile->email ?? '' }}</b>
                        </p>
                    </div>
                    <h5 class="mt-5 text-muted">Project files</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                        </li>
                    </ul>
                    <div class="text-center mt-5 mb-3">
                        <a href="#" class="btn btn-sm btn-primary">tambah berkas</a>
                        <a href="#" class="btn btn-sm btn-danger">emergency</a>
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">dispath</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="content">
        <div class="card">
            <div 
                class="card-body" 
                id="komentarArahan">
                {{-- wire:ignore.self> --}}
                @foreach($mastercomment as $mc)
                    @include('livewire.arahan.aktivitas.arahan-aktivitas-komentar')
                @endforeach    
            </div>
        </div>
        </section>
        <section class="content">
        <div class="card">
            <div class="card-header">
                <h4># Berikan tanggapan</h4>
            </div>
            <div 
                class="card-body">
                {{-- wire:ignore.self> --}}
                @include('livewire.arahan.aktivitas.arahan-aktivitas')   
            </div>
        </div>
        </section>
        <section class="content">
            @include('livewire.arahan.aktivitas.modal.aktivitas-modal-dispath')
        </section>
   </div>
<!-- End Template -->
