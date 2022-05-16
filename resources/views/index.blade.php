<!DOCTYPE html>
<html lang="en">
<head>

 <!--   |---------------------------|
       |      Meta Tags Here       |
      |---------------------------| -->
	<!-- Charecter set -->
	<meta charset="UTF-8">
	<!--turn off IE compatibility mode -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- View Port -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <!--   |---------------------------|
       |    Website Onpage SEO     |
      |---------------------------| -->
	
  <!-- this is title -->
	<title>Apps Landing Blog Website</title>
	<!-- Keyword -->
	<meta name="Keyword" content=" apps landing page, blog website, blog page, blog apps page">
	<!-- Meta Description -->
	<meta name="description" content="160 characters">

	<!--   |---------------------------|
       |    All Fonts Here      |
      |---------------------------| -->

	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
  

 <!--   |---------------------------|
       |    All Css File Here      |
      |---------------------------| -->
	<!-- Slider CDN -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" /> -->
  <!-- css for bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<!-- css for Fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">
	<!-- my css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<!-- sslide for slider Oytizo -->
	<link rel="stylesheet" href="{{asset('assets/css/sslide.css')}}">
	<!-- text -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
	<!-- responsive css file -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	

</head>
<body>

<!--    |....................................|
       |			Content Here			|
      |....................................| -->
<!-- 			NOTE: 
	1. Here We have used font awesome 5, don't take font awesome 6 icons. Use font awesome 5 icons here 
	2. We have used bootstrap 5, so don't use bootstrap 4 codes.
	3. Before write code, go to trello once more, look at your work, which section you are mentioned.
	4. In the below, comments your name side of your working section

-->

<!-- Nav Bar section Start -->
<section>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
		  <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">
			  <li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link"href="#">SereenShots</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">How It Work</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link"  href="#">Pricing</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href=" {{ Route('blog') }} ">Blog</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Download</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item">
				<a href="#" class="btn-1">Try For Free</a>
			  </li>
				 
			</ul>
	
		  </div>
		</div>
	</nav>
</section>
<!-- Nav Bar section End -->

<!-- Hero Section Start -->
<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<h1>Awesome Landing Page to <br> <span style="color: #39bced;" >Showcase</span> Your App</h1>
					<p class="p-text black-clr">Is amazing, modern and clean landing page for showcase <br> your app</p>
				</div>
				<a href="#" class="btn-1">Try For Free</a>
				</div>
				<div class="col-md-6 image">
					
					<div class="sliderContainer">

						<img class="magicStartLoop" src="{{asset('assets/images/hero-mobile2.png')}}" class="img-fulid" alt="Hero Image">
						<img class="hidden" src="{{asset('assets/images/hero-mobile.png')}}" class="img-fulid" alt="Hero Image">

					  </div>
				</div>
		</div>
	</div>

</section>
<!-- Hero Section End -->

<!-- Why use this app section Start -->
<section>
	<div class="container mt-5 mb-5">
		<h2 class="">Why Use This App</h2>
		<div class="row mt-2 g-2 app">
			<div class="col-md-4">
				<div class="card d-flex justify-content-between p-3">
					<div class="text-center">
						 <img src="{{asset('assets/images/why-icon1.png')}}" class="image-fulid" alt="why-icon-image">
						 <h3 class="py-3">Share Your Post</h3>
						 <p class="p-text text-center">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore</p>
					 </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card d-flex justify-content-between p-3">
					<div class="text-center">
						 <img src="{{asset('assets/images/why-icon2.png')}}" class="image-fulid" alt="why-icon-image">
						 <h3 class="title py-3">Share Your Post</h3>
						 <p class="p-text text-center">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore</p>
					 </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card d-flex justify-content-between p-3">
					<div class="text-center">
						 <img src="{{asset('assets/images/why-icon3.png')}}" class="image-fulid" alt="why-icon-image">
						 <h3 class="py-3">Share Your Post</h3>
						 <p class="p-text text-center">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore</p>
					 </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Why use this app section End Zubair-->



