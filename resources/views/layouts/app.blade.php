<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--FONTAWESOME-->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!--Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href='{{ secure_asset('css/styles.css') }}'>
</head>
<body>
    <div id="app">
        <nav class="nav-wrapper deep-orange">
            <div class="container">
                <a class="brand-logo left" href="{{ url('/') }}">
                    MyPortfolioSite
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul  id="nav-mobile" class="right hide-on-med-and-down">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="right hide-on-med-and-down">
                        <li class="nav-item"><a href='#about'>About</a></li>
                        <li class="nav-item"><a href='#skill'>Skills</a></li>
                        <li class="nav-item"><a href='#products'>Products</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        @yield('footer_js')
    </div>
    <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  const slide = document.querySelector('.slider');
  M.Slider.init(slide,{
      height:800,
      duration:1000,
      indicators:false
  });
    const modal = document.querySelectorAll('.modal');
    M.Modal.init(modal);
    
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);
    function clipboard_ni_copy() 
    { 
        var copyText = document.querySelector('#copy-target'); 
        copyText.select(); 
        if(document.execCommand('copy')) {
            alert('クリップボードにコピーしました.');
        } else {
            alert('Ctrl+Cを押してください.');
        }
    }
</script>
</body>
</html>
