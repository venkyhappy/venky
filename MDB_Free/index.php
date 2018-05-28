<?php include 'header.php';?>
	  <!--Main Navigation-->
        <header>            
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#"><strong>MDB</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <div class="md-form mt-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        
            <!-- Intro Section -->
            <div class="view hm-black-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg);">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="row pt-5 mt-3">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>Minimalist intro</strong></h1>
                                    <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                                    <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Photography & design</strong></h5>
                                    <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">portfolio</a> 
                                    <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </header>
        <!--Main Navigation-->
        
        <!--Main Layout-->
        <main>   
	<!--service-->
            <div class="container">
				<h2 class="title">service</h2>
				<p class="sub-title">Lorem ipsum</p>
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4">
						<div class="s-item">
							<i class="fa fa-bicycle" aria-hidden="true"></i>
						</div>
						<p class="text-center">Lorem ipsum</p>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="s-item">
							<i class="fa fa-database" aria-hidden="true"></i>
						</div>
						<p class="text-center">Lorem ipsum</p>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="s-item">
							<i class="fa fa-fax" aria-hidden="true"></i>
						</div>
						<p class="text-center">Lorem ipsum</p>
					</div>					
				</div>
            </div>
	<!--service-->  
	<!--about--> 
		<div class="about container-fluid">
		<div class="row">
			<div class="about-banner"></div>
			<div class="container">
				<div class="about-content">
					<h3>About</h3>
					<div class="description">
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
					</div>
				</div>
			</div>				
			</div>				
		</div>			
   <!--about--> 
   <!--special -->
		<div class=" container-fluid">
			<div class="row">
			<div class="special">
				<div class="s-item1 item">					
					<h4>Lorem Ipsum</h4>
					<p>standard dummy text</p>
					<img src="img/demo.png" alt="" width="100%">					
				</div>
				<div class="s-item2 item">
					<h4>Lorem Ipsum</h4>
					<p>standard dummy text</p>
					<img src="img/demo.png" alt="" width="100%">
				</div>
				<div class="s-item3 item">
					<h4>Lorem Ipsum</h4>
					<p>standard dummy text</p>
					<img src="img/demo.png" alt="" width="100%">
				</div>
				<div class="s-item4 item">					
						<h4>Lorem Ipsum</h4>
						<p>standard dummy text</p>
						<img src="img/demo.png" alt="" width="100%">					
				</div>
				<div class="s-item5 item">
					<h4>Lorem Ipsum</h4>
					<p>standard dummy text</p>
					<img src="img/demo.png" alt="" width="100%">
				</div>
			</div>
			</div>
		</div>
   <!--special -->
   <!--galley -->
		<div class="">
		  <div class="column">
			<img src="img/thumbs/6.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
		  </div>
		  <div class="column">
			<img src="img/thumbs/5.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
		  </div>
		  <div class="column">
			<img src="img/thumbs/7.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
		  </div>
		  <div class="column">
			<img src="img/thumbs/8.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
		  </div>
		</div>

		<div id="myModal" class="modal">
		  <span class="close cursor" onclick="closeModal()">&times;</span>
		  <div class="modal-content">

			<div class="mySlides">
			  <div class="numbertext">1 / 4</div>
			  <img src="img/original/5.jpg" style="width:100%">
			</div>

			<div class="mySlides">
			  <div class="numbertext">2 / 4</div>
			  <img src="img/original/5.jpg" style="width:100%">
			</div>

			<div class="mySlides">
			  <div class="numbertext">3 / 4</div>
			  <img src="img/original/5.jpg" style="width:100%">
			</div>
			
			<div class="mySlides">
			  <div class="numbertext">4 / 4</div>
			  <img src="img/original/5.jpg" style="width:100%">
			</div>
			
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			<div class="caption-container">
			  <p id="caption"></p>
			</div>


			<div class="column">
			  <img class="demo cursor" src="img_nature_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
			</div>
			<div class="column">
			  <img class="demo cursor" src="img_fjords_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
			</div>
			<div class="column">
			  <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
			</div>
			<div class="column">
			  <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
			</div>
		  </div>
		</div>
   <!--galley -->
        </main>
        <!--Main Layout-->














    <!-- SCRIPTS -->


    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	
	<!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>
	
  

	
	<script type="text/javascript">
		// Animations initialization
		new WOW().init();
		
		function openModal() {
		  document.getElementById('myModal').style.display = "block";
		}

	function closeModal() {
	  document.getElementById('myModal').style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}

		
	</script>
</body>

</html>