<!-- Awesome apps features Start Oytizo -->
<section class="container-back">
	<div class="container">
		<div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 text-center">
					<div class="awesome">
						<h2>Awesome app features</h2>
						<p class="p-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt ut labore
							et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6">
					<div class="img">
						<img src="{{asset('assets/images/awesome-app.png')}}" alt="photo">
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 p-5">
					<button class="angle" id="up"><i class="fa fa-angle-up"></i></button>
					<div class="vertical-row">
						<div class="vertical-row-profile">
							<vr class="vertical-row-in1" id="first">
						</div>
						<div class="profile-logo">
							<img src="{{asset('assets/images/app-user-icon-1.png')}}" alt="">
						</div>
						<div class="make-profile">
							<h3>Make Profile</h3>
							<p>Lorem ipsum dolor sit, amet provident do why yes no temporibus maxime facilis</p>
						</div>
					</div>
					<div class="vertical-row">
						<div class="vertical-row-profile">
							<vr class="vertical-row-in2" id="second">
						</div>
						<div class="profile-logo">
							<img src="{{asset('assets/images/app-user-icon-2.png')}}" alt="">
						</div>
						<div class="make-profile">
							<h3>Fully Secured</h3>
							<p>Lorem ipsum dolor sit, amet provident do why yes no temporibus maxime facilis</p>
						</div>
					</div>
					<div class="vertical-row">
						<div class="vertical-row-profile">
							<vr class="vertical-row-in3" id="third">
						</div>
						<div class="profile-logo">
							<img src="{{asset('assets/images/app-user-icon-3.png')}}" alt="">
						</div>
						<div class="make-profile">
							<h3>Like and Share each other post</h3>
							<p>Lorem ipsum dolor sit, amet provident do why yes no temporibus maxime facilis</p>
						</div>
					</div>
					<button class="angle" id="down"><i class="fa fa-angle-down"></i></button>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 text-center">
					<div class="awesome">
						<h2>Apps ScreenShots</h2>
						<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
				</div>
			</div>
			<!-- Apps screenshots Start -->
			<div class="card-carousel">
				<div class="my-card my-card1"></div>
				<div class="my-card my-card2"></div>
				<div class="my-card my-card3"></div>
				<div class="my-card my-card4"></div>
				<div class="my-card my-card5"></div>
			  </div>
			<!-- Apps screenshots End -->
		</div>
</section>
<!-- Awesome apps features Start Oytizo-->

<!-- How does this app work Start Omar -->
<section>
	<div class="container">
	   <div class="awork">
	   <div class="row">
		   <div class="col-md-12 ">
			   <div class="text-center">
				   <h2>How Does this App Work</h2>
			   </div>
		   </div>
	   </div>
	   <div class="row">
		   <div class="col-md-5 ">
			   <div class="write ">
				   <h4 class="abc">Create a New Post & Share Fellings</h4>
				   <p class=" text-align-justify p-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br>eiusmod tempor incididunt et dolore magna aliqua. Ut enim <br>ad minim veniam, quis nostrud ullamco laboris nisi ut<br> aliquip.</p>
				   <p class="py-2">comando consequent.Duis aute irure dolor in reprehenderit in<br>voluptate velit esse cillum dolor</p>
			   </div>
		   </div>
		   <div class="bg col-md-7 ">
			   <div class="root">
				   <div class="bg1">
					   <img src="{{asset('assets/images/app-video-bg1.svg')}}">
				   </div>
				   <div class="bg2">
					   <img src="{{asset('assets/images/app-video-bg2.svg')}}">
				   </div>
				   <div class="right">
					   <img src="{{asset('assets/images/app-video.png')}}">
				   </div>

			   </div>

		   </div>
	   </div>
	   </div>
   </div>
</section>
<!-- How does this app work End Omar -->

<!-- Easy pricing plan Start Omar -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ptxt text-center py-3">
				<h2>Easy Pricing Plan</h2>
				<p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt magni commodi veniam aliquid aspernatur repudiandae harum architecto!<br> Maxime ipsum similique debitis vero mollitia labore nobis reprehenderit tempore.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ">
				<div class="cd card" style="width: 21rem;">
					<img src="{{asset('assets/images/pricing-bg.png')}}" class="card-img-top" alt="...">
					<div class="cbody card-body">
						<div class="txt text-center">
							<h5 class="card-title">Personal</h5>
							<h3 class="card-title" >FREE</h3>
							<h6 class="access">Limited Access</h6>
							<hr class="hr">
							<p class="card-text py-2">1000 Messages per month<br>10 GB file storage<br> 50 Projects per month<br> Support
							</p>
							<button class="btn btn-primary btn-grad">Get Started</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="cd1 card" style="width: 21rem;">
					<img src="{{asset('assets/images/pricing-bg.png')}}" class="card-img-top" alt="...">
					<div class="cbody card-body">
						<div class="txt text-center">
							<h5 class="card-title">Business</h5>
							<h3 class="card-title">$29/M</h3>
							<h6 class="access">Limited Access</h6>
							<hr class="hr">
							<p class="card-text py-2">Everything in Free +<br> Unlimited Messages per month<br> 500 GB file storage<br> 300 Projects per month<br> Phone & Mail Support</p>
							<button class="btn btn-primary btn-grad1">Get Started</button>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-4 pb-2">
				<div class="cd2 card" style="width: 21rem;">
					<img src="{{asset('assets/images/pricing-bg.png')}}" class="card-img-top" alt="...">
					<div class="cbody card-body">
						<div class="txt text-center pb-5">
							<h5 class="card-title">Enterprise</h5>
							<h3 class="card-title">$49/M</h3>
							<h6 class="access">Limited Access</h6>
							<hr class="hr">
							<p class="card-text py-2">Everything is Pro+,<br> Unlimited Messages per month<br> 2 TB file storage<br> Unlimited Projects per month<br> 5 Email Accounts<br> Premium support</p>
							<button class="btn btn-primary btn-grad">Get Started</button>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	</div>
