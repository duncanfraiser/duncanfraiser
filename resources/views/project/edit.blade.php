@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">

  {{-- color desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>
    <div class="col-md-10 col-md-offset-1 project">
      <div class="col-md-12 os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
        <div class="col-md-12">
          <h1><center><a target="blank" href="{{$project->link}}">Edit {{$project->name}}</a></center></h1>
        </div>

      </div>
    </div>
    {{-- black and white desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW">
      </div>
    </div>

    {{-- Edit form --}}
    <div class="col-md-12 project">    
      {{Form::model($project, ['method' => 'PATCH', 'files' => true, 'action' => ['ProjectController@update', $project->id]])}}
      <div class="col-md-8 col-md-offset-2"">
        <div class="form-group">
          {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Project Title"])}}
        </div>
        <div class="form-group">
          {{Form::text('link', null, ['class' => 'form-control', 'placeholder' => "Link To Project"])}}
        </div>
        <div class="form-group">
          {{Form::textarea('info', null, ['class' => 'form-control', 'placeholder' => "Link To Project"])}}
        </div>
        <div class="form-group">
          <img style="width: 25%" src="{{url('/storage/img/'.$project->img)}}"><br/>
          {{ Form::label('imgmg', 'Current Image: '.$project->img,['style' => 'font-weight: normal', 'type' => 'file'])}}<br/>
          {{ Form::label('img', 'Upload New Landing Page Image:',['style' => 'font-weight: normal'])}}
          {{ Form::file('img')}}
        </div>
      </div>
      
      {{-- color desk img spacer --}}
      <div class="col-md-12" style="padding: 0">
        <div class="mydeskColor">
        </div>
      </div>




      @foreach($project->sections as $key => $section)
        @if($key % 2 == 0) {{-- checks for even index --}}
          <input type="hidden" name="sectionExistingIds[]" value="{{$section->id}}">
          <div class="col-md-8 col-md-offset-2"">
            <div class="form-group" style="margin-top: 2em">
              {{Form::text('sectionTitles[]', $section->title, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
     		    </div>
       		  <div class="form-group">
              {{Form::textarea('sectionContents[]', $section->content, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
       		  </div>
            <div class="form-group">
              <img style="width: 25%" src="{{url('/img/'.$section->img)}}"><br/>
              {{ Form::label('sectionImg', 'Current Image: '. $section->img,['style' => 'font-weight: normal', 'type' => 'file'])}}<br/>
              {{ Form::label('sectionImg', 'Choose Replacement Image',['style' => 'font-weight: normal', 'type' => 'file'])}}
              {{ Form::file('sectionImg[]')}}
            </div>
            <div class="form-group" style="margin: 0px 0px 2em 0px">       
              {{ Form::checkbox('dels[]', $section->id) }}<h4 class="toollable">Delete Section</h4>
            </div>
          </div>
            {{-- black and white desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskBW">
    </div>
  </div>

        @endif
         @if($key %2==1) {{-- checks for odd index --}}
          <input type="hidden" name="sectionExistingIds[]" value="{{$section->id}}">
          <div class="col-md-8 col-md-offset-2"">
            <div class="form-group" style="margin-top: 2em">
              {{Form::text('sectionTitles[]', $section->title, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
            </div>
            <div class="form-group">
              {{Form::textarea('sectionContents[]', $section->content, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
            </div>
            <div class="form-group">
              <img style="width: 25%" src="{{url('/img/'.$section->img)}}"><br/>
              {{ Form::label('sectionImg', 'Current Image: '. $section->img,['style' => 'font-weight: normal', 'type' => 'file'])}}<br/>
              {{ Form::label('sectionImg', 'Choose Replacement Image',['style' => 'font-weight: normal', 'type' => 'file'])}}
              {{ Form::file('sectionImg[]')}}
            </div>
            <div class="form-group" style="margin: 0px 0px 2em 0px">       
              {{ Form::checkbox('dels[]', $section->id) }}<h4 class="toollable">Delete Section</h4>
            </div>
          </div>
          {{-- color desk img spacer --}}
          {{-- color desk img spacer --}}
          <div class="col-md-12" style="padding: 0">
            <div class="mydeskColor">
            </div>
          </div>
        @endif
      @endforeach
<div class='col-md-8 col-md-offset-2'>

      <div class="input_fields_wrap">
        <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"> <span style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: bold;">Add Additional Section</span></i><br/>
      </div>
        <div class="form-group">
          {{Form::submit('Update', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}
          <a href="{{URL::previous()}}"><button class="btn whiteBtn" style="float:right">Cancel</button></a>
        </div>
    {{Form::close()}}
    </div>
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