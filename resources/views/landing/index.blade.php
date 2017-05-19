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
        <center><img src="{{url('img/profile.jpg')}}" class="image img-circle img-responsive flex-center"></center>
      </div>
      <div class="os-animation abouttext" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
        <p>{!!$landing->about!!}</p>
      </div>
    </div>

    {{-- black and white desk img spacer --}}
    @include('_includes.bwDesk')


    {{-- Full Stack Skills --}}
    <div class="col-md-12" style="background-color: #000">
        <div class="skills">
          <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Full Stack Skills</h1></center>
          <div class="col-md-3 os-animation skill" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
            <h2>Server</h2>
            <p>{!!$landing->serv!!}</p>
          </div>

          <div class="col-md-3 os-animation skill" data-os-animation="fadeInDown" data-os-animation-delay="0.8s">
            <h2>Database</h2>
            <p>{!!$landing->db!!}</p>
          </div>

          <div class="col-md-3 os-animation skill" data-os-animation="fadeInUp" data-os-animation-delay="1.1s">
            <h2>Backend</h2>
            <p>{!!$landing->backend!!}</p>
          </div>

           <div class="col-md-3 os-animation skill" data-os-animation="fadeInRight" data-os-animation-delay="1.4s">
            <h2>Frontend</h2>
            <p>{!!$landing->frontend!!}</p>
          </div>
        </div>
    </div>


    {{-- color desk img spacer --}}
    @include('_includes.colorDesk')

    <div class="col-md-12 tools">
      <div class="col-md-9 col-md-offset-3">
          <h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Development Tools</h1>
      </div>
      <div class="col-md-3 col-md-offset-3">
        <ul style="font-size: 2em">
          @foreach($landing->tools as $key=>$tool)
            @if($key % 2 == 0) {{-- checks for even index --}}
              <li class="os-animation"  data-os-animation={{$tool->direction}} data-os-animation-delay={{$tool->delay}}>{{$tool->name}}</li>
            @endif  
          @endforeach
        </ul>
      </div>
      <div class="col-md-3">
        <ul style="font-size: 2em">
          @foreach($landing->tools as $key=>$tool)
            @if($key %2==1) {{-- checks for odd index --}}
              <li class="os-animation" data-os-animation={{$tool->direction}} data-os-animation-delay={{$tool->delay}}>{{$tool->name}}</li>
            @endif
          @endforeach    
        </ul>
      </div>
    </div>

    {{-- black and white desk img spacer --}}
    @include('_includes.bwDesk')


    {{-- Work Examples --}}
    <div class="col-md-12 work">
      <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Work Examples</h1></center>
      @foreach($projects as $key => $project)
      <div class="col-md-3 col-sm-12 flex-center os-animation" data-os-animation="fadeIn" data-os-animation-delay={{$delays[$key]}}>
        <a href="{{url('/project/'.$project->id)}}">
          <div class="img__wrap">
            <img class="img__img" style="max-width:100%" src="{{url('storage/img/'.$project->img)}}" />
            <p class="img__description flex-center" style="margin: 0; padding: .5em">{{$project->name}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>

    {{-- color desk img spacer --}}
    @include('_includes.colorDesk')






@endsection