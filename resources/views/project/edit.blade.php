@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">

  {{-- color desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>

  <div class="col-md-8 col-md-offset-2 project">
    <h2><u>Edit {{$project->name}}</u></h2>
    {{Form::model($project, ['method' => 'PATCH', 'files' => true, 'action' => ['ProjectController@update', $project->id]])}}
      <div class="form-group">
        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Project Title"])}}
      </div>
              <div class="form-group">
          {{ Form::label('img', 'Upload Section Image:')}}
          {{ Form::file('img')}}
        </div>

{{-- {{dd($project->sections)}} --}}
      @foreach($project->sections as $section)
        <input type="hidden" name="sectionExistingIds[]" value="{{$section->id}}">
        <div class="form-group" style="margin-top: 2em">
     			<input class="form-control" placeholder="Section Title" type="text" name="sectionExistingTitles[]" value="{{$section->title}}" />
     		</div>
     		<div class="form-group">
       		<textarea class="form-control" rows="4"  type="textarea" step="1" name="sectionExistingContents[]">{{$section->content}}</textarea>
     		</div>
        <div class="form-group">
          {{ Form::label('img[]', 'Upload Section Image:')}}
          {{ Form::file('img')}}
        </div>

        <div class="form-group">
          {{Form::open(['method' => 'DELETE', 'route' => ['section.destroy', $section->id], 'class' => 'delete'])}}
            {{Form::submit('Delete', ['class' => 'formbtn'])}}
          {{Form::close()}}
        </div>



      @endforeach

      <div class="input_fields_wrap">
        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"></i>
      </div>






      <div class="col-md-12 form-group" style="margin: 1.5em; ">
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
            '<div><input class="form-control" placeholder="Section Title" type="text" name="sectionTitles[]"/><textarea class="form-control" rows="4" style="margin-top: 15px" placeholder="Section Content" type="text" step="1" name="sectionContents[]"/></textarea><a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x minus" aria-hidden="true"></i></a></div>'
            ); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection