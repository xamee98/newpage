<?php 
    include_once 'includes/dbhandler.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SK Hela Osu Hala</title>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/projectstyle7.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

        <style>
          body{
            margin: 0 auto;
            background-repeat: no-repeat;
            background-size: 100% 720px;
            background-image: url(images/login-back.png);
            background-position: center;
            background-size: cover;
          }
          .nav-item {
            font-size: 25px;
            font-family: 'Patrick Hand', cursive;
            margin-left: 20px;
          }
          .form-group {
            width: 100%;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
          }
          .container{
            width: 500px;
            height: 450px;
            margin: 0 auto;
            margin-top: 80px;
            padding-top: 100px;
          }
          #loginform {
            margin-left: auto;
            margin-right: auto;
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(17, 25, 40, 0.75);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
          }
          #head {
            text-align: center;
            margin-top: 70px;
            color: #419e47;
            font-family: 'M PLUS Rounded 1c', sans-serif;
            font-weight: bold;
          }
          
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <nav class="navbar navbar-light bg-success">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="#">
                <img src="images/title.png" alt="" width="60px" height="50px" class="d-inline-block align-text-top">
              </a>
            </div>
          </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="login.php">Login</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link text-light" href="myproject2.html">Women</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-light" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="myproject4.html">Contact</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link text-light" href="myproject7.html">Payment</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active text-light" href="myproject5.html" tabindex="-1" aria-disabled="true">About Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search"  placeholder="Search" aria-label="search">
              <button class="btn btn-outline-dark text-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <h1 class="display-1" id="head">Login Page</h1>

      <!-- Login Form -->
      <div class="container" id="loginform">
        <form class="form" method="POST" action="loginhandle.php">
          <div class="form-group">
            <label for="uname" style="color: white;">User Name</label>
            <input type="text" class="form-control" name="uname" aria-describedby="emailHelp" placeholder="User Name">
          </div>
          <div class="form-group">
            <label for="pwd" style="color: white;">Password</label>
            <input type="password" class="form-control" name="pwd" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
      </div>  
    </body>
</html>

