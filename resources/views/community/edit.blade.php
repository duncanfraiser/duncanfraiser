@extends('_layout.template')
@section('content')
@include('_includes.colorDesk')

  <div class="col-md-6 col-md-offset-3" style="margin-bottom: 50px">
    <h2>Edit Community Service</h2>
{{Form::model($community, ['method' => 'PATCH', 'action' => ['CommunityController@update', $community->id]])}}
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