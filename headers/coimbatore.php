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
    <title>Coimbatore- Screening</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="headers.css" rel="stylesheet">
    <link href="footers.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link href="headers.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
        /*boook ticket button*/
        
        .fancy {
            background-color: transparent;
            border: 2px solid #000;
            border-radius: 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            float: right;
            font-weight: 700;
            letter-spacing: 0.05em;
            margin: 0;
            outline: none;
            overflow: visible;
            padding: 1.25em 2em;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            transition: all 0.3s ease-in-out;
            user-select: none;
            font-size: 13px;
            height: 30px;
        }
        
        .fancy::before {
            content: " ";
            width: 1.5625rem;
            height: 1px;
            background: black;
            top: 50%;
            left: 1.5em;
            position: absolute;
            transform: translateY(-50%);
            transform-origin: center;
            transition: background 0.3s linear, width 0.3s linear;
        }
        
        .fancy .text {
            font-size: 1.125em;
            line-height: 0.1em;
            padding-left: 2em;
            display: block;
            text-align: left;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
            text-decoration: none;
            color: black;
        }
        
        .fancy .top-key {
            height: 2px;
            width: 1.5625rem;
            top: -2px;
            left: 0.625rem;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, left 0.3s ease-out;
        }
        
        .fancy .bottom-key-1 {
            height: 1px;
            width: 1.5625rem;
            right: 1.875rem;
            bottom: -2px;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }
        
        .fancy .bottom-key-2 {
            height: 2px;
            width: 0.625rem;
            right: 0.625rem;
            bottom: -2px;
            position: absolute;
            background: #e8e8e8;
            transition: width 0.5s ease-out, right 0.3s ease-out;
        }
        
        .fancy:hover {
            color: white;
            background: blue;
        }
        
        .fancy:hover::before {
            width: 0.9375rem;
            background: white;
        }
        
        .fancy:hover .text {
            color: white;
            padding-left: 1.5em;
        }
        
        .fancy:hover .top-key {
            left: -2px;
            width: 0px;
        }
        
        .fancy:hover .bottom-key-1,
        .fancy:hover .bottom-key-2 {
            right: 0;
            width: 0;
        }
    </style>


    <!-- Custom styles for this template -->

</head>

<body>

    <svg src="cityicon.jpeg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
