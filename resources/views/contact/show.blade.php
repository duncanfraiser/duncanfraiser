@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">
@include('_includes.colorDesk')
  <div class="col-md-12" style="height: auto; overflow:auto;">
	<div class="col-md-5 col-md-offset-2" style="padding-bottom: 50px">
		<table class="conTable">
			<tr>
				<td class="conLable">From: </td>
				<td>{{$contact->name}}</td>
			</tr>
			<tr>
				<td class="conLable">Subject: </td>
				<td>{{$contact->subject}}</td>
			</tr>
			<tr>
				<td class="conLable">Email: </td>
				<td>{{$contact->email}}</td>
			</tr>
			<tr>
				<td class="conLable">Date: </td>
				<td>{{$contact->created_at->toDayDateTimeString()}}</td>
			</tr>
			<tr>
				<td class="conLable"  style="padding-top: 25px">Body: </td>
				<td style="padding-top: 25px">{{$contact->body}}</td>
			</tr>
		</table>

		{{Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactController@update', $contact->id]])}}

		    {{Form::submit('Back to Inbox', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}

		  {{Form::close()}}      
		  {{Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $contact->id], 'class' => 'delete'])}}
		  	  {{Form::submit('Delete', ['class' => 'btn redBtn', 'style' => 'float:right'])}}
		  {{Form::close()}}










	</div>    



        <div class="col-md-3">
              <div class="os-animation " data-os-animation="fadeIn" data-os-animation-delay="0.3s">
        <img src="{{'/img/beard1.png'}}" class="image img-circle img-responsive" style="border: solid 2px #fff; float: right">
          @if(App\Contact::newCons() != 0)
              @if(App\Contact::newCons() != 1)
                <div class="bigNotsTop"><div class="bigNots" id="talkbubble">Ooo! {{App\Contact::newCons()}} New Messages</div></div>
              @else
                <div class="bigNotsTop"><div class="bigNots" id="talkbubble">Ooo! {{App\Contact::newCons()}} New Message</div></div>
              @endif
          @endif
      </div>
        </div>









  </div>
  @include('_includes.bwDesk')
</div>
@endsection