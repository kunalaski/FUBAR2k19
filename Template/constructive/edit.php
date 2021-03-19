
<!DOCTYPE html>
<html>
<head>
	<style>
	.header{
		 left: 0;
		 top: 0;
		 width: 100%;
		 text-align: center;
	}
	.footer{
		 left: 0;
		 bottom: 0;
		 width: 100%;
		 text-align: center;
	}

	</style>
	<link rel="stylesheet" href="../../style/w3.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Constructive HTML Template</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">

	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>







	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	          <link rel="icon" type="image/png" href="../images/f%20small.png">
	          <link rel="stylesheet" href="../style/w3.css">
	          <link rel="stylesheet" href="../style/st.css">
	          <link href="../style/font.css" rel="stylesheet">
	          </head>
	      <body class="" onload="document.getElementById('apf1').style.display='block'">
	      <form class="" action="constructive.inc.php" method="post" enctype="multipart/form-data" autocomplete="off">
	      <div id="apf1"  class="w3-modal w3-third w3-right w3-display-middle"  >
	         <div onclick="apf1.style.display='none'" class="">
	        <!--  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span> -->
	          <span class="w3-button w3-pale-green w3-hover-pale-green w3-hover-border-pale-green w3-border w3-border-green w3-xlarge w3-display-middle w3-animate-opacity">OK</span>
	        </div>

	          <div align="" style="height:auto" class="w3-modal-content w3-card-4 w3-animate-top" >

	           <div style="width: auto; height: auto" class="w3-dark-grey" >
	              <div class="w3-container">
	                  <br>
	                <label class="w3-padding"><b>Website Title</b></label>
	                <input class="w3-input w3-border w3-margin-left" style="width: 50%; " type="text" placeholder="Enter Title" name="title" required>

	              <div class="w3-dropdown-hover w3-margin">
	                  <!--<button class="w3-button w3-light-blue">Choose Font</button>
	                  <div class="w3-dropdown-content w3-bar-block w3-border w3-large">-->
	                  <select class="w3-select w3-border" name="font" value="font">


	                      <option value="" disabled selected>
	                      <a href="#"  style="" class="w3-button" >Choose Font</a></option>
	                      <option value="Rubix">
	                      <a href="#"  style="font-family: Rubik, sans-serif;" class="w3-button  ">Rubik</a></option>


	                    <option value="Abel">
	                        <a href="#" style="font-family:'Abel', sans-serif;" class="">Abel</a></option>

	                    <option value="Open Sans">
	                      <a href="#" style="font-family: 'Open Sans', sans-serif;" class="w3-button">Open Sans </a></option>

	                    <option value="Roboto">
	                      <a href="#" style="font-family: 'Roboto', sans-serif;" class="w3-button">Roboto</a></option>

	                  </select>
	                  </div>
	          </div>
	      				<!--	<button class="w3-button w3-block w3-light-blue w3-section w3-padding" type="submit">OK</button>-->


	              </div>
	          </div>



	          </div>









	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Introduction</span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-2" data-page-type="carousel">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>Our Products</span>
								</a>
							</li>
							<li>
								<a href="#company" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
									<i class="fas fa-users tm-nav-fa-icon"></i>
									<span>Our Company</span>
								</a>
							</li>
							<li>
								<a href="#contact" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
									<i class="fas fa-comments tm-nav-fa-icon"></i>
									<span>Contact Us</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section">
						<div class="ml-auto">

							<header class="mb-4"><h1 class="tm-text-shadow"></h1></header>
							<label for="">Choose background image</label><br>
							<input type="file" name="file9" id="file9"><br><br><br>
							  <input type="text" placeholder="CompanyName" name="CmpNm" required><br><br>
							<p class="mb-5 tm-font-big"><textarea placeholder = "Description" name="desc" rows="4" cols="70" required></textarea></p>

							<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Continue...</a>

							<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
						</div>
					</section>


					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section tm-section-carousel">
						<div>
							<label for="">Choose background image</label><br>
							<input type="file" name="file8" id="file8"><br><br>
							<header class="mb-4"><h2 class="tm-text-shadow">Our Products</h2></header>
							<div class="tm-img-container">
								<div class="tm-img-slider">
                  <input type="file" name="file1" id="file1">
                  <input type="file" name="file2" id="file2">
                  <input type="file" name="file3" id="file3">
									<input type="file" name="file4" id="file4">
									<input type="file" name="file5" id="file5">

								</div>
							</div>
						</div>
					</section>

					<!-- section 3 -->
					<section id="tm-section-3" class="tm-section">
						<div class="row mb-4">
							<label for="">Choose background image</label><br>
							<input type="file" name="file7" id="file7"><br><br><br>

							<header class="col-xl-12"><h2 class="tm-text-shadow">Our Company</h2></header>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">

									<div class="media-body">
										<h3><input size="10" value="Feature1" name="feature1"></input></h3>
										<p><textarea placeholder="Description" name="desc1" rows="4" cols="40" ></textarea></p>

									</div>

								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">

									<div class="media-body">
										<h3><input size="10" value="Feature2" name="feature2"></input></h3>
										<p><textarea placeholder="Description" name="desc2" rows="4" cols="40" ></textarea></p>

									</div>

								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">

									<div class="media-body">
										<h3><input size="10" value="Feature3" name="feature3"></input></h3>
										<p><textarea placeholder="Description" name="desc3" rows="4" cols="40" ></textarea></p>

									</div>

								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">

									<div class="media-body">
										<h3><input size="10" value="Feature4" name="feature4"></input></h3>
										<p><textarea placeholder="Description" name="desc4" rows="4" cols="40" ></textarea></p>

									</div>

								</div>
							</div>
						</div>
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-12">
								<div class="col-sm-12">
									<label for="">Choose background image</label><br>
									<input type="file" name="file6" id="file6"><br><br><br>
									<header><h2 class="tm-text-shadow">Contact Us</h2></header>
								</div>
							</div>
							<div>
								<h3>Email ID:</h3>
                <input type="text" name="Email" value="">
								<h3>Telephone No.:</h3>
								<input type="text" name="TeleNo" value="">
                <h3>Address:</h3>
                <input type="text" name="add" value="">
							</div>

						</div>

					</section>
				</div>	<!-- .tm-content -->


						<footer class="footer-link">
							<p class="tm-copyright-text">Copyright &copy;
          	<input type="text" name="copy" value="" placeholder="Company name">

					</p>
				 </footer>
								</div>	<!-- row -->
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->

		<script>



		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	// If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
					// Slick carousel
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}

				// Init Magnific Popup
				$('.tm-img-slider').magnificPopup({
				  delegate: 'a', // child items selector, by clicking on it popup will open
				  type: 'image',
				  gallery: {enabled:true}
				  // other options
				});
      		}
  		}

  		// Setup Nav
  		function setupNav() {
  			// Add Event Listener to each Nav item
	     	$(".tm-main-nav a").click(function(e){
	     		e.preventDefault();

		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);

		    	setupCarousel();
		    	setupFooter();

		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");
		    });
  		}

  		function changePage(currentNavItem) {
  			// Update Nav items
  			$(".tm-main-nav a").removeClass("active");
     		currentNavItem.addClass("active");

	    	$(currentPageID).hide();

	    	// Show current page
	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	// Change background image
	    	var bgImg = currentNavItem.data("bgImg");
	    	$.backstretch("img/" + bgImg);
  		}

  		// Setup Nav Toggle Button
  		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {

  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");
  			}
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");

			    if(linkToAnotherPage != null) {

			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }

		      	// Hide all pages
		      	allPages.hide();

		      	$("#tm-section-1").fadeIn();

		     	// Set up background first page
		     	var bgImg = $("#tmNavLink1").data("bgImg");

		     	$.backstretch("img/" + bgImg, {fade: 500});

		     	// Setup Carousel, Nav, and Nav Toggle
			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}
		});



		</script>
		<div id="footer" class="footer">


		<footer class="w3-center w3-pale-blue w3-padding-32">
		<button class=" w3-button w3-black w3-border w3-hover-border-black" type="submit" name="button" value="Upload Image">Submit</button>
		</footer>
		</form>
		</div>

	</body>
</html>
