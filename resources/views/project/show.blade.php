@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding:0; margin-top: 50px; height: auto; overflow:auto;">

  {{-- color desk img spacer --}}
   @include('_includes.colorDesk')



  <div class="col-md-10 col-md-offset-1 project">
    <div class="col-md-12 os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
      <div class="col-md-12">
        <h1><center><a target="blank" href="{{$project->link}}">{{$project->name}}</a></center></h1>
        <p class="sectext">{!!$project->info!!}</p>
		


    	@if(\Auth::check())


  <div class="form-group">
    <a href="{{url('/project/'.$project->id.'/edit')}}"><button class="btn redBtn" style="float:right">Edit Project</button></a>
    {{Form::open(['method' => 'get', 'action' => ['SectionController@create']])}}
      {{ Form::hidden('projectId', $project->id) }}
      {{Form::submit('Add Section', ['class' => 'btn blueBtn', 'style' => 'float:right'])}}
    {{Form::close()}}
  </div>

			@endif
      </div>
    </div>
  </div>
  {{-- black and white desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskBW">
    </div>
  </div>



  @foreach($project->sections as $key => $section)
	@if($key % 2 == 0) {{-- checks for even index --}}
	  <div class="col-md-10 col-md-offset-1 project">
	    <div class="col-md-12 os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
	    {{-- <h1 style="margin-bottom: 2em"><center>{{$project->name}}</center></h1> --}}
	      <div class="col-md-8 col-sm-8">
	        <h2><center>{{$section->title}}</center></h2>
	   		<p class="sectext">{!!$section->content!!}</p>
              @if(\Auth::check())
				<center><a href="{{url('/section/'.$section->id.'/edit')}}"><button class="btn redBtn">Edit</button></a></center>
			  @endif
	      </div>
	      <div class="col-md-4 col-sm-4">
	    	<a target="blank" href="{{url('storage/img/'.$section->img)}}"><img style="width: 100%" src="{{url('storage/img/'.$section->img)}}"></a>
	      </div>
	    </div>
	  </div>
      {{-- color desk img spacer --}}
      <div class="col-md-12" style="padding: 0">
        <div class="mydeskColor">
        </div>
      </div>
    @endif
    @if($key %2==1) {{-- checks for odd index --}}
    {{-- project section section --}}
      <div class="col-md-10 col-md-offset-1 project">
        <div class="col-md-12 os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
          <div class="col-md-4 col-sm-4">
    	    <a target="blank" href="{{url('storage/img/'.$section->img)}}"><img style="width: 100%" src="{{url('storage/img/'.$section->img)}}"></a>
          </div>
          <div class="col-md-8 col-sm-8">
    	    <h2><center>{{$section->title}}</center></h2>
    		<p class="sectext">{!!$section->content!!}</p>
    		@if(\Auth::check())
			  <center><a href="{{url('/section/'.$section->id.'/edit')}}"><button class="btn redBtn">Edit</button></a></center>
			@endif
          </div>
        </div>
      </div>
    @include('_includes.bwDesk')
    @endif




  @endforeach


    {{-- Work Examples --}}
    <div class="col-md-12 work">
      <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">More Work Examples</h1></center>
      @foreach($works as $key => $work)
      <div class="col-md-4 col-sm-4 os-animation" data-os-animation="fadeIn" data-os-animation-delay={{$delays[$key]}}>
        <a href="{{url('/project/'.$work->id)}}">
          <div class="img__wrap">
            <img class="img__img" style="max-width:100%" src="{{url('storage/img/'.$work->img)}}" />
            <p class="img__description flex-center" style="margin: 0; padding: .5em">{{$work->name}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>


{{-- checks if sections are even to determin color or b%w spacer --}}
@if($sectionCount % 2 == 0) 
@include('_includes.colorDesk')

@else
@include('_includes.bwDesk')
@endif


</div>
@endsection  


