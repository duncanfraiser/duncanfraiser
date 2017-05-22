@extends('_layout.template')
@section('content')
  <div class="container-fluid" style="padding: 0">
    {{-- color desk img spacer --}}  
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskColor">
      </div>
    </div>

	{{Form::model($section, ['method' => 'PATCH', 'files' => true, 'action' => ['SectionController@update', $section->id]])}}
      <div class="col-md-8 col-md-offset-2"">
        <div class="form-group" style="margin-top: 2em">
          {{Form::text('title', $section->title, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
 	    </div>
        <div class="form-group">
          {{Form::textarea('content', $section->content, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
        </div>
        <div class="form-group">
          <img  style="width: 25%" src="{{url('/storage/img/'.$section->img)}}"><br/>
          {{ Form::label('img', 'Current Image: '. $section->img,['style' => 'font-weight: normal', 'type' => 'file'])}}<br/>
          {{ Form::label('img', 'Choose Replacement Image',['style' => 'font-weight: normal', 'type' => 'file'])}}
          {{ Form::file('img')}}
        </div>



        <div class="form-group">
          {{Form::submit('Submit', ['class' => 'btn', 'style' => 'float:right'])}}
        </div>

    {{Form::close()}}



            <div class="form-group">
          {{Form::open(['method' => 'DELETE', 'route' => ['section.destroy', $section->id], 'class' => 'delete'])}}
          {{Form::submit('Delete', ['class' => 'btn', 'style' => 'float:right'])}}
          {{Form::close()}}
    	</div>
     </div>
    {{-- black and white desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW" >
      </div>
    </div>

  </div>
@endsection