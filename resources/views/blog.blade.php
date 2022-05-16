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

      <!--
       |---------------------------|
       |    All Css File Here      |
       |---------------------------|
       -->
	
  	<!-- css for bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- css for Fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">

	<!-- responsive css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

	<!-- nunito fonts  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

	<!-- my css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	

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
		  <a class="navbar-brand" href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">
			  <li class="nav-item">
				<a class="nav-link" href="index.html">Home</a>
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
				<a class="nav-link" href="#">Downlode</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item">
				<a href="{{Route('blog-read')}}#" class="btn-1">Try For Free</a>
			  </li>
				 
			</ul>
	
		  </div>
		</div>
	</nav>
</section>
<!-- Nav Bar section End -->

<!--banner -- Our Blog Details Start-->
<section>
	
	<div class="bolg-details mb-5">
		
		<div class="content">
			<h3>Our Blog Details</h3>		
			<div class="shihab">
				<h4 class="text-center">Home</h4> 
				<h4 class="icon"><i class="fas fa-angle-right"></i></h4>
				<h4 style="color: #39bced;">Blog Details</h4>
			</div>
		</div>

	</div>
</section>
<!--banner -- Our Blog Details End-->

<!-- font-family: 'Nunito', sans-serif; -->	
	<!-- --------------------------------------
			Blog Post Start Sadia Haque
	---------------------------------------- -->
	<section class="my-5 blog-post">
		<div class="container">
			<div class="row">
				<!-- left sidebar blog content area start-->
				<div class="col-lg-8 left-sidebar">
					<div class="card border-0 mb-4">
						<img src="{{asset('assets/images/blog-img1.png')}}" class="card-img-top img-fluid" alt="Blog Image">
						<div class="card-body mt-3 ps-0">
							<h5 class="card-title heading-color">No one cares about products. people care about ideas.</h5>
							<p class="card-text mytext py-1"><small class="text-muted">July 13th, 2018</small></p>
							<p class="card-text paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="{{Route('blog-read')}}" class="btn btn-primary mt-4 text-capitalize border-0 mybtn fw-bold">read more</a>
						</div>
					</div>
					<div class="card border-0 mb-4">
						<img src="{{asset('assets/images/blog-img2.png')}}" class="card-img-top img-fluid" alt="Blog Image">
						<div class="card-body mt-3 ps-0">
							<h5 class="card-title heading-color">No one cares about products. people care about ideas.</h5>
							<p class="card-text mytext py-1"><small class="text-muted">July 13th, 2018</small></p>
							<p class="card-text paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="{{Route('blog-read')}}" class="btn btn-primary mt-4 text-capitalize border-0 mybtn fw-bold">read more</a>
						</div>
					</div>
					<div class="card border-0 mb-4">
						<img src="{{asset('assets/images/blog-img3.png')}}" class="card-img-top img-fluid" alt="Blog Image">
						<div class="card-body mt-3 ps-0">
							<h5 class="card-title heading-color">No one cares about products. people care about ideas.</h5>
							<p class="card-text mytext py-1"><small class="text-muted">July 13th, 2018</small></p>
							<p class="card-text paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="{{Route('blog-read')}}" class="btn btn-primary mt-4 text-capitalize border-0 mybtn fw-bold">read more</a>
						</div>
					</div>
					<div class="card border-0 mb-4">
						<img src="{{asset('assets/images/blog-img4.png')}}" class="card-img-top img-fluid" alt="Blog Image">
						<div class="card-body mt-3 ps-0">
							<h5 class="card-title heading-color">No one cares about products. people care about ideas.</h5>
							<p class="card-text mytext py-1"><small class="text-muted">July 13th, 2018</small></p>
							<p class="card-text paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							<a href="{{Route('blog-read')}}" class="btn btn-primary mt-4 text-capitalize border-0 mybtn fw-bold">read more</a>
						</div>
					</div>
					<!-- pagination start -->
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-end">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
								</a>
							</li>
							<li class="page-item"><a class="page-link link fw-bold" href="#">1</a></li>
							<li class="page-item"><a class="page-link link fw-bold" href="#">2</a></li>
							<li class="page-item"><a class="page-link link fw-bold" href="#">3</a></li>
							<li class="page-item"><a class="page-link link fw-bold" href="#">4</a></li>
							<li class="page-item">
								<a class="page-link text-white" href="#" aria-label="Next">
									<span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
								</a>
							</li>
						</ul>
					</nav>

				</div>
				<!-- left sidebar blog content area end-->

				<!-- right sidebar recent post area start-->
				<div class="col-lg-4 right-sidebar margin">
					<div class="input-group mb-3">
						<input type="text" class="form-control py-2 border-end-0" placeholder="Search...">
						<span class="input-group-text bg-transparent border-start-0" id="basic-addon1"><i class="fas fa-search"></i></span>
					</div>
					<!-- recent post -->
					<div class="recent-post mt-4">
						<h4 class="text-capitalize heading-color">recent post</h4>
						<div class="card border-0">
							<div class="card-body ps-0 pb-1">
								<h5 class="card-title pb-2 heading-color">No one cares about products. people care about ideas.</h5>
								<p class="card-text d-inline-block"><small class="text-muted">July 13th, 2018</small></p>
								<p class="card-text d-inline-block ps-4"><small class="text-muted">By: Admin</small></p>
								<hr>
							</div>
						</div>
						<div class="card border-0">
							<div class="card-body ps-0 pb-2 pt-1">
								<h5 class="card-title py-2 heading-color">No one cares about products. people care about ideas.</h5>
								<p class="card-text d-inline-block"><small class="text-muted">July 13th, 2018</small></p>
								<p class="card-text d-inline-block ps-4"><small class="text-muted">By: Admin</small></p>
								<hr>
							</div>
						</div>
						<div class="card border-0">
							<div class="card-body ps-0 pb-2 pt-1">
								<h5 class="card-title py-2 heading-color">No one cares about products. people care about ideas.</h5>
								<p class="card-text d-inline-block"><small class="text-muted">July 13th, 2018</small></p>
								<p class="card-text d-inline-block ps-4"><small class="text-muted">By: Admin</small></p>
							</div>
						</div>
					</div>

					<!-- categories -->
					<div class="categories mt-3">
						<h4 class="text-capitalize heading-color">category</h4>
						<ul class="ps-0 pt-3  d-flex justify-content-between">
							<li class="fw-bold heading-color">Technology</li>
							<p class="card-text mytext"><small class="text-muted">(4 Post)</small></p>
						</ul>
						<hr>
						<ul class="ps-0 pt-0 d-flex justify-content-between">
							<li class="heading-color">Application</li>
							<p class="card-text mytext"><small class="text-muted">(10 Post)</small></p>
						</ul>
						<hr>
						<ul class="ps-0 pt-0 d-flex justify-content-between">
							<li class="heading-color">Education</li>
							<p class="card-text mytext"><small class="text-muted">(8 Post)</small></p>
						</ul>
						<hr>
						<ul class="ps-0 pt-0 d-flex justify-content-between">
							<li class="heading-color">Lifestyle</li>
							<p class="card-text mytext"><small class="text-muted">(2 Post)</small></p>
						</ul>
					</div>

					<!-- tags -->
					<div class="tags mt-4">
						<h4 class="text-capitalize mb-4 heading-color">tags</h4>
						<a href="{{Route('blog-read')}}#" class="active fw-bold">Education</a>
						<a href="{{Route('blog-read')}}#">Information</a>
						<a href="{{Route('blog-read')}}#">Life</a>
						<a href="{{Route('blog-read')}}#">Technology</a>
						<a href="{{Route('blog-read')}}#">Bussiness</a>
						<a href="{{Route('blog-read')}}#">Stayle</a>
					</div>
				</div>
				<!-- right sidebar recent post area end-->
			</div>
		</div>
	</section>
	<!-- --------------------------------------
			Blog Post end
	---------------------------------------- -->

<!-- Related post + comments start -->
<!-- Related post + comments end -->

<!-- footer section Start -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<span class="d-block mt-4 p-text">No credit card allowed</span>
				<h2 class="py-3 text-start">Start 21 days free trial</h2>
				<p class="p-text text-start mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eum dolore hic.</p>
			</div>
			<div class="col-md-6">
				<div class="input-group mt-5">
					<input type="text" class="form-control position-relative fontAwesome" placeholder="&#xf0e0; Your Email" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-radius: 20px;"/>
					<button class="btn-1 position-absolute top-50 end-0 translate-middle-y" type="button" id="button-addon2"><span>start free trial</span></button>
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
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-skype"></i></a></li>
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-pinterest-p"></i></a></li>
					<li><a href="{{Route('blog-read')}}#"><i class="fab fa-instagram"></i></a></li>

				</ul>
			</div>
		</div>
		</div>
		<div class="row d-flex justify-content-center m-0 p-0">
			<p class="footer-btm">&copy2018 Appo! Powered by <span>Themexpo</span></p>
		</div>
	</div>

</footer>
<!-- footer section End -->

	<!--|---------------------------|
       |    All Js File Here       |
      |---------------------------| -->
	<!-- jQuery 3.5.1 Verson File -->
	<script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
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