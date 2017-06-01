@extends('_layout.template')
@section('content')

    {{-- color desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskColor">
      </div>
    </div>



<div class="container" style="margin-top: 50px">
{{--     <div class="row"> --}}
        <div class="col-md-4 col-md-offset-4" style="padding: 5em 0em">
        
        <center><img style="margin-bottom: 2em" src="{{url('img/logo_white_sm.png')}}"></center>
{{--             <div class="panel panel-default"  style="margin: 3em 0">
                <div class="panel-heading">Login</div>
                <div class="panel-body"> --}}
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> --}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{-- <label for="password" class="col-md-4 control-label">Password</label> --}}

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-inline">
                            <div class="col-md-6">
                                <div class="checkbox" style="float: right">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6" >
                                <button type="submit" class="btn redBtn">
                                    Login
                                </button>

{{--                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> --}}
                            </div>
                        </div>
                    </form>
{{--                 </div>
            </div>
        </div> --}}
    </div>
</div>



    {{-- black and white desk img spacer --}}
    <div class="col-md-12" style="padding: 0">
      <div class="mydeskBW">
      </div>
    </div>



@endsection
