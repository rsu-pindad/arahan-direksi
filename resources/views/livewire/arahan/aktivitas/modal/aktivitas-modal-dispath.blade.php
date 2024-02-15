
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" 
    wire:ignore.self>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dispath</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
            wire:click.prevent='close'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @php
        $pivotsID = $pivot->progress_id ?? '';
        @endphp
        @include('components.alert.alert-timeout-custom')
        <form>
            <select wire:model="editIdPivot" class="custom-select rounded-0">
                <option readonly selected>pilih Progress</option>
                @foreach(\App\Models\MasterProgress::all() as $pro)
                    @if($pro->id != $pivotsID)
                    <option value="{{$pro->id}}">{{$pro->status_progress}}</option>
                    @endif
                @endforeach
            </select>
            <button
                type="submit"
                class="btn btn-primary btn-block mt-2"
                wire:click.prevent='dispath'>Dispath
                </button>
        <form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>