<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>portfolio</title>
    <link rel="icon" href="{{url('/img/letters.png')}}">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
               <script src="{{ asset('/js/jquery-3.2.0.min.js') }}"></script>
               <script src="{{ asset('/js/bulma.js') }}"></script>
               <script src="{{ asset('/js/clipboard.min.js') }}"></script>
                <link rel="stylesheet" href="{{ asset('css/custom2.css') }}">


                  <style>
    @media screen and (max-width: 768px) {
      #menu-toggle:checked + .nav-menu {
        display: block;
      }
    }
  </style>

  </head>
  <body>
<nav class="nav">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item">
        Theory and Practice
      </a>
    </div>

    <label for="menu-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <input type="checkbox" id="menu-toggle" class="is-hidden"/>

    <div class="nav-right nav-menu">
      <a class="nav-item">
        About
      </a>
      <a class="nav-item">
        Archives
      </a>
      <a class="nav-item">
        Tags
      </a>
    </div>
  </div>
</nav>


<section class="hero  is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Full Height title
      </h1>
      <h2 class="subtitle">
        Full Height subtitle
      </h2>
    </div>
  </div>

<footer class="footer" style="height: 1em" >
  <div class="container is-fluid" style="background: red; padding: 0px; margin:0px; ">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma</strong> by <a style="color:red" href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
      </p>
      <p>
        <a class="icon" href="https://github.com/jgthms/bulma">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
</section>
  </body>
 </html>



 <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>CSS only Bulma nav bar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css" />
  <style>
    @media screen and (max-width: 768px) {
      #menu-toggle:checked + .nav-menu {
        display: block;
      }
    }
  </style>
</head>
<body>

<nav class="nav">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item">
        Theory and Practice
      </a>
    </div>

    <label for="menu-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <input type="checkbox" id="menu-toggle" class="is-hidden"/>

    <div class="nav-right nav-menu">
      <a class="nav-item">
        About
      </a>
      <a class="nav-item">
        Archives
      </a>
      <a class="nav-item">
        Tags
      </a>
    </div>
  </div>
</nav>

</body>
</html>