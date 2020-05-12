<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href='/css/app.css' rel='stylesheet'>
    </head>
    <body>
        <header>
          <div class='container'>
            <nav>
                <a href='#'>Home</a>
                <a href='#'>About</a>
                <a href='#'>Search</a>
                <a href='#'>Contact</a>
            </nav>
          </div>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>