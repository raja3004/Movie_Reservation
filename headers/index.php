<!doctype html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Home Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
       .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        input[type=search] {
            width: 140px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            background-color: white;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 10px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }
        /* When the input field gets focus, change its width to 100% */
        
        input[type=search]:focus {
            width: 100%;
        }
        
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
            border-radius: 40%;
            width: 980px;
        }
        
        .button {
            border: none;
            color: white;
            padding: 6px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4%;
            text-decoration: none;
        }
        
        .button1 {
            background-color: white;
            color: black;
        }
        
        .button1:hover {
            background-color: blueviolet;
            color: white;
        }
        
        .form {
            position: relative
        }
        
        .form .fa-search {
            position: absolute;
            top: 20px;
            left: 20px;
            color: black
        }
        
        .form span {
            position: absolute;
            right: 17px;
            top: 13px;
            padding: 2px;
            border-left: 1px solid black
        }
        
        .left-pan {
            padding-left: 7px
        }
        
        .left-pan i {
            padding-left: 10px
        }
        
        .form-input {
            height: 55px;
            text-indent: 33px;
            border-radius: 10px
        }
        
        .form-input:focus {
            box-shadow: none;
            border: none
        }
        
        #imggray {
            filter: grayscale(100%);
            transition: filter 0.5s;
        }
        
        #imggray:hover {
            filter: grayscale(0);
        }
        
        button {
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            background: transparent;
            padding: 0;
            font-size: inherit;
            font-family: inherit;
        }
        
        button.learn-more {
            width: 12rem;
            height: auto;
        }
        
        button.learn-more .circle {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: relative;
            display: block;
            margin: 0;
            width: 3rem;
            height: 3rem;
            background: #282936;
            border-radius: 1.625rem;
        }
        
        button.learn-more .circle .icon {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
        }
        
        button.learn-more .circle .icon.arrow {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }
        
        button.learn-more .circle .icon.arrow::before {
            position: absolute;
            content: "";
            top: -0.29rem;
            right: 0.0625rem;
            width: 0.625rem;
            height: 0.625rem;
            border-top: 0.125rem solid #fff;
            border-right: 0.125rem solid #fff;
            transform: rotate(45deg);
        }
        
        button.learn-more .button-text {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.75rem 0;
            margin: 0 0 0 1.85rem;
            color: #282936;
            font-weight: 700;
            line-height: 2.1;
            text-align: center;
            text-transform: uppercase;
        }
        
        button:hover .circle {
            width: 100%;
        }
        
        button:hover .circle .icon.arrow {
            background: #fff;
            transform: translate(1rem, 0);
        }
        
        button:hover .button-text {
            color: #fff;
        }

/* Navbar search from here */
        
.form {
            --input-text-color: #fff;
            --input-bg-color: #212549;
            --focus-input-bg-color: transparent;
            --text-color: #949faa;
            color: white;
            --active-color: #1b9bee;
            --width-of-input: 200px;
            --inline-padding-of-input: 1.2em;
            --gap: 0.9rem;
        }
        
        .form {
            font-size: 0.9rem;
            display: flex;
            gap: 0.5rem;
            align-items: center;
            padding: 0.8em;
            padding-inline: var(--inline-padding-of-input);
            width: var(--width-of-input);
            position: relative;
            isolation: isolate;
        }
        
        .fancy-bg {
            position: absolute;
            width: 100%;
            inset: 0;
            background: var(--input-bg-color);
            border-radius: 30px;
            height: 100%;
            z-index: -1;
            pointer-events: none;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }
        
        .search,
        .close-btn {
            position: absolute;
        }
        
        .search {
            fill: var(--text-color);
            left: var(--inline-padding-of-input);
            width: 17px;
        }
        
        .close-btn {
            right: var(--inline-padding-of-input);
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            padding: 0.1em;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--active-color);
            opacity: 0;
            visibility: hidden;
        }
        
        .input {
            color: var(--input-text-color);
            width: 100%;
            margin-inline: min(2em, calc(var(--inline-padding-of-input) + var(--gap)));
            background: transparent;
            border: none;
        }
        
        .input:focus {
            outline: none;
        }
        
        .input::placeholder {
            color: var(--text-color)
        }
        
        .input:focus~.fancy-bg {
            border: 1px solid var(--active-color);
            background: var(--focus-input-bg-color);
        }
        
        .input:focus~.search {
            fill: var(--active-color);
        }
        
        .input:valid~.close-btn {
            opacity: 1;
            visibility: visible;
        }

 /* Main search from here */
        
 .searchbar {
            font-size: 14px;
            font-family: arial, sans-serif;
            color: #202124;
            display: flex;
            z-index: 3;
            height: 65px;
            background: white;
            border: 1px solid #dfe1e5;
            box-shadow: none;
            border-radius: 24px;
            margin: 0 auto;
            width: 605px;
            max-width: 5004px;
        }
        
        .searchbar:hover {
            box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
            border-color: rgba(223, 225, 229, 0);
        }
        
        .searchbar-wrapper {
            flex: 1;
            display: flex;
            padding: 5px 8px 0 14px;
        }
        
        .searchbar-left {
            font-size: 14px;
            font-family: arial, sans-serif;
            color: #202124;
            display: flex;
            align-items: center;
            padding-right: 13px;
            margin-top: -5px;
        }
        
        .search-icon-wrapper {
            margin: auto;
        }
        
        .search-icon {
            margin-top: 3px;
            color: #9aa0a6;
            height: 20px;
            line-height: 20px;
            width: 20px;
        }
        
        .searchbar-icon {
            display: inline-block;
            fill: currentColor;
            height: 24px;
            line-height: 24px;
            position: relative;
            width: 24px;
        }
        
        .searchbar-center {
            display: flex;
            flex: 1;
            flex-wrap: wrap;
        }
        
        .searchbar-input-spacer {
            color: transparent;
            flex: 100%;
            white-space: pre;
            height: 34px;
            font-size: 16px;
        }
        
        .searchbar-input {
            background-color: transparent;
            border: none;
            margin: 0;
            padding: 0;
            color: rgba(0, 0, 0, .87);
            word-wrap: break-word;
            outline: none;
            display: flex;
            flex: 100%;
            margin-top: -37px;
            height: 34px;
            font-size: 16px;
            max-width: 100%;
            width: 100%;
        }
        
        .searchbar-right {
            display: flex;
            flex: 0 0 auto;
            margin-top: -5px;
            align-items: stretch;
            flex-direction: row
        }
        
        .searchbar-clear-icon {
            margin-right: 12px
        }
        
        .voice-search {
            flex: 1 0 auto;
            display: flex;
            cursor: pointer;
            align-items: center;
            border: 0;
            background: transparent;
            outline: none;
            padding: 0 8px;
            width: 2.8em;
        }
        a:link {
  text-decoration: none;
  color: black;
}

</style>

    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
    <link href="footers.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link href="headers.css" rel="stylesheet">
  </head>


<main>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <h2>PopCornTimes</h2>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
         
        </ul>

        <div class="form">
                        <input placeholder="Search..." required="" type="text" class="input">
                        <div class="fancy-bg"></div>
                        <div class="search">
                            <svg class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                        </div>
                        <div class="close-btn">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
              </svg>
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;

        <div class="text-end" >
          <!-- use the below to handle user login logout-->
        <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
{
?>
<div class="dropdown">
<a href="#" class="btn btn-secondary dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;background-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important;border-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important;" ><img style= "border-radius:20px;width:48px" src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"><span> Welcome <?php echo $_SESSION['user_name'] ?> </span><b class="caret"></b></a>
  
  <ul class="dropdown-menu" styl="width:100%" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    <li><a class="dropdown-item" href="cancel.php">Cancellation</a></li>

  </ul>
</div>
 
<?php }else{ ?>

 
         
  <a class="" href="user_access.php?navigate=login" target="_blank" style="  text-decoration: none;"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a class="" href="user_access.php?navigate=signup" target="_blank" style="  text-decoration: none;"><button type="button" class="btn btn-warning">Sign-up</button></a>
          
          <?php } ?>    <!-- use the below to handle user login logout--> 
        </div>

      </div>
    </div>
  </header>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
         
        </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <img src="ayyappanum-kozhiyum-02.jpeg" title="Ayyappanum-kozhiyum " height="480px" width="1100px">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <img src="don1.jpg" height="480px" title="Don" width="1100px">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <img src="hey1.jpg" height="480px" title="Hey Sinamika" width="1100px">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <img src="r11.webp" height="480px" title="RRR" width="1100px">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
        </div>

  <!-- city search -->
 
  <h5 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-align: center;font-size:40px;color:teal;">&nbsp;Select your City </h5><h5 style="font-family:Verdana, Geneva, Tahoma, sans-serif;text-align:left;font-size:20px;color:black;">
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <button class="button button1"><a class="button1" href="coimbatore.html" target="_blank" style="  text-decoration: none;"><i class='fas fa-map-marker-alt'></i>&nbsp;Chennai</button> </a>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
     &nbsp;&nbsp;
     <button class="button button1"><a class="button1" href="coimbatore.php" target="_blank" style="  text-decoration: none;"><i class='fas fa-map-marker-alt'></i>&nbsp;Coimbatore</button></a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="button button1"><a class="button1" href="coimbatore.html" target="_blank" style="  text-decoration: none;"><i class='fas fa-map-marker-alt'></i>&nbsp;Hyderabad</button></a><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="button button1"><a class="button1" href="coimbatore.html" target="_blank" style="  text-decoration: none;"><i class='fas fa-map-marker-alt'></i>&nbsp;Bengaluru</button></a> 
      &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      <button class="button button1"><a class="button1" href="coimbatore.html" target="_blank" style="  text-decoration: none;"><i class='fas fa-map-marker-alt'></i>&nbsp;Kochi</button> </a>
  </h5><br><br><br>
  <div class="searchbar">
            <div class="searchbar-wrapper">
                <div class="searchbar-left">
                    <div class="search-icon-wrapper">
                        <span class="search-icon searchbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </span>
                    </div>
                </div>

                <div class="searchbar-center">
                    <div class="searchbar-input-spacer"></div>

                    <input type="text" class="searchbar-input" maxlength="2048" name="q" autocapitalize="off" autocomplete="off" title="Search" role="combobox" placeholder="Enter your city name...">
                </div>

                <div class="searchbar-right">
                    <svg class="voice-search" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="#4285f4" d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z">
                </path>
                <path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path>
                <path fill="#fbbc05" d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z">
                </path>
                <path fill="#ea4335" d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z">
                </path>
            </svg>
                </div>
            </div>
        </div><br><br><br>
 
    <!-- Three columns of text below the carousel |||| artist-->
    <h2 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-align: center;font-size:60px;color:teal;">Trending Artists</h2>
        <hr><br>
        <div class="row">
            <div class="col-lg-4" align="center">
                <img id="imggray" src="raj.webp" height="180px" width="200px" style="border-radius: 60%;border-style: double;border-color: red;">
                <h2>Rajinikanth</h2>
                <p>Rajinikanth is an Indian actor, producer and screenwriter who works predominantly in Tamil cinema.He has won many awards, including four Tamil Nadu State Film Best Actor Awards and a Filmfare Best Tamil Actor Award.</p>

                <button class="learn-more">
          <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
          </span>
          <span class="button-text"><a href="https://www.imdb.com/name/nm0707425/"> Know More</a></span>
        </button>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
                <img id="imggray" src="v11.webp" height="180px" width="200px" style="border-radius: 60%;border-style: double;border-color: red;">
                <h2>Vijay</h2>
                <p>Joseph Vijay Chandrasekhar, known mononymously as Vijay, is an Indian actor, dancer & playback singer who works predominantly in Tamil cinema.</p><br>
                <button class="learn-more">
          <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
          </span>
          <span class="button-text" ><a href="https://www.imdb.com/name/nm0897201/">Know More</a></span>
        </button>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4" align="center">
                <img id="imggray" src="sk1.jpg" height="180px" width="200px" style="border-radius: 60%;border-style: double;border-color: red;">
                <h2>Sivakarthikeyan</h2>
                <p>Sivakarthikeyan, also referred to as SK, is an Indian actor, playback singer, film producer, lyricist, and television presenter who works predominantly in Tamil cinema.</p>
                <br> <button class="learn-more">
          <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
          </span>
          <span class="button-text" ><a href="https://www.imdb.com/name/nm4792434/">Know More</a></span>
        </button>
            </div>
            <!-- /.col-lg-4 -->
    </div><br><br><br>
    <footer>
      <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col-2">
              <h5>Hey, Attention Please!</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-file-powerpoint ">  &nbsp;</i>Policy</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-rupee-sign">&nbsp;</i>Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-file-alt ">&nbsp;</i>FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="far fa-address-book ">  &nbsp;</i>About US</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5></h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5></h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-1">
              <form>
                <h5>Subscribe to get an exclusive update on new releases</h5>
                
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 - 2023<br> PopCornTimes Inc.<br> All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><img src="twit.png" height="35px" width="40px"></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><img src="ins.png" height="35px" width="40px"></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><img src="face.png" height="35px" width="40px"></a></li>
            </ul>
          </div>
    </footer>
 
  </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
