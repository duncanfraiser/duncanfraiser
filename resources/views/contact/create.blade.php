@extends('_layout.template')
@section('content')


<div class="container-fluid" style="padding: 0">

  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>









  <div class="col-md-12" style="background-color: #000; margin-bottom: 2em">
  
      <center><h1 class="os-animation" data-os-animation="foo fadeIn" data-os-animation-delay="0s"><u>Contact Me</u></h1></center>
      <div class="col-md-6 col-md-offset-3">
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
	          {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => "Email Addresscdc"])}} 
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
      	  <div class="form-group" >
            {{Form::submit('Send', ['class' => 'btn'])}}
          </div>
      {{Form::close()}}
      </div>
    
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
