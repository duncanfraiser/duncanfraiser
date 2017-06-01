@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')
  <div class="col-md-6 col-md-offset-3" style="margin-bottom: 50px">
    <h2>Edit Job</h2>
    {{Form::model($job, ['method' => 'PATCH', 'action' => ['JobController@update', $job->id]])}}
    
      <div class="form-group">
        {{Form::text('company', null, ['class' => 'form-control', 'placeholder' => "Company Name & Location"])}}
      </div>
      <div class="form-group">
        {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => "Job Title"])}}
      </div>
      <div class="form-group form-inline">
        {{Form::label('startDate','Start Date')}}
        {{Form::date('startDate', $job->startDate, ['class' => 'form-control'])}}&nbsp;&nbsp;
        {{Form::label('endDate','End Date')}}
        {{Form::date('endDate', $job->endDate, ['class' => 'form-control'])}}
      </div>


      @foreach($job->bullets as $bullet)
        <div class="form-inline">
          {{Form::text('content[]', $bullet->content, ['class' => 'form-control', 'style'=>'width:87%; margin:5px', 'placeholder' => "Bullet Point"])}}
          <h6 class="toollable">{{ Form::checkbox('dels[]', $bullet->id) }} delete</h6>
        </div>
      @endforeach
      <div class="form-group input_fields_wrap">
        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"></i>
      </div>
      <div class="form-group">
        {{Form::submit('Update', ['class' => 'btn blueBtn', 'style' => 'float: right'])}}
        <a href="{{URL::previous()}}" class="btn whiteBtn" style="float:right">Cancel</a>
      </div>
    {{Form::close()}}
    {{Form::open(['method' => 'DELETE', 'route' => ['job.destroy', $job->id]])}}
      {{Form::submit('Delete', ['class' => 'btn redBtn', 'style'=>'float:right'])}}
    {{Form::close()}}
  </div>
@include('_includes.bwDesk')
@endsection
@section('scripts')  
<script>
$(document).ready(function() {
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
          $(wrapper).append(
              `<div class="form-group">
        		{{Form::text('newContent[]', null, ['class' => 'form-control','style' => 'margin-bottom:15px', 'placeholder' => "Bullet Point"])}}        		
        		<a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x minus" style="margin-bottom: 15px" aria-hidden="true"></i></a>
              </div>`
            ); //add input box
       // }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection