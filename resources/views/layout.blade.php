<!DOCTYPE html>

<html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
      <title>@yield('title')</title>
    </head>
    
    <body>
      
      <header>
        <p>Ash's Laracasts Progress</p>
        
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
      </header>
      
      @yield('content')
      
      <footer>
        <p>Welcome to my copyright section, very nice!</p>
      </footer>
      
    </body>

</html>