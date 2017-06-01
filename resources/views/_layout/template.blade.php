<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?21">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <script src="{{ asset('/js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
    <script src="https://use.fontawesome.com/b65a938b7e.js"></script>
{{-- google fonts for mobile view --}}
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">








    <script type="text/javascript">
      $(window).load(function() {
        $(".loader").fadeOut("slow");
      })
    </script>

        <script type="text/javascript">//<![CDATA[ 

// The following example will alert the user when he scrolls on any element that has a class ‘notify’:
$('.notify').waypoint(function(direction) {
  alert('Top of notify element hit top of viewport.');
},{
  offset:'50%'
});

// this watpoint tutorial is located at http://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
$('.toBeAnimated').addClass('animated fadeInLeft');

        $(function(){
            function onScrollInit( items, trigger ) {
                items.each( function() {
                var osElement = $(this),
                    osAnimationClass = osElement.attr('data-os-animation'),
                    osAnimationDelay = osElement.attr('data-os-animation-delay');
                  
                    osElement.css({
                        '-webkit-animation-delay':  osAnimationDelay,
                        '-moz-animation-delay':     osAnimationDelay,
                        'animation-delay':          osAnimationDelay
                    });
                    var osTrigger = ( trigger ) ? trigger : osElement;
                    
                    osTrigger.waypoint(function() {
                        osElement.addClass('animated').addClass(osAnimationClass);
                        },{
                            triggerOnce: true,
                            offset: '85%'
                    });
                });
            }
            onScrollInit( $('.os-animation') );
            onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
});//]]>  
    </script>


    <title>Duncan Fraiser's Portfolio</title>
    <link rel="icon" href="{{url('/img/logo_letters.png')}}">
  </head>
  <body>
      <div class="loader"></div>
        @include('_includes.navbar')
{{--    @include('_includes.nav') --}}
        @yield('content')
        @include('_includes.footer')
        @yield('scripts')
{{--    @include('_includes.footer')  --}}
  </body>
</html>
