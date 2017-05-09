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
    <div class="col-md-12 about" style="background:transparent;">
      <div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.0s">
        <h1><center>About Me</center></h1>
      </div>
      <div class="os-animation " data-os-animation="fadeIn" data-os-animation-delay="0.1s">
        <center><img src="{{'img/profile.jpg'}}" class="image img-circle img-responsive flex-center"></center>
      </div>
      <div class="os-animation abouttext" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
        <p>I am an innovative thinker, initiative taker and multi-dimensional professional with exceptional logical and analytical skills. I have a strong background in Object Oriented Programming with Full Stack Application & Software Development.</p>
      </div>
      
      <div class="os-animation abouttext" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
        <p>I graduated from The University of Mississippi (Hotty Toddy!) with my Bachelor of Business Administration and Management Information Systems.</p>
      </div>

      <div class="os-animation abouttext" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
        <p>My objectives are to be able to use my strong motivational and leadership skills to drive positive reinforcement throughout your company.  I have the ability to work under pressure with strong interpersonal skills as an individual as well as a team member.</p>
      </div>

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
            <p>I have my own server that I provide vitual hosts for production applications. I provide webhosting, email, backups and other services for the client's applications.</p>
          </div>

          <div class="col-md-3 os-animation skill" data-os-animation="fadeInDown" data-os-animation-delay="0.8s">
            <h2>Database</h2>
            <p>All of my application's content are database driven. I design, build, and use relational databases to accuratley meet all of my clients requirements. Using Object-oriented database management systems I combine my database capabilities with object-oriented programming to achieve a smart and scalable application.</p>
          </div>

          <div class="col-md-3 os-animation skill" data-os-animation="fadeInUp" data-os-animation-delay="1.1s">
            <h2>Backend</h2>
            <p>I develope all of my applications with a strong foundation of Object-oriented programming. Using the Laravel PHP framework my custom applications can be tallored to any functionality request from a client. I also make costomized dashboards so the client can have the ability to update live content to their application.</p>
          </div>

           <div class="col-md-3 os-animation skill" data-os-animation="fadeInRight" data-os-animation-delay="1.4s">
            <h2>Frontend</h2>
            <p>I use CSS and JavaScript techniques to develope a slick look of styles customized for the application's content. All my applications are mobile responsive with a focus on easy client-side usabillity.</p>
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
      <div class="col-md-3 col-md-offset-3">
        <ul style="font-size: 2em">
          <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">Ajax</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">Blade</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">Bootstrap</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.9s">CSS</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.6s">Git</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">HTML5</li>
          <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">Java</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul style="font-size: 2em">
          <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">JavaScript</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.6s">jQuerry</li>
          <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">Laravel</li>
          <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.9s">MySql</li>
          <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">PHP</li>
          <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.6s">SQL</li>
        </ul>
      </div>
    </div>



    {{-- black and white desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW">
      </div>
    </div>



    <div class="col-md-12 work">

      <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s" style="margin-bottom: 1.5em">Work Examples</h1></center>

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