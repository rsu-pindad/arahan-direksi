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
                        <h4>{{$arahan->nama_arahan}}</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Dibuat pada</span>
                                <span class="info-box-number text-center text-muted mb-0">{{$arahan->created_at}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Target Selesai</span>
                                <span class="info-box-number text-center text-muted mb-0">{{$arahan->target_selesai}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Sisa Hari</span>
                                @php
                                    $target = Carbon::parse($arahan->target_selesai);
                                    $nows = Carbon::now();
                                    $deadline = $target->diffInDays($nows);
                                @endphp
                                <span class="info-box-number text-center text-muted mb-0">{{$deadline}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5>aktivitas arahan terbaru</h5>
                            <div class="post">
                                <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="https://api.dicebear.com/7.x/bottts/svg" alt="user image">
                                <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                <span class="description">Shared publicly - 7:45 PM today</span>
                                </div>
                                <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore.
                                </p>
                                <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                </p>
                            </div>
                            <div class="post clearfix">
                                <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="https://api.dicebear.com/7.x/adventurer/svg" alt="User Image">
                                <span class="username">
                                <a href="#">Sarah Ross</a>
                                </span>
                                <span class="description">Sent you a message - 3 days ago</span>
                                </div>
                                <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore.
                                </p>
                                <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="https://api.dicebear.com/7.x/croodles/svg" alt="user image">
                                <span class="username">
                                <a href="#">Jonathan Burke Jr.</a>
                                </span>
                                <span class="description">Shared publicly - 5 days ago</span>
                                </div>
                                <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore.
                                </p>
                                <p>
                                <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-bullseye"></i>&nbsp;Output Arahan</h3>
                    <p class="text-muted">{{$arahan->output_arahan}}</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Dibuat oleh
                            <b class="d-block">{{$arahan->user_profile->nama_profile}}</b>
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
                        <a href="#" class="btn btn-sm btn-primary">Add files</a>
                        <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
   </div>
<!-- End Template -->