</svg>

    <main>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <h2>PopCornTimes - Coimbatore Screening</h2>
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
        <div class="text-end">

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
                    
                    <?php } ?> 
        </div>
      </div>
    </div>
  </header>

  <div style="background: linear-gradient(rgba(0, 18, 50, 0.84), rgba(0, 0, 0, 0.95)),
  url('./lloyd-dirks-4SLz_RCk6kQ-unsplash.jpg') bottom;">
 <br>
 <div class="container">

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">
            <img src="fir.jpeg" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

            <div class="card-body">
                <p class="card-text">FIR is a thriller story based on the life of a young man named Irfan Ahmed. The narrative cap<span id="dots">...</span><span id="more">tures the story of an innocent man, Irfan, who is caught in inexplicable circumstances that alters his life and everyone around him. The film also depicts the chain of events that shatter Irfan’s life and the media trials that’s quick to portray him as the evil incarnated.</span>
                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                <div class="d-flex justify-content-between align-items-center">
                    <a class="fancy" href="FIR_CBE.php">
                        <span class="top-key"></span>
                        <span class="text">Book now</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </a>
                    <small class="text-muted"><b><i class='far fa-clock'>&nbsp;&nbsp;</i>2 h 33 mins</small></b>
                </div>
            </div>
        </div>
    </div>
            <div class="col">
                        <div class="card shadow-sm">
                            <img src="don.jpg" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

                            <div class="card-body">
                                <p class="card-text">Don is an upcoming Indian Tamil-language action comedy film written and directed by Cibi Chakaravarthi <span id="dots">...</span><span id="more">in his directorial debut, and produced by Allirajah Subaskaran of Lyca Productions.Sivakarthikeyan starred in the lead role and co-produced the film under his Sivakarthikeyan Productions banner, while Priyanka Arul Mohan, S. J. Suryah, Samuthirakani and Soori appearing in pivotal roles.</span>
                                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="fancy" href="FIR_CBE.html">
                                        <span class="top-key"></span>
                                        <span class="text">Book now</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </a>
                                    <small class="text-muted"><b><i class='far fa-clock'>&nbsp;&nbsp;</i>2 h 40 mins</small></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="beast.jpg" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

                            <div class="card-body">
                                <p class="card-text">After a shopping mall in Chennai is hijacked by terrorists who hold the visitors as hostages<span id="dots">...</span><span id="more">Veera Raghavan, a spy also trapped in the mall, decides to save the hostages by eliminating the terrorists.</span>
                                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="fancy" href="FIR_CBE.html">
                                        <span class="top-key"></span>
                                        <span class="text">Book now</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </a>
                                    <small class="text-muted"><b><i class='far fa-clock'>&nbsp;&nbsp;</i>2 h 35 mins</small></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <!--  extra 2nd row movies-->
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="r11.webp" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

                            <div class="card-body">
                                <p class="card-text">A tale of two legendary revolutionaries and their journey far away from home. After their journey they return <span id="dots">...</span><span id="more"> home to start fighting back against Britishcolonialists in the 1920s.</span>
                                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="fancy" href="FIR_CBE.html">
                                        <span class="top-key"></span>
                                        <span class="text">Book now</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </a>
                                    <small class="text-muted"><b><i class='far fa-clock'>&nbsp;&nbsp;</i>3 h 07 mins</small></b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="hey1.jpg" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

                            <div class="card-body">
                                <p class="card-text">The lives of Mouna, a weather scientist who falls in love with Yaazhan, a quirky and loving guy. What happens <span id="dots">...</span><span id="more">to their relationship after a couple of years and how things take an unexpected turn after the arrival of Malarvizhi?</span>
                                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="fancy" href="FIR_CBE.html">
                                        <span class="top-key"></span>
                                        <span class="text">Book now</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </a>
                                    <small class="text-muted"><b><i class='far fa-clock'>&nbsp;&nbsp;</i>2 h 35 mins</small></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="ett.webp" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

                            <div class="card-body">
                                <p class="card-text">A lawyer turns judge jury and executioner and goes after a gang, led by a minister's son, that threatens women<span id="dots">...</span><span id="more"> with videos of them.</span>
                                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="fancy" href="FIR_CBE.html">
                                        <span class="top-key"></span>
                                        <span class="text">Book now</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </a>
                                    <small class="text-muted"><b><i class='far fa-clock'>&nbsp;&nbsp;</i>2 h 13 mins</small></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 style="color: white;font-family:Verdana, Geneva, Tahoma, sans-serif;text-align: center;">Upcoming Releases -</h2>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="vikram.jpg" height="300px" width="415px" style="border-radius: 05%;border-style:groove;border-color: red;">

                            <div class="card-body">
                                <p class="card-text">Raajkamal Films International`s Vikram is an upcoming multi-lingual action-thriller film, starring Kamal Haasan, Vijay Sethupathi and Fahadh Faasil in prominent roles <span id="dots">...</span><span id="more">The film is produced by Kamal Haasan and R.Mahendran..</span>
                                    <button onclick="myFunction()" id="myBtn">Read more</button></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="fancy" href="FIR_CBE.html">
                                        <span class="top-key"></span>
                                        <span class="text">Reserve</span>
                                        <span class="bottom-key-1"></span>
                                        <span class="bottom-key-2"></span>
                                    </a>
                                    <small class="text-muted"><b><i class="fa fa-film">&nbsp;&nbsp;</i>Release: June 2022</small></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  <div class="container">
    <footer><br>
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
      <br><br><br>
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 - 2023<br> PopCornTimes Inc.<br> All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><img src="twitter-3.webp" height="35px" width="40px"></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><img src="ins.png" height="35px" width="40px"></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><img src="fb-7.webp" height="35px" width="40px"></a></li>
            </ul>
          </div>
    </footer>
  </div>
  <script>
    function myFunction() {
var dots = document.getElementById("dots");
var moreText = document.getElementById("more");
var btnText = document.getElementById("myBtn");

if (dots.style.display === "none") {
  dots.style.display = "inline";
  btnText.innerHTML = "Read more";
  moreText.style.display = "none";
} else {
  dots.style.display = "none";
  btnText.innerHTML = "Read less";
  moreText.style.display = "inline";
}
}

</script>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
