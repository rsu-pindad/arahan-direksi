    <!-- Template -->
    <div class="content-wrapper">
        @push('styles')
            <style>
                .display-none {
                    display: none;
                }
                .multi-wizard-step p {
                    margin-top: 12px;
                }
                .stepwizard-row {
                    display: table-row;
                }
                .stepwizard {
                    display: table;
                    position: relative;
                    width: 100%;
                }
                .multi-wizard-step button[disabled] {
                    filter: alpha(opacity=100) !important;
                    opacity: 1 !important;
                }
                .stepwizard-row:before {
                    top: 14px;
                    bottom: 0;
                    content: " ";
                    width: 100%;
                    height: 1px;
                    z-order: 0;
                    position: absolute;
                    background-color: #fefefe;
                }
                .multi-wizard-step {
                    text-align: center;
                    position: relative;
                    display: table-cell;
                }
            </style>
        @endpush
        <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Tetapkan Arahan</li>
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
                            <h3 class="card-title">Menetapkan Arahan</h3>
                        </div>
                        <div class="card-body">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="multi-wizard-step">
                                        <a href="#step-1" type="button"
                                        class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Pilih PIC</span>
                                        </a>
                                    </div>
                                    <div class="multi-wizard-step">
                                        <a href="#step-2" type="button"
                                            class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Isi Data Arahan</span>
                                        </a>
                                    </div>
                                    <div class="multi-wizard-step">
                                        <a href="#step-3" type="button"
                                            class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">Target Arahan</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content mt-2 {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="select_pic">Pilih Level PIC</label>
                                            <select wire:model.live="select_pic" class="custom-select rounded-0">
                                                <option readonly selected>pilih level pic</option>
                                                @foreach(\App\Models\MasterPic::all() as $pic)
                                                <option value="{{$pic->id}}">{{$pic->nama_pic}}</option>
                                                @endforeach
                                            </select>
                                            @error('form.pic_id') <div class="alert alert-danger">{{ $message }}</div> @enderror 
                                        </div>
                                    <div class="form-group">
                                            <select wire:model.live="form.user_profile_id" class="custom-select rounded-0" wire:key="{{ $select_pic }}">
                                                <option readonly selected>pilih pic</option>
                                                @foreach(\App\Models\UserProfile::where('pic_id', $select_pic)->get() as $up)
                                                    @if($up->user_id != auth()->user()->id)
                                                    <option value="{{$up->id}}">{{$up->nama_profile}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('form.user_profile_id') <p class="alert alert-danger">{{ $message }}</p> @enderror 
                                        </div>
                                    <button class="btn btn-primary nextBtn btn-block pull-right" wire:click.prevent="firstStepSubmit"
                                        type="button"><i class="fas fa-chevron-circle-right fa-lg"></i></button>
                                </div>
                            </div>
                            <div class="row setup-content mt-2 {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama_arahan">Nama Arahan</label>
                                        <textarea 
                                            class="form-control" 
                                            rows="3" 
                                            placeholder="masukan nama arahan"
                                            wire:model="form.nama_arahan"></textarea>
                                        @error('form.nama_arahan') <p class="alert alert-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="output_arahan">Output Arahan</label>
                                        <textarea 
                                            class="form-control" 
                                            rows="3" 
                                            placeholder="masukan nama arahan"
                                            wire:model="form.output_arahan"></textarea>
                                        @error('form.output_arahan') <p class="alert alert-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <button class="btn btn-primary nextBtn btn-block mb-2 pull-right" type="button"
                                        wire:click="secondStepSubmit"><i class="fas fa-chevron-circle-right fa-lg"></i></button>
                                    <button class="btn btn-danger nextBtn btn-block pull-right" type="button" wire:click.prevent="back(1)">
                                        <i class="fas fa-chevron-circle-left fa-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row setup-content mt-2 {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
                                <div class="col-md-12">
                                <div class="form-group">
                                <label for="target_selesai">Target Selesai</label>
                                    <input type="date" class="form-control" wire:model="form.target_selesai">
                                    @error('form.target_selesai') <p class="alert alert-danger">{{ $message }}</p> @enderror
                                </div>
                                    <button class="btn btn-success btn-block pull-right mb-2 fa-lg" wire:click="submitForm" type="button"><i class="fas fa-save fa-lg"></i></button>
                                    <button class="btn btn-danger nextBtn btn-block pull-right" type="button" wire:click="back(2)">
                                    <i class="fas fa-chevron-circle-left fa-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            @include('components.alert.alert-timeout-custom')
                        </div>
                    </div>
                </div>
            </div>
      </section>
   </div>
   <!-- End Template -->