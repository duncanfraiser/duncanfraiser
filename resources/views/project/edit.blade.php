@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">

  {{-- color desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>

  <div class="col-md-8 col-md-offset-2 project">
    <h2>Edit {{$project->name}}</h2>
    {{Form::model($project, ['method' => 'PATCH', 'files' => true, 'action' => ['ProjectController@update', $project->id]])}}



      <div class="form-group">
        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Project Title"])}}
      </div>
      <div class="form-group">
        {{Form::text('link', null, ['class' => 'form-control', 'placeholder' => "Link To Project"])}}
      </div>

      <div class="form-group">
        {{ Form::label('imgmg', 'Current Image: '. $project->img,['style' => 'font-weight: normal', 'type' => 'file'])}}<br/>
        {{ Form::label('img', 'Upload Landing Page Image:',['style' => 'font-weight: normal'])}}
        {{ Form::file('img')}}
      </div>




      @foreach($project->sections as $section)




        <input type="hidden" name="sectionExistingIds[]" value="{{$section->id}}">



        <div class="form-group" style="margin-top: 2em">
          {{Form::text('sectionTitles[]', $section->title, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
     		</div>


     		<div class="form-group">
          {{Form::textarea('sectionContents[]', $section->content, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
     		</div>
        <div class="form-group" style="margin: 0px">       
         {{ Form::checkbox('dels[]', $section->id) }}<h4 class="toollable">Delete Section</h4>
        </div>
        <div class="form-group">
          {{ Form::label('sectionImg', 'Current Image: '. $section->img,['style' => 'font-weight: normal', 'type' => 'file'])}}<br/>
          {{ Form::label('sectionImg', 'Choose Replacement Image',['style' => 'font-weight: normal', 'type' => 'file'])}}
          {{ Form::file('sectionImg[]')}}
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
              `<div class="form-group">
                {{Form::text('newSectionTitles[]', null, ['class' => 'form-control', 'style' => 'margin-bottom: 15px', 'placeholder' => "Section Title"])}}
                {{Form::textarea('newSectionContents[]', null, ['class' => 'form-control', 'style' => 'margin-bottom: 15px', 'placeholder' => "Describe section content here..."])}}
                {{ Form::label('newSectionImg', 'Upload Landing Page Image:',['style' => 'font-weight: normal'])}}
                {{ Form::file('newSectionImg[]',['style' => 'margin-bottom: 15px'])}}
                <a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x minus" style="margin-bottom: 15px" aria-hidden="true"></i></a>
              </div>`
            ); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection