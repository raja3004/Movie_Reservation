<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Food Booking</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
	<link href="footers.css" rel="stylesheet">
<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
	
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <h2>PopCornTimes</h2>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
         
        </ul>

        
      </div>
    </div>
  </header>


<!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading" style="color: white;">Food Gallery</h1>
				<hr align="center">
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<a href="images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img1.jpg" alt="gallery img" style="border-radius: 50px;"></a>
				<div>
					<br><br><br>
				</div>
				<a href="puff.jpeg" data-lightbox-gallery="zenda-gallery"><img src="puff.jpeg" alt="gallery img" style="border-radius: 50px;"></a>
				<div>
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<a href="cold.jpeg" data-lightbox-gallery="zenda-gallery"><img src="cold.jpeg" alt="gallery img" style="border-radius: 50px;"></a>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<a href="images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery" ></a><img src="images/gallery-img4.jpg" alt="gallery img" style="border-radius: 50px;"></a>
				<div>
					
				</div>
				<br>
				<a href="images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img5.jpg" alt="gallery img" style="border-radius: 50px;"></a>
				<div style="color: linear-gradient(rgba(0, 18, 50, 0.84), rgba(0, 0, 0, 0.95));">
					
				</div>
			</div>
		</div>
	</div>
</section>


<!-- menu section -->
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Menu</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Veg Puff .................................... <span>₹75</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput type=number min=0 max=5>
					<button onclick="increment()">+</button>
					<button onclick="decrement()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Chicken Puff ............................ <span>₹95</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=sec type=number min=0 max=5>
					<button onclick="increments()">+</button>
					<button onclick="decrements()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Pizza ....................................... <span>₹150</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput2 type=number min=0 max=5>
					<button onclick="increment2()">+</button>
					<button onclick="decrement2()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Popcorn ................................. <span>₹110</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput3 type=number min=0 max=5>
					<button onclick="increment3()">+</button>
					<button onclick="decrement3()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Cold Coffee ............................. <span>₹120</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput4 type=number min=0 max=5>
					<button onclick="increment4()">+</button>
					<button onclick="decrement4()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Hot Dog ................................. <span>₹150</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput5 type=number min=0 max=5>
					<button onclick="increment5()">+</button>
					<button onclick="decrement5()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Chocolate Brownie ................... <span>₹80</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput6 type=number min=0 max=5>
					<button onclick="increment6()">+</button>
					<button onclick="decrement6()">-</button></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Donuts .................................... <span>₹75</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id=demoInput7 type=number min=0 max=5>
					<button onclick="increment7()">+</button>
					<button onclick="decrement7()">-</button></h4>
				
			</div>
		</div><br>
		<center><a href="payment.php" style="text-decoration: none;">
        <button style="padding-left: 50px;padding-right: 50px; font-family: cursive; font-size:x-large;">Checkout</button></a></center>
	</div>
</section>		
<center><label style="color: white;"></label></center>







<footer style="background-color: white;">
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

<!-- JAVASCRIPT JS FILES -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>


<script>
	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}

	function increments() {
	   document.getElementById('sec').stepUp();
	}
	function decrements() {
	   document.getElementById('sec').stepDown();
	}

	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}

	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}

	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}

	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}

	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}

	function increment() {
	   document.getElementById('demoInput').stepUp();
	}
	function decrement() {
	   document.getElementById('demoInput').stepDown();
	}






	
        
 </script>
 <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
