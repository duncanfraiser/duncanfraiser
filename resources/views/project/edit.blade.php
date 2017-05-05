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




              @foreach($project->sections as $section)
                <div class="form-group" style="margin-top: 2em">
          			<input class="form-control" placeholder="Section Title" type="text" name="sectionTitles[]" value="{{$section->title}}" />
        		</div>
        		<div class="form-group">
          		<textarea class="form-control" rows="4"  type="textarea" step="1" name="sectionContents[]">{{$section->content}}</textarea>
        		</div>
          
                    
                @endforeach

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