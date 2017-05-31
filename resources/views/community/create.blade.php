@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')

  <div class="col-md-6 col-md-offset-3" style="margin-bottom: 50px">
    <h2>Add Community Service</h2>
    {{Form::open(['action' => 'CommunityController@store'])}}
    	<div class="form-group">
	          {{Form::text('title', null, ['class' => 'form-control','style'=>'margin:5px', 'placeholder' => "Community Service"])}} 
	          {{Form::textarea('content', null, ['class' => 'form-control','style'=>'margin:5px', 'placeholder' => "Service Provided"])}} 
</div>


      <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn', 'style' => 'float: right'])}}
        <a href="{{URL::previous()}}" class="btn" style="float:right">Cancel</a>
      </div>      

    {{Form::close()}}
  </div>  
@include('_includes.bwDesk')
@endsection