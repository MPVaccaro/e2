<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>
    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href='/css/p4.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
    <img id='logo' src='/images/NS Logo TC KF Energy_Square_Reduced Size.png' alt='Nabi Su Logo'>
    
    <div id="cssmenu"> 
        <ul class="navigation">
             <li id="navpage1"><a href='/' title="Home Page"> Home</a></li>
             <li id="navpage2"><a href="/reasonform" title="Play Now">  Play Now!</a></li>
             <li id="navpage3"><a href='/results' title="Results of Game"> Game Results</a></li>           
             <li id="navpage4"><a href='/reasons' title="Reasons to Try Tai Chi"> Reasons</a></li> 
             <li id="navpage5"><a href='/contact' title="Schedule"> Join Us!</a></li>
        </ul>
    </div>

</header>

<main>
@yield('body')
</main>

<!--@yield('body')-->
</body>
</html>