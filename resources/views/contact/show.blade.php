@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">
@include('_includes.colorDesk')
  <div class="col-md-12" style="background-color: #000; margin-bottom: 5em">




<div class="col-md-4 col-md-offset-4">
<h1>{{$contact->name}}</h1>
<h3>{{$contact->subject}}</h3>
<h3>{{$contact->email}}</h3>
<p>{!!$contact->body!!}</p>

</div>
      {{Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactController@update', $contact->id]])}}
        <div class="form-group">
          {{Form::submit('Send', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}
        </div>
      {{Form::close()}}


  </div>
  @include('_includes.bwDesk')
</div>
@endsection