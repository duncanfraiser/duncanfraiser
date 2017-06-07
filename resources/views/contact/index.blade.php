@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">
@include('_includes.colorDesk')
  <div class="col-md-12" style="height: auto; overflow:auto;">




    <div class="col-md-5 col-md-offset-2">
      <h1 style="margin-bottom: 0px">Contact Inbox</h1>
        @if(App\Contact::newCons() != 0)
          <h3 style="color:#66AFE9;margin-top: 0px">You have {{App\Contact::newCons()}} unread 
            @if(App\Contact::newCons() > 2)
              messages
            @else
              message
            @endif
          </h3>
        @endif
        <ul>
          @foreach($contacts as $contact)
            @if($contact->newContact != 0)
              <li class="conli"><a href="{{url('/contact/'.$contact->id)}}"><span style="color:#66AFE9">NEW! </span> {{$contact->name}}</a>
              <br/><i class="consub">~{{$contact->subject}}<span style="color:red"> ~ {{$contact->created_at->toDayDateTimeString()}}</span></i></li>
            @else
              <li class="conli"><a href="{{url('/contact/'.$contact->id)}}">{{$contact->name}}</a>
              <br/><i class="consub">~ {{$contact->subject}}<span style="color:red"> ~ {{$contact->created_at->toDayDateTimeString()}}</span></i></li>
            @endif
          @endforeach
        </ul>
    </div>
    <div class='col-md-3'>
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
</div>
@include('_includes.bwDesk')
@endsection