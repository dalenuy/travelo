<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Traveland</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css"  href="{{url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}"/>

    <link rel="stylesheet" type="text/css"  href="{{url('css/open-iconic-bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('css/animate.css')}}"/>
    
    <link rel="stylesheet" type="text/css"  href="{{url('css/owl.carousel.min.')}}"/>
	<link rel="stylesheet" type="text/css"  href="{{url('css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{url('css/magnific-popup.css')}}"/>

	<link rel="stylesheet" type="text/css"  href="{{url('css/aos.css')}}"/>

    <link rel="stylesheet" type="text/css"  href="{{url('css/ionicons.min.css')}}"/>

    <link rel="stylesheet" type="text/css"  href="{{url('css/bootstrap-datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{url('css/jquery.timepicker.css')}}"/>

    
    <link rel="stylesheet" type="text/css"  href="{{url('css/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{url('css/icomoon.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{url('css/style.css')}}"/>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{('index.blade.php')}}"><span>Travelo</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{('index.blade.php')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{('about.blade.php')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{('destination.blade.php')}}" class="nav-link">Destination</a></li>
	          <li class="nav-item"><a href="{{('hotel-resto.blade.php')}}" class="nav-link">Hotels &amp; Restaurant</a></li>
	          <li class="nav-item"><a href="{{('contact.blade.php')}}" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/ang3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Traveling is more fun than gaming.</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles.</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate p-4">
							<form action="#" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Destination</label>
		          				<div class="form-field">
		          					<div class="icon"><span class="ion-ios-search"></span></div>
				                <input type="text" class="form-control" placeholder="Search place">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Check-in date</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text" class="form-control checkin_date" placeholder="Check In Date">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Check-out date</label>
		        					<div class="form-field">
		          					<div class="icon"><span class="ion-ios-calendar"></span></div>
				                <input type="text" class="form-control checkout_date" placeholder="Check Out Date">
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Price Limit</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="" id="" class="form-control">
		                        <option value="">$5,000</option>
		                        <option value="">$10,000</option>
		                        <option value="">$50,000</option>
		                        <option value="">$100,000</option>
		                        <option value="">$200,000</option>
		                        <option value="">$300,000</option>
		                        <option value="">$400,000</option>
		                        <option value="">$500,000</option>
		                        <option value="">$600,000</option>
		                        <option value="">$700,000</option>
		                        <option value="">$800,000</option>
		                        <option value="">$900,000</option>
		                        <option value="">$1,000,000</option>
		                        <option value="">$2,000,000</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Top Most Visited Places</h2>
            <p>Below are the most visited places of all time, that we recommended you.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/s1.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>3 Days Tour</span>
	    					<h3><a href="project.html">Marina Bay, Singapore</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/s1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/paris1.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$6400</h4>
	    					<span>7 Days Tour</span>
	    					<h3><a href="project.html"> Paris, France</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/paris1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/milan.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$7600</h4>
	    					<span>7 Days Tour</span>
	    					<h3><a href="project.html">Milan, Italy</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/milan.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/rss1.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$8100</h4>
	    					<span>3 Days Tour</span>
	    					<h3><a href="project.html">Moscow, Russia</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/rss11.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	<div class="container">
		<div class="row justify-content-center pb-5">
	  <div class="col-md-12 heading-section text-center ftco-animate">
		<h2 class="mb-4">Popular place in Cambodia</h2>
		<p>discribe and recommend about the Popular palce and also.......! </p>
	  </div>
   	
<!-- class the most pupular place-->   
<section class="ftco-section bg-light">
	<div class="container">
	  <div class="row d-flex">
		<div class="col-md-4 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
			</a>
			<div class="text mt-3 float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one">
						<span class="day">12</span>
					</div>
					<div class="two">
						<span class="yr">2019</span>
						<span class="mos">February</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		  </div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
			</a>
			<div class="text mt-3 float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one">
						<span class="day">12</span>
					</div>
					<div class="two">
						<span class="yr">2019</span>
						<span class="mos">February</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		  </div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
			<div class="blog-entry">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
			</a>
			<div class="text mt-3 float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one">
						<span class="day">12</span>
					</div>
					<div class="two">
						<span class="yr">2019</span>
						<span class="mos">February</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		  </div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
			</a>
			<div class="text mt-3 float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one">
						<span class="day">12</span>
					</div>
					<div class="two">
						<span class="yr">2019</span>
						<span class="mos">February</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		  </div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
			</a>
			<div class="text mt-3 float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one">
						<span class="day">12</span>
					</div>
					<div class="two">
						<span class="yr">2019</span>
						<span class="mos">February</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		  </div>
		</div>
		<div class="col-md-4 d-flex ftco-animate">
			<div class="blog-entry">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
			</a>
			<div class="text mt-3 float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one">
						<span class="day">12</span>
					</div>
					<div class="two">
						<span class="yr">2019</span>
						<span class="mos">February</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
			  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="row mt-5">
		<div class="col text-center">
		  <div class="block-27">
			<ul>
			  <li><a href="#">&lt;</a></li>
			  <li class="active"><span>1</span></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&gt;</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
  </section>


   
		

<!---class the most popular place-->
    

<footer class="ftco-footer ftco-footer-2 ftco-section">
	<div class="container">
	  <div class="row mb-5">
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			<h2 class="ftco-heading-2">Travelo</h2>
			
			<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
			  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			</ul>
		  </div>
		</div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4 ml-md-5">
			<h2 class="ftco-heading-2">Infromation</h2>
			<ul class="list-unstyled">
			  <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
			  <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
			  <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
			  <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
			  <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
			  <li><a href="#" class="py-2 d-block">Call Us</a></li>
			</ul>
		  </div>
		</div>
		<div class="col-md">
		   <div class="ftco-footer-widget mb-4">
			<h2 class="ftco-heading-2">Experience</h2>
			<ul class="list-unstyled">
			  <li><a href="#" class="py-2 d-block">Adventure</a></li>
			  <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
			  <li><a href="#" class="py-2 d-block">Beach</a></li>
			  <li><a href="#" class="py-2 d-block">Nature</a></li>
			  <li><a href="#" class="py-2 d-block">Camping</a></li>
			  <li><a href="#" class="py-2 d-block">Party</a></li>
			</ul>
		  </div>
		</div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			  <h2 class="ftco-heading-2">Have a Questions?</h2>
			  <div class="block-23 mb-3">
				<ul>
				  <li><span class="icon icon-map-marker"></span><span class="text">Borey Peng Hout, Chbar Apmov, Phnom Penh, Cambodia</span></li>
				  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+(855)98 833 994</span></a></li>
				  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">travelo12@gmail.com</span></a></li>
				</ul>
			  </div>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">

		  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> | Travelo <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	  </div>
	</div>
  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>