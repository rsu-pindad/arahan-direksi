<div class="sticky-top mb-3">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title">Progress</h4>
      </div>
      <div class="card-body">
         <div id="external-events">
               @foreach(\App\Models\MasterProgress::all() as $progress)
                  <div 
                     class="external-event bg-success ui-draggable ui-draggable-handle" 
                     style="position: relative;"
                     >
                     {{$progress->status_progress ?? 'belum ada progress'}}</div>
               @endforeach
         </div>
      </div>
   </div>
</div>