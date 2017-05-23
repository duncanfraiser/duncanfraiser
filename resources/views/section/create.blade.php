@extends('_layout.template')
@section('content')
  <div class="container-fluid" style="padding: 0">
    {{-- color desk img spacer --}}  
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskColor">
      </div>
    </div>
    {{-- {{dd($projectId)}} --}}

    {{Form::open(['action' => 'SectionController@store', 'files' => true])}}


      {{ Form::hidden('projectId', $projectId) }}

       <div class="form-group">
          {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
        </div>
        

        <div class="form-group">
          {{Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
        </div>
        

{{--         <div class="form-group">
          {{ Form::label('sectionImg', 'Upload Landing Page Image:',['style' => 'font-weight: normal', 'type' => 'file'])}}
          {{ Form::file('sectionImg[]')}}
        </div> --}}




        <div class="form-group">
          {{Form::submit('Update', ['class' => 'btn', 'style' => 'float:right'])}}
        </div>

    {{Form::close()}}



{{--             <div class="form-group">
          {{Form::open(['method' => 'DELETE', 'route' => ['section.destroy', $section->id], 'class' => 'delete'])}}
          {{Form::submit('Delete', ['class' => 'btn', 'style' => 'float:right'])}}
          {{Form::close()}}
    	</div> --}}
     </div>
    {{-- black and white desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW" >
      </div>
    </div>

  </div>
@endsection