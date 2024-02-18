<div class="sticky-top mb-3">
   <div class="card h-50">
      <div class="card-header">
         <h4 class="card-title">Arahan</h4>
      </div>
      <div class="card-body">
         <div id="external-events overflow-auto">
            @foreach(\App\Models\MasterArahan::all() as $arahan)
               <div 
                  class="external-event bg-success ui-draggable ui-draggable-handle" 
                  style="position: relative;"
                  >
                  {{$arahan->nama_arahan ?? 'belum ada arahan'}}</div>
            @endforeach
         </div>
      </div>
   </div>
</div>