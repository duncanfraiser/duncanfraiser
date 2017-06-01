@extends('_layout.template')
@section('content')
  <div class="container-fluid" style="padding: 0">
    {{-- color desk img spacer --}}  
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskColor">
      </div>
    </div>
    <div class="col-md-8 col-md-offset-2 project">
      <h2>Add Project Section</h2>
      {{Form::open(['action' => 'SectionController@store', 'files' => true])}}
        {{ Form::hidden('projectId', $projectId) }}
        <div class="form-group">
          {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => "Section Title"])}}
        </div>
        <div class="form-group">
          {{Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => "Describe section content here..."])}}
        </div>
        <div class="form-group">
          {{ Form::label('img', 'Upload Project Section Image:',['style' => 'font-weight: normal'])}}
          {{ Form::file('img')}}
        </div>
        <div class="form-group">
          {{Form::submit('Add Section', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}
          <a href="{{URL::previous()}}" class="btn whiteBtn" style="float:right">Cancel</a>
        </div>
      {{Form::close()}}
    </div>
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW" >
      </div>
    </div>
  </div>
@endsectiondas