</section>
<!-- Easy pricing plan End Omar -->

<!-- Latest story Start -->
<section>
	<div class="container">
		<h2 class="">Latest Story</h2>
		<p class="p-text text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit,</p>
		<div class="row story">
			<div class="col-md-4 ">
				<div class="card">
					<img src="{{asset('assets/images/blog1.png')}}" class="img-fulid w-100">
					<div class="card-body">
						<div class="content p-2">
							<h4 class="story-title">No one cares about products. <br>
							people care about ideas.</h4>
							<span>July 13th, 2018</span>
							<span style="padding-left: 80px;;">By: Admin</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('assets/images/blog2.png')}}" class="img-fulid w-100">
					<div class="card-body">
						<div class="content p-2">
							<h4 class="story-title" >No one cares about products. <br>
							people care about ideas.</h4>
							<span>July 13th, 2018</span>
							<span style="padding-left: 80px;;">By: Admin</span>
						</div>
					</div>					
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('assets/images/blog3.png')}}" class="img-fulid w-100">
					<div class="card-body">
						<div class="content p-2">
							<h4 class="story-title" >No one cares about products. <br>
							people care about ideas.</h4>
							<span>July 13th, 2018</span>
							<span style="padding-left: 80px;;">By: Admin</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Latest story End -->


<!-- Footer Section Start -->
<footer>
	<div class="section">
		<div class="downapp">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 ">
						<h2>
							Download this app now
						</h2>
						<p class="p-text text-center">Choose your operating system:</p>
						<div class="d-flex justify-content-between">
							<img src="{{asset('assets/images/download-logo1.png')}}" alt="#">
							<img src="{{asset('assets/images/download-logo2.png')}}" alt="#">
						</div>
						<div>
							<h6 class="py-3">Stay Updated</h6>
						</div>
					</div>
					<div class="col-md-9 col-sm-12 vlog-down">
			  <div class="input-group mb-3">
			  <input type="text" class="form-control position-relative fontAwesome" placeholder="&#xf0e0; Your Email" aria-label="Recipient's username" aria-describedby="button-addon2"/>
			  <button class="btn position-absolute top-50 end-0 translate-middle-y" type="button" id="button-addon2"><span>Subscribe</span></button>
		       </div>
		     </div>
				</div>
			</div>
		</div>
	</div>
	<div class="with-bg">
		<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="logo2 col-lg-3 col-md-auto col-sm-auto col-xs-3">
				<img src="{{asset('assets/images/logo2.png')}}" alt="logo">
			</div>
			
		</div>
		<div class="row justify-content-center">
			<div class="socio-txt d-flex justify-content-center">
				<p class="col-md-8">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et<br>dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				</p>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="social col-md-3">
				<ul class=" d-flex justify-content-between p-0">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-skype"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>

				</ul>
			</div>
		</div>
		</div>
		<div class="row d-flex justify-content-center m-0 p-0">
			<p class="footer-btm">&copy2018 Appo! Powered by <span>Themexpo</span></p>
		</div>
	</div>

</footer>
<!-- Footer Section End -->

	<!--|---------------------------|
       |    All Js File Here       |
      |---------------------------| -->
	<!-- jQuery 3.5.1 Verson File -->
	<script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> 
	<!-- js for popper -->
	<script src="{{asset('assets/js/popper.js')}}"></script>
	<!-- js fo bootstrap -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- js for fontawesome -->
	<script src="{{asset('assets/js/all.min.js')}}"></script>
	<!-- External js  -->
	<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>