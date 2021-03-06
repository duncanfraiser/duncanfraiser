@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">

  {{-- color desk img spacer --}}
  @include('_includes.colorDesk')

  <div class="col-md-8 col-md-offset-2 project">
    <h2>Add A Project</h2>
    {{Form::open(['action' => 'ProjectController@store', 'files' => true])}}
 
      <div class="form-group">
        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Project Title"])}}
      </div>

      <div class="form-group">
        {{Form::text('link', null, ['class' => 'form-control', 'placeholder' => "Link To Project"])}}
      </div>
      <div class="form-group">
        {{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => "Application Info"])}}
      </div>

      <div class="form-group">
        {{ Form::label('img', 'Upload Landing Page Image:',['style' => 'font-weight: normal'])}}
        {{ Form::file('img')}}
      </div>



      <div class="form-group input_fields_wrap">
        
        <h3>Project Section</h3>
        

        <div class="form-group">
          {{Form::text('sectionTitles[]', null, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
        </div>
        

        <div class="form-group">
          {{Form::textarea('sectionContents[]', null, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
        </div>
        

        <div class="form-group">
          {{ Form::label('sectionImg', 'Upload Landing Page Image:',['style' => 'font-weight: normal', 'type' => 'file'])}}
          {{ Form::file('sectionImg[]')}}
        </div>
        

        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"></i>
      </div>
        <div class="form-group">
          <a href="{{url('/')}}"><button class="btn" style="float:right">Cancel</button></a>
          {{Form::submit('Update', ['class' => 'btn', 'style' => 'float:right'])}}
        </div>
    {{Form::close()}}
  </div>

  {{-- black and white desk img spacer --}}
  @include('_includes.bwDesk')







</div>
@endsection

@section('scripts')  
<script>
$(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
          $(wrapper).append(
              `<div class="form-group">
                {{Form::text('sectionTitles[]', null, ['class' => 'form-control', 'style' => 'margin-bottom: 15px', 'placeholder' => "Section Title"])}}
                {{Form::textarea('sectionContents[]', null, ['class' => 'form-control', 'style' => 'margin-bottom: 15px', 'placeholder' => "Describe section content here..."])}}
                {{ Form::label('sectionImg', 'Upload Landing Page Image:',['style' => 'font-weight: normal'])}}{{ Form::file('sectionImg[]',['style' => 'margin-bottom: 15px'])}}
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