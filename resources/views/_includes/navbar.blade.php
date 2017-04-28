  {{-- navbar --}}
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" style="background-color: #000" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: #fff"></span>
            <span class="icon-bar" style="background-color: #fff"></span>
            <span class="icon-bar" style="background-color: #fff"></span>
          </button>
          <a class="navbar-brand scrollTo" href="{{url('/')}}"><img height='100%' src="{{url('/img/logo_white_sm.png')}}"></a>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/resume')}}">resume</a></li>
            <li><a href="{{url('/contact/create')}}">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>