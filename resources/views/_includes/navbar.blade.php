{{-- navbar --}}
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" style="background-color: #000" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <div class="hamburgerNotsTop">
            @if(\Auth::check())
              @if(App\Contact::newCons()!=0)
                <div class="lilNots">{{App\Contact::newCons()}}</div>
              @endif
            @endif
            </div>
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
            <li class="smIcon" ><a target="BLANK" style="padding:14px 5px;" href="https://duncanfraiser.github.io/"><img src="{{asset('img/github.png')}}"></a></li>
            <li class="smIcon"><a target="BLANK" style="padding:14px 5px; margin:0px" href="https://www.linkedin.com/in/duncan-fraiser-a66971bb/"><img src="{{asset('img/linkedin.png')}}"></a></li>
            <li class="smIcon"><a target="BLANK" style="padding:14px 5px; margin:0px" href="https://gooroo.io/g/duncanfraiser"><img src="{{asset('img/gooroo.png')}}"></a></li>
            @if (Auth::guest())

            {{-- <li><a href="{{url('/login')}}">Login</a></li> --}}
            @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                   @if(App\Contact::newCons()!=0)
                    <div class="lilNotsTop"><div class="lilNots">{{App\Contact::newCons()}}</div></div>
                    @endif
                  </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{url('/contact')}}">Inbox</a></li>
                      <li><a href="{{url('/landing/1/edit')}}">Edit Home Page</a></li>
                      {{-- <li><a href="{{url('/project/create')}}">Add Project</a></li> --}}
                      <li>
                        <a href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
               </li>
            @endif
          </ul>
        </div>
      </div>
    </div>





