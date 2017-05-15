@extends('_layout.template')
@section('content')
<div class="container-fluid" style="padding: 0">

  {{-- color desk img spacer --}}
  <div class="col-md-12" style="padding: 0">
    <div class="mydeskColor">
    </div>
  </div>

	  <div class="col-md-10 col-md-offset-1 project">
	    <div class="col-md-12 os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
	      <div class="col-md-12">
	        <h1><center><a target="blank" href="{{$project->link}}">{{$project->name}}</a></center></h1>
{{-- 	        <img src="{{url('/img/'.$project->img)}}"> --}}
				@if(\Auth::check())
				<center><a href="{{url('/project/'.$project->id.'/edit')}}"><button class="btn">Edit</button></a></center>
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
	      <div class="col-md-8">
	        <h2><center>{{$section->title}}</center></h2>
	   		<p>{!!$section->content!!}</p>
              @if(\Auth::check())
				<center><a href="{{url('/section/'.$section->id.'/edit')}}"><button class="btn">Edit</button></a></center>
			  @endif
	      </div>
	      <div class="col-md-4">
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
      <div class="col-md-4">
    	<a target="blank" href="{{url('storage/img/'.$section->img)}}"><img style="width: 100%" src="{{url('storage/img/'.$section->img)}}"></a>
      </div>
      <div class="col-md-8">
    	<h2><center>{{$section->title}}</center></h2>
    		<p>{!!$section->content!!}</p>
    		  @if(\Auth::check())
				<center><a href="{{url('/section/'.$section->id.'/edit')}}"><button class="btn">Edit</button></a></center>
			  @endif
      </div>
    </div>
  </div>



	  {{-- black and white desk img spacer --}}
	  <div class="col-md-12" style="padding: 0">
	    <div class="mydeskBW">
	    </div>
	  </div>

@endif








  @endforeach

  {{-- Footer --}}
  <div class="col-md-12 foots">
    <p class="footData">&copy; 2017 Duncan Fraiser Jr.</p>
  </div>

</div>
@endsection  


