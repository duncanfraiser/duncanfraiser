@extends('_layout.template')
@section('content')
 {{-- color desk img spacer --}}  
@include('_includes.colorDesk')
  <div class="col-md-8 col-md-offset-2" style="margin-bottom: 50px">
    <h2>Edit Section</h2>
	{{Form::model($section, ['method' => 'PATCH', 'files' => true, 'action' => ['SectionController@update', $section->id]])}}
      
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

          {{Form::submit('Update', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}
                  <a href="{{URL::previous()}}" class="btn whiteBtn" style="float:right">Cancel</a>
        </div>

    {{Form::close()}}



            <div class="form-group">
          {{Form::open(['method' => 'DELETE', 'route' => ['section.destroy', $section->id], 'class' => 'delete'])}}
          {{Form::submit('Delete', ['class' => 'btn redBtn', 'style' => 'float:right'])}}
          {{Form::close()}}
    	</div>
 

</div>
@include('_includes.bwDesk')
@endsection