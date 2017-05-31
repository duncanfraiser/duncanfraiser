@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')
  <div class="col-md-6 col-md-offset-3">
    <h2>Add A School</h2>
    {{Form::open(['action' => 'EducationController@store'])}}
      <div class="form-group">
        {{Form::text('school', null, ['class' => 'form-control', 'placeholder' => "School Name"])}}
      </div>
      <div class="form-group">
        {{Form::radio('kind', 'Degree')}} {{Form::label('king', 'Degree',['style'=>'form-control'])}}<br/>
        {{Form::radio('kind', 'Certificate')}} {{Form::label('king', 'Certificate')}}
      </div>
      <div class="form-group">
        {{Form::text('degrees[]', null, ['class' => 'form-control', 'placeholder' => "Degree or Certificate Earned"])}}
      </div>
      <div class="form-group input_fields_wrap">
        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"></i>
      </div>
      <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn', 'style' => 'float: right'])}}
        <a href="{{URL::previous()}}" class="btn" style="float:right">Cancel</a>
      </div>
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
        		{{Form::text('degrees[]', null, ['class' => 'form-control','style' => 'margin-bottom:15px', 'placeholder' => "Degree"])}}        		
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