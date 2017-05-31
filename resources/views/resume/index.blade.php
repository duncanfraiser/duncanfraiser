@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>
  <div class="col-md-12" style="background-color: #000; margin-bottom: 2em; min-height: 485px">
    <div class="col-md-8 col-md-offset-2">
      <center><h1 class="os-animation" data-os-animation="foo fadeIn" data-os-animation-delay="0s">My Resume</h1></center>
      {{-- EXPERIENCE SECTION--}}
      <h2 class="catigory os-animation animated fadeInDown" data-os-animation-delay="0.1s">Experience
        @if(\Auth::check())
        <a href="{{url('/job/create')}}" class="btn" style="float:right;padding: 2px">Add Job</a>
        @endif
        </h2>
      <div style="background-color: #fff; height: 1px;"></div>
        @foreach($jobs as $key => $job)
          <h3 class="company os-animation animated fadeInLeft" data-os-animation-delay="0.2s">{{$job->company}}
          @if(\Auth::check())
            <a href="{{url('/job/'.$job->id.'/edit')}}" class="btn" style="float:right;padding: 2px">Edit Job</a>
          @endif
          </h3>
          <h5 class="job os-animation animated fadeInLeft" data-os-animation-delay="0.3s">{{$job->title}}<span class="date">{{date('Y', strtotime($job->startDate))}} to 
            @if($job->endDate != NULL)
              {{date('Y', strtotime($job->endDate))}}</span></h5>
            @else
            Present
            @endif    
          </span></h5>
          <ul> 
            @foreach($job->bullets as $key => $bullet)
              <li class="jd os-animation animated fadeInRight" data-os-animation-delay={{$bullet->delay}}>{{$bullet->content}}</li>
            @endforeach
          </ul>
        @endforeach
        {{-- EDUCATION SECTION --}}
        <h2 class="catigory os-animation animated fadeInDown" style="margin-top: 2em" data-os-animation-delay="0.1s">Education
        @if(\Auth::check())
          <a href="{{url('/education/create')}}" class="btn" style="float:right;padding: 2px">Add School</a>
        @endif
        </h2>
        <div style="background-color: #fff; height: 1px;"></div>
          @foreach($educations as $education)
            <h3 class="company os-animation animated fadeInLeft" data-os-animation-delay="0.2s">{{$education->school}}
              @if(\Auth::check())
                <a href="{{url('/education/'.$education->id.'/edit')}}" class="btn" style="float:right;padding: 2px">Edit School</a>
              @endif
            </h3>
            <h5 class="job os-animation animated fadeInLeft" data-os-animation-delay="0.3s">{{$education->kind}}:</h5>
            <ul>
              @foreach($education->degrees as $degree)
                <li class="jd os-animation animated fadeInRight" data-os-animation-delay="{{$degree->delay}}">{{$degree->content}}</li>
              @endforeach
            </ul>
          @endforeach
 
          {{-- SKILLS SECTION --}}
           <h2 class="catigory os-animation animated fadeInDown" style="margin-top: 2em" data-os-animation-delay="0.1s">Skills
        @if(\Auth::check())
          <a href="{{url('/tool/create')}}" class="btn" style="float:right;padding: 2px">Add Skill</a>
        @endif
        </h2>
        <div style="background-color: #fff; height: 1px;"></div>


              <h3 class="company os-animation animated fadeInLeft" data-os-animation-delay="0.2s">Development Tools
          @if(\Auth::check())
            <a href="{{url('/tool/1/edit')}}" class="btn" style="float:right;padding: 2px">Edit Skills</a>
          @endif
          </h3>
   
      <div class="col-md-6" style="padding: 0">
        <ul>
          @foreach($tools as $key=>$tool)
            @if($key % 2 == 0) {{-- checks for even index --}}
              <li class="jd os-animation animated fadeInLeft" data-os-animation-delay={{$tool->delay}}>{{$tool->name}}</li>
            @endif  
          @endforeach
        </ul>
      </div>
      <div class="col-md-6" style="padding: 0">
        <ul>
          @foreach($tools as $key=>$tool)
            @if($key %2==1) {{-- checks for odd index --}}
              <li class="jd os-animation animated fadeInRight" data-os-animation-delay={{$tool->delay}}>{{$tool->name}}</li>
            @endif
          @endforeach    
        </ul>
      </div>


      {{-- COMMUNITY SERVICE --}}
      <div class="col-md-12" style="padding: 0">
        <h2 class="catigory os-animation animated fadeInDown" style="margin-top: 2em" data-os-animation-delay="0.1s">Community Service
        @if(\Auth::check())
          <a href="{{url('/community/create')}}" class="btn" style="float:right;padding: 2px">Add Service</a>
        @endif
        </h2>
        <div style="background-color: #fff; height: 1px;"></div>

        @foreach($communities as $key => $community)
          <h3 class="company os-animation animated fadeInLeft" data-os-animation-delay="0.2s">{{$community->title}}
          @if(\Auth::check())
            <a href="{{url('/community/'.$community->id.'/edit')}}" class="btn" style="float:right;padding: 2px">Edit Service</a>
          @endif
          </h3>
          <ul>
           <li class="jd os-animation animated fadeInLeft" data-os-animation-delay=0.3s>{!!$community->content!!}</li>
          </ul> 
        @endforeach






      </div>





    </div>
  </div>

    {{-- black and white desk img spacer --}}
    @include('_includes.bwDesk')




  </div>
</div>
@endsection