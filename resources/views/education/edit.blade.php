@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')
  <div class="col-md-6 col-md-offset-3" style="margin-bottom: 50px">
    <h2>Edit School</h2>
    {{Form::model($education, ['method' => 'PATCH', 'action' => ['EducationController@update', $education->id]])}}
      <div class="form-group">
        {{Form::text('school', null, ['class' => 'form-control', 'placeholder' => "School Name"])}}
      </div>
      <div class="form-group">
        {{Form::radio('kind', 'Degree')}} {{Form::label('king', 'Degree',['style'=>'form-control'])}}<br/>
        {{Form::radio('kind', 'Certificate')}} {{Form::label('king', 'Certificate')}}
      </div>
      @foreach($education->degrees as $degree)
      <div class="form-inline">
        {{Form::text('degrees[]', $degree->content, ['class' => 'form-control', 'placeholder' => "Degree or Certificate Earned", 'style'=>'width:87%; margin:5px'])}}
        <h6 class="toollable">{{ Form::checkbox('dels[]', $degree->id) }} delete</h6>
      </div>
      @endforeach
      <div class="form-group input_fields_wrap">
        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"></i>
        </div>
      <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn blueBtn', 'style' => 'float: right'])}}
        <a href="{{URL::previous()}}" class="btn whiteBtn" style="float:right">Cancel</a>
      </div>
    {{Form::close()}}
    {{Form::open(['method' => 'DELETE', 'route' => ['education.destroy', $education->id]])}}
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
        		{{Form::text('newDegrees[]', null, ['class' => 'form-control','style' => 'margin-bottom:15px', 'placeholder' => "Degree"])}}        		
        		<a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x minus" style="margin-bottom: 15px" aria-hidden="true"></i></a>
              </div>`
            ); //add input box
       });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection