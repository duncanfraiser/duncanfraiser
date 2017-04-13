<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <script src="{{ asset('/js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>




    <script type="text/javascript">
      $(window).load(function() {
        $(".loader").fadeOut("slow");
      })
    </script>

    <title>Duncan Fraiser's Portfolio</title>
    <link rel="icon" href="{{url('/img/logo_letters.png')}}">
  </head>
  <body>
  {{-- df page load icon --}}
    <div class="loader"></div>
  {{-- navbar --}}
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" style="background-color: #0000A0" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: #fff"></span>
            <span class="icon-bar" style="background-color: #fff"></span>
            <span class="icon-bar" style="background-color: #fff"></span>
          </button>
          <a class="navbar-brand scrollTo" href="#intro"><img height='100%' src="{{url('/img/logo_black.png')}}"></a>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#intro">Intro</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Skills</a></li>
            <li><a href="#references">My work</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    {{-- desk pic and my name fade in intro --}}
    <div class="container-fluid content mydesk">
      <div>
        <img style="margin-top: 25%;" class="animated fadeInDown" src="{{url('img/logo_white_sm.png')}}">
        <h1 class="animated fadeInUp introName"><strong>Duncan McLeod Fraiser Jr</strong></h1>
        <h3 style="color: #fff;" class="animated fadeInUpBig introTitle">Full Stack Developer</h3>
      </div>
    </div>





    {{-- About Me --}}    
    <div class="col-md-12" style="background: linear-gradient(#2775AF, #1E90FF)">
      <div class="os-animation about" data-os-animation="fadeIn" data-os-animation-delay="0.0s">
        <h1><center>About Me</center></h1>
      </div>
      <div class="os-animation about" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
        <center><img src="{{'img/profile.jpg'}}" class="image img-circle img-responsive flex-center"></center>
      </div>
      <div class="os-animation about" data-os-animation="fadeIn" data-os-animation-delay="0.6s" style="padding: 5em 15em">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>










<div class="col-md-12" style="background-color: #000">
    <div class="skills">
      <center><h1 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">Full Stack Skills</h1></center>
        


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
<div class="col-md-12" >
    <div class="mydeskBW" >
    <div class="col-md-9 col-md-offset-3" style="padding-top: 3em">
<h1 class="os-animation" style="color: #fff; data-os-animation="fadeIn" data-os-animation-delay="0s"><strong>Programing Languages</strong></h1>
</div>
<div class="col-md-3 col-md-offset-3" style="color: #fff">

    <ul style="font-size: 2em">
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s"><strong>PHP</strong></li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s"><strong>HTML5</strong></li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.6s"><strong>CSS</strong></li>
      <li class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.9s"><strong>jQuerry</strong></li>
    </ul>
</div>
<div class="col-md-3" style="color: #fff">

    <ul style="font-size: 2em">

      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s"><strong>JavaScript</strong></li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s"><strong>Java</strong></li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.6s"><strong>SQL</strong></li>
      <li class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.9s"><strong>MySql</strong></li>
    </ul>
</div>
    </div>
</div>
<div class="col-md-12" style="background-color:#fff; min-height: 500px; padding-top: 2em">
<p>Bacon ipsum dolor amet spare ribs ground round short loin pig landjaeger tri-tip corned beef strip steak cupim ham hock tongue. Jerky pork shankle alcatra pork belly pig frankfurter kielbasa. Flank kielbasa cupim, andouille rump sirloin bresaola landjaeger short loin fatback tongue. Turducken alcatra jowl salami, swine biltong capicola ham fatback tail.</p>

<p>Burgdoggen strip steak fatback pastrami meatloaf tongue. Bacon chicken brisket short ribs rump tri-tip pork chop corned beef. Frankfurter ribeye pork belly swine chicken shankle cow, t-bone sausage ball tip doner. Tail jerky ham, chicken picanha cow ham hock t-bone beef porchetta landjaeger.</p>

<p>Tri-tip tenderloin turkey ham kielbasa doner beef ribs biltong sirloin turducken swine pig. Flank venison short loin beef ribs turducken ribeye biltong. Fatback corned beef beef shank meatball short ribs pancetta. Andouille spare ribs hamburger, capicola pork chop ball tip boudin turkey t-bone chicken tail ground round. Venison pork strip steak tenderloin shankle pig. Boudin pastrami pork loin sausage bresaola, shank pork andouille turducken tail tongue shankle filet mignon strip steak.</p>

<p>Jerky pork chop sausage capicola, cow picanha tongue beef salami rump leberkas biltong burgdoggen pork loin jowl. Landjaeger porchetta kielbasa, salami ribeye capicola jerky. Drumstick landjaeger corned beef pork pork chop bresaola spare ribs shank cupim sirloin andouille alcatra pig salami porchetta. Salami ball tip ribeye beef ribs, strip steak filet mignon capicola drumstick cupim. Fatback sirloin burgdoggen ham filet mignon tongue ground round brisket doner. Pork jowl brisket pork loin short ribs.</p>

<p>Ball tip beef ribs bresaola pork loin landjaeger strip steak sausage chuck biltong jerky t-bone. Ham hock filet mignon pancetta spare ribs sausage, cupim capicola venison hamburger pork chop andouille burgdoggen ground round biltong beef. Pig pastrami jowl, ham drumstick andouille pork chop. Landjaeger pork chop corned beef shoulder, fatback frankfurter leberkas shankle. Filet mignon short ribs tail meatloaf biltong. Turkey short loin alcatra t-bone.</p>

<p>Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!</p>
  
</div>




  </body>
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
</html>