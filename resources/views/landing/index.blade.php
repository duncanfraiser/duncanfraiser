@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">
    {{-- desk pic and my name fade in intro --}}
    <div class="container-fluid content mydesk">
      <div>
        <img style="margin-top: 25%;" class="animated fadeInDown" src="{{url('img/logo_white_sm.png')}}">
        <h1 class="animated fadeInUp introName"><strong>Duncan McLeod Fraiser Jr.</strong></h1>
        <h3 style="color: #fff;" class="animated fadeInUpBig introTitle">Full Stack Developer</h3>
      </div>
    </div>





    {{-- About Me --}}    
    <div class="col-md-12 about" style="background:transparent;">
      <div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.0s">
        <h1><center><u>About Me</u></center></h1>
      </div>
      <div class="os-animation " data-os-animation="fadeIn" data-os-animation-delay="0.3s">
        <center><img src="{{'img/profile.jpg'}}" class="image img-circle img-responsive flex-center"></center>
      </div>
      <div class="os-animation abouttext" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
        <p>I am an innovative thinker, initiative taker and multi-dimensional professional with exceptional logical and analytical skills. I have a strong background in Engineering and Full Stack Application & Software Development.</br><br/>I graduated from The University of Mississippi (Hotty Toddy!) with my Bachelor of Business Administration and Management Information Systems. I am interested and have experience in server configuration, app development, database architecture and software implementation.</br><br/>My objectives are to be able to use my strong motivational and leadership skills to drive positive reinforcement throughout your company.  I have the ability to work under pressure with strong interpersonal skills as an individual as well as a team member. </p>
      </div>
    </div>



<div class="col-md-12" style="padding: 0">
  <div class="mydeskBW">
  </div>
</div>






<div class="col-md-12" style="background-color: #000">
    <div class="skills">
      <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s"><u>Full Stack Skills</u></h1></center>
        


        <div class="col-md-3 os-animation skill" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
          <h2>Server</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="col-md-3 os-animation skill" data-os-animation="fadeInDown" data-os-animation-delay="0.8s">
          <h2>Database</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="col-md-3 os-animation skill" data-os-animation="fadeInUp" data-os-animation-delay="1.1s">
          <h2>Backend</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

         <div class="col-md-3 os-animation skill" data-os-animation="fadeInRight" data-os-animation-delay="1.4s">
          <h2>Frontend</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

    </div>
</div>

<div class="col-md-12" style="padding: 0">

  <div class="mydeskColor" >
  </div>
</div>



<div class="col-md-12 tools">
  <div class="col-md-9 col-md-offset-3">
      <h1 class="os-animation" style="color: #fff; data-os-animation="fadeIn" data-os-animation-delay="0s"><u>Development Tools</u></h1>
  </div>
  <div class="col-md-3 col-md-offset-3" style="color: #fff">
    <ul style="font-size: 2em">
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">Ajax</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.1s">Blade</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">Bootstrap</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.6s">CSS</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.6s">Git</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">HTML5</li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">Java</li>
    </ul>
  </div>
  <div class="col-md-3" style="color: #fff">
    <ul style="font-size: 2em">
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">JavaScript</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.9s">jQuerry</li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.9s">Laravel</li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.9s">MySql</li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">PHP</li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.6s">SQL</li>
    </ul>
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