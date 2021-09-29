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
    
    <div class="header" id="fixedHeader">
        <div class = "header-text">
            <img class = "logo" src="/images/logo-app.png" alt="">
            <h1 class = "h1-header">  FINZ LEADER</h1>
        </div>
        <div class="topnav">
            <a href="/leader/projects-catalog">Projects catalog</a>
            <a href="/leader/your-projects">Your projects</a>
            <a href="/leader/test">Leader test</a>
            <a href="#">News</a>
        </div>
    </div>
    
    <div class='content'>
        @yield('content')
    </div>
    <div class="footer">
        <p>all rights reserved 2021</p>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>