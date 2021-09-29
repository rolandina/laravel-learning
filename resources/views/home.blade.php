<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/styles.css">
    <title>Finz</title>
    <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        .header {
          padding: 10px 16px;
          background: #555;
          color: #f1f1f1;
        }
        
        .content {
          padding: 16px;
        }
        
        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
        }
        
        .sticky + .content {
          padding-top: 102px;
        }
        </style>
</head>
<body>
    <div class = "header" id="myHeader">
        <nav>        
            <a href="/leader/login">log in as a project leader</a> 
            <a href="/founder/login">log in as a founder</a>       
        </nav>
        
    </div>
    <div class="content">
        <h1>Finz home page<h1>
        <p>sdlkfajsdglsjfo</p>
    </div>


    <div class = "footer">
        <div id="all-rights-reserved">
            Finz. All rights reserved. 2021 
        </div>
        <div id="contacts">
            <p> <span>Address:</span>  sdaklfjsdfkj</p>
            <p> <span>Phone:</span> dsklfjsdj</p>
            <p> <span>Email:</span> dsklfjsdj</p>
        </div>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </div>
    </div>
    
    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>
</body>
</html>