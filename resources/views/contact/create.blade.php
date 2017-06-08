@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0; margin-top: 50px">
@include('_includes.colorDesk')
  <div class="col-md-12" style="height: auto; overflow:auto;">
	<div class="col-md-6 col-md-offset-2" style="padding-bottom: 50px;">
  
      <center><h1 class="os-animation" data-os-animation="foo fadeIn" data-os-animation-delay="0s">Contact Me</h1></center>
  
      {{Form::open(['action' => 'ContactController@store'])}}
          <div class="form-group">
   	        @if($errors->has('name'))	
	          {{Form::label('name', "Please Enter Full Name", ['class' => 'errs'])}}<br/>
	          {{Form::text('name', null, ['class' => 'redform-control', 'placeholder' => "Full Name"])}} 
	        @else
	          {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Full Name"])}} 
	        @endif
		  </div>
		  <div class="form-group">
   	        @if($errors->has('email'))	
	          {{Form::label('email', "Please Enter Email Address", ['class' => 'errs'])}}<br/>
	          {{Form::email('email', null, ['class' => 'redform-control', 'placeholder' => "Email Address"])}} 
	        @else
	          {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => "Email Address"])}} 
	        @endif
  		  </div>
		  <div class="form-group">
   	        @if($errors->has('subject'))	
	          {{Form::label('subject', "Please Enter Subject", ['class' => 'errs'])}}<br/>
	          {{Form::text('subject', null, ['class' => 'redform-control', 'placeholder' => "Subject"])}} 
	        @else
	          {{Form::text('subject', null, ['class' => 'form-control', 'placeholder' => "Subject"])}} 
	        @endif
		  </div>
		  <div class="form-group">
   	        @if($errors->has('body'))	
	          {{Form::label('body', "Please Write Something", ['class' => 'errs'])}}<br/>
	          {{Form::textarea('body', null, ['class' => 'redform-control', 'placeholder' => "Write Something"])}} 
	        @else
	          {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => "Write Something"])}} 
	        @endif
		  </div>
      	  <div class="form-group">
            {{Form::submit('Send', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}
          </div>
      {{Form::close()}}
        <a href="{{URL::previous()}}"><button class="btn whiteBtn" style="float:right">Cancel</button></a>
       </div>
        <div class="col-md-3">
          <div class="os-animation conCreateImg" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
            <img src="{{'/img/beard1.png'}}" class="image img-circle img-responsive conCreateImg" style="border: solid 2px #fff; float: right">
          </div>
        </div>
  </div>
@include('_includes.bwDesk')
</div>
@endsection
