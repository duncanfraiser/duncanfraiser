@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>
  <div class="col-md-12" style="background-color: #000; margin-bottom: 2em; min-height: 485px">
    
  	 <center><h1 class="os-animation" data-os-animation="foo fadeIn" data-os-animation-delay="0s">Thanks {{$contact->name}}.</h1></center>

      <div class="os-animation " data-os-animation="fadeIn" data-os-animation-delay="0.3s">
        <center><img src="{{'/img/ElvisHitler.png'}}" class="image img-circle img-responsive flex-center" style="border: solid 2px #fff"></center>
      </div>

  	 <center><h1 class="os-animation" data-os-animation="foo fadeIn" data-os-animation-delay="0s">I look forward to talking to you!</h1></center>


  </div>
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskBW" >
    </div>
  </div>
  <div class="col-md-12 foots">
    <p class="footData">&copy; 2017 Duncan Fraiser Jr.</p>
  </div>
</div>
@endsection