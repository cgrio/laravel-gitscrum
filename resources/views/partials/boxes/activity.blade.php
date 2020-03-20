<div class="notes">
    <h4 class="gs-card-title">{{trans('gitscrum.daily-activities')}}</h4>
    <div class="gs-card-content">
        @if(isset($percentage))
            @include('partials.boxes.progress-bar-activity', [ 'percentage' => $percentage, 'title' => trans('gitscrum.completed')])
        @endif
        @include('partials.forms.activity', ['id'=> $list->id,'activities' => $list->notes, 'type'=> $type])
    </div>
</div>
