<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finz LEADER</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
</head>
<body>
    
    <div class="header">
        <h1>FINZ LEADER</h1>
    </div>
    <div class="topnav">
        <a href="leader/projects">Projects catalog</a>
        <a href="leader/project">Your projects</a>
        <a href="leader/test">Leader test</a>
        <a href="#">News</a>
    </div>

    @yield('content')

    <div class="footer">
        <p>all rights reserved 2021</p>
    </div>
</body>
</html>