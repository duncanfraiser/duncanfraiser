@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">

  {{-- color desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>

  <div class="col-md-8 col-md-offset-2 project">
    <h2><u>Add A Project</u></h2>
    {{Form::open(['action' => 'ProjectController@store'])}}
      <div class="form-group">
        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Project Title"])}}
      </div>
      <div class="form-group input_fields_wrap">
        <h3>Project Section</h3>
        <div class="form-group">
          <input class="form-control" placeholder="Section Title" type="text" name="sectionTitles[]"/>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="4" placeholder="Describe section content here..." type="textarea" step="1" name="sectionContents[]"></textarea>
        </div>
        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"></i>
      </div>
      <div class="col-md-12 form-group" style="margin: 1.5em; padding-right: o;">
        {{Form::submit('Submit', ['class' => 'btn'])}}
      </div>
    {{Form::close()}}
  </div>

  {{-- black and white desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskBW">
    </div>
  </div>

  {{-- Footer --}}
  <div class="col-md-12 foots">
    <p class="footData">&copy; 2017 Duncan Fraiser Jr.</p>
  </div>

</div>
@endsection

@section('scripts')  
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append(
            '<div style="margin-top:5em"><input class="form-control" placeholder="Section Title" type="text" name="sectionTitles[]"/><textarea class="form-control" rows="4" style="margin-top: 15px" placeholder="Section Content" type="text" step="1" name="sectionContents[]"/></textarea><a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x minus" aria-hidden="true"></i></a></div>'
            ); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection