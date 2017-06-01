@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')

  <div class="col-md-6 col-md-offset-3" style="margin-bottom: 50px">
    <h2>Add A Skill</h2>
    {{Form::open(['action' => 'ToolController@store'])}}


      

<div class="form-group">
{{Form::text('name', NULL, ['class' => 'form-control addtool', 'placeholder' => 'Enter Tool'])}}
{{Form::select('direction', $dirs, NULL, ['placeholder' => 'Animation Class','class' => 'form-control addtool'])}}
{{Form::select('delay', $seconds, NULL, ['placeholder' => 'Animation Delay','class' => 'form-control addtool'])}}
</div>



      <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn blueBtn', 'style' => 'float: right'])}}
        <a href="{{URL::previous()}}" class="btn whiteBtn" style="float:right">Cancel</a>
      </div>      

    {{Form::close()}}
  </div>  
@include('_includes.bwDesk')
@endsection
