<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>
    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

   <!--    <link href='/css/app.css' rel='stylesheet'>-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href='/css/p4.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
    <img id='logo' src='/images/NS Logo TC KF Energy_Square_Reduced Size.png' alt='Nabi Su Logo'>
    <h4><a href='/'>Return to home page</a></h4>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>