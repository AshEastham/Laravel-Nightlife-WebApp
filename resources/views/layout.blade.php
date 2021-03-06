<!DOCTYPE html>

<html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
      <!-- FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      
      <!-- CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.css') }}">
    
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">      
      
      <title>@yield('title')</title>
    </head>
    
    <body>
      <div id="top-bar">
        <div class="container">
            <div class="login-buttons">
                @include('logItems')             
            </div>
        </div>
      </div>    
      
      <div id="header">
        <div class="container">
        
            <!--LOGO AREA-->
            <div class="col-lg-6">
                <div id="logo">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="ash-eastham-logo">
                </div>
            </div>
            
            @include('navigation')   

        </div>          
      </div>
      
      <!--CONTENT-->
      <div id="main">
        <div class="container">
            <h1 class="page-title">@yield('page-title')</h1>
            @yield('content')
        </div>    
      </div>
      
      <div class="clear"></div>
      
      <!--FOOTER-->
      <div id="footer">
        <div class="container">
        
            <div class="footer-top">
                <ul class="col-lg-6 col-sm-12">
                    <li id="logo-footer">
                        <a href="/"><img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="ash-eastham-logo"></a>
                    </li>
                    <li>Copyright &copy; 2019 Ash Eastham</li>
                    <li>All rights reserved.</li>
                    <li>Privacy & Terms</li>
                </ul>
            </div>
            
            <div class="clear"></div>
            
            <!--BOTTOM FOOTER-->
            <div class="footer-bottom">
                <ul class="btt col-lg-9 col-sm-8">
                    <li><a href="#header" class="fa-left fa fa-arrow-up"></a></li>
                </ul>
                <ul class="social col-lg-3">
                    <li><a href="https://soundcloud.com/eastyy" class="fa fa-soundcloud" target="_blank"></a></li>
                    <li><a href="https://www.instagram.com/ash_eastham/" class="fa fa-instagram" target="_blank"></a></li>
                    <li><a href="https://twitter.com/ashleyeastham" class="fa fa-twitter" target="_blank"></a></li>
                    <li><a href="https://www.facebook.com/EastyyUK/" class="fa fa-facebook" target="_blank"></a></li>
                </ul>
          </div>
      
        </div>
      </div>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/smooth_scroll.js') }}"></script>
      <script src="{{ asset('js/fullscreen-nav.js') }}"></script>
          
           
    </body>  
</html>