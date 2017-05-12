@extends('_layout.template')
@section('content')
    {{-- desk pic and my name fade in intro --}}
    <div class="container-fluid content mydesk">
      <div>
        <img style="margin-top: 25%;" class="animated fadeInDown" src="{{url('img/logo_white_sm.png')}}">
        <h1 class="animated fadeInUp introName"><strong>Duncan McLeod Fraiser Jr.</strong></h1>
        <h3 class="animated fadeInUpBig introTitle">Full Stack Developer</h3>
      </div>
    </div>
    {{-- About Me --}}    
    <div class="col-md-12 landedit">
    


      <div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.0s">
        <h1><center>About Me</center></h1>
      </div>
      <div class="os-animation " data-os-animation="fadeIn" data-os-animation-delay="0.1s">
        <center><img src="{{url('img/profile.jpg')}}" class="image img-circle img-responsive flex-center"></center>
      </div>
      {{Form::model($landing, ['method' => 'PATCH', 'files' => true, 'action' => ['LandingController@update', $landing->id]])}}
        <div class="form-group about">    
          {{Form::textarea('about', null, ['class' => 'form-control', 'placeholder' => 'About Content'])}}
        </div>
   
      {{-- black and white desk img spacer --}}
      <div class="col-md-12" style="padding: 0">
        <div class="mydeskBW">
        </div>
      </div>

    {{-- Full Stack Skills --}}
    <div class="col-md-12" style="background-color: #000">
        <div class="skills">
          <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Full Stack Skills</h1></center>
          <div class="col-md-3 os-animation skill" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
            <h2>Server</h2>
              <div class="form-group">    
                {{Form::textarea('serv', null, ['class' => 'form-control', 'placeholder' => 'Server Content'])}}
              </div>
          </div>

          <div class="col-md-3 os-animation skill" data-os-animation="fadeInDown" data-os-animation-delay="0.8s">
            <h2>Database</h2>
              <div class="form-group">    
                {{Form::textarea('db', null, ['class' => 'form-control', 'placeholder' => 'Database Content'])}}
              </div>
          </div>

          <div class="col-md-3 os-animation skill" data-os-animation="fadeInUp" data-os-animation-delay="1.1s">
            <h2>Backend</h2>
              <div class="form-group">    
                {{Form::textarea('backend', null, ['class' => 'form-control', 'placeholder' => 'Server Content'])}}
              </div>
          </div>

           <div class="col-md-3 os-animation skill" data-os-animation="fadeInRight" data-os-animation-delay="1.4s">
            <h2>Frontend</h2>
              <div class="form-group">    
                {{Form::textarea('frontend', null, ['class' => 'form-control', 'placeholder' => 'Server Content'])}}
              </div>
          </div>
        </div>
    </div>



    {{-- color desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskColor">
      </div>
    </div>



    <div class="col-md-12 tools">
      <div class="col-md-9 col-md-offset-3">
        <h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Development Tools</h1>
      </div>
      <div class="col-md-9 col-md-offset-3">
        <ul style="font-size: 2em">
          @foreach($landing->tools as $key => $tool)
            <input type="hidden" name="ids[]" value={{$tool->id}}>
            <li class="os-animation form-inline" data-os-animation="fadeInRight" data-os-animation-delay="0s">
              {{Form::text('name[]', $tool->name, ['class' => 'form-control', 'placeholder' => 'Enter Tool'])}}
              {{Form::select('direction[]', $dirs, $tool->direction, ['placeholder' => 'Animation Class','class' => 'form-control'])}}
              {{Form::select('delay[]', $seconds, $tool->delay, ['placeholder' => 'Animation Delay','class' => 'form-control'])}}
              {{ Form::checkbox('dels[]', $tool->id) }}<h6 class="toollable">delete</h6>
            </li>
          @endforeach
        </ul>
        <div class="col-md-12 os-animation form-inline" data-os-animation="fadeInRight" data-os-animation-delay="0s">
          <div class="input_fields_wrap">
            <i class="fa fa-plus-circle fa-2x add_field_button plus" aria-hidden="true"> <span style="font-size: 16px; font-family: 'Raleway', sans-serif; font-weight: bold;">Add Development Tool</span></i>
          </div>
        </div>

        <div class="col-md-12 form-group" style="margin: 1.5em; ">
          {{Form::submit('Submit', ['class' => 'btn'])}}
        </div>
      </div>
    </div>


    



 
    {{Form::close()}}
   </div> 


  







    {{-- black and white desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW">
      </div>
    </div>


    <div class="col-md-12 work">

      <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Work Examples</h1></center>

      <div class="col-md-3 flex-center os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
        <a href="{{url('/project/kennykens')}}">
          <div class="img__wrap">
            <img class="img__img" src="{{url('/img/kennykens.png')}}" />
            <p class="img__description flex-center" style="margin: 0">Kenny Kens<br/>and the<br/>Brown Bottle Boys</p>
          </div>
        </a>
      </div>


      <div class="col-md-3 flex-center os-animation" data-os-animation="fadeIn" data-os-animation-delay=".5s">
        <a href="{{url('/project/learningcenter')}}">
          <div class="img__wrap">
            <img class="img__img" src="{{url('/img/learningCenter.png')}}" />

            <p class="img__description flex-center" style="margin: 0">Saint Paul<br/>Early<br/>Learning Center</p>
          </div>
        </a>
      </div>

      <div class="col-md-3 flex-center os-animation" data-os-animation="fadeIn" data-os-animation-delay=".7s">
        <a href="{{url('/project/stpaul')}}">
          <div class="img__wrap">
            <img class="img__img" src="{{url('/img/stPaul.png')}}" />
            <p class="img__description flex-center" style="margin: 0">Saint Paul<br/>Catholic<br/>Church</p>
          </div>
        </a>
      </div>


      <div class="col-md-3 flex-center os-animation" data-os-animation="fadeIn" data-os-animation-delay=".9s">
        <a href="{{url('/project/ergon')}}">
          <div class="img__wrap">
            <img class="img__img" src="{{url('/img/ergon.png')}}" />
            <p class="img__description flex-center" style="margin: 0">Ergon, Inc.<br/>Work Related<br/>Websites</p>
          </div>
        </a>
      </div>

    </div>

    {{-- color desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskColor">
      </div>
    </div>



    <div class="col-md-12 foots">
      <p class="footData">&copy; 2017 Duncan Fraiser Jr.</p>
    </div>




@endsection



@section('scripts')  
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append(
            '<div class="form-inline toolinput"><a href="#" class="remove_field"><i class="fa fa-minus-circle fa-2x minus" aria-hidden="true"></i></a>{{Form::text('newName[]', NULL, ['class' => 'form-control addtool', 'placeholder' => 'Enter Tool'])}}{{Form::select('newDirection[]', $dirs, NULL, ['placeholder' => 'Animation Class','class' => 'form-control addtool'])}}{{Form::select('newDelay[]', $seconds, NULL, ['placeholder' => 'Animation Delay','class' => 'form-control addtool'])}}</div>'
            ); //add input box

        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
@endsection