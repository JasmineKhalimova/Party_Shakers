<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Party Shakers</title>
      <!-- Favicon -->
      <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
      <!-- Bootstrap CSS -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Animate CSS -->
      <link href="assets/vendors/animate/animate.css" rel="stylesheet">
      <!-- Icon CSS-->
      <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
      <!-- Camera Slider -->
      <link rel="stylesheet" href="assets/vendors/camera-slider/camera.css">
      <!-- Owlcarousel CSS-->
      <link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
      <!--Template Styles CSS-->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />

      <meta name="author" content="Jasmine Khalimova">

      <meta name="keywords" content="Party Shakers, Drinks Master, Mobile bartenders"/>

      <meta name="description" content="Mobile Bartending Service & Photo Booth"/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
   </head>
   <body id="top">
      <div class="about-bg-banner-img">
         <div class="overlay-all ">
            <!-- Header_Area -->
            <!-- header
               ================================================== -->
            <header class="s-header">
               <div class="header-logo">
                  <a class="navbar-brand logo-biss" href="index.html"> <img src="assets/images/logo.png"></a>
               </div>
               <!-- end header-logo -->
               <nav class="header-nav">
                  <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
                  <div class="header-nav__content">
                     <h3>Party Shakers</h3>
                     <ul class="header-nav__list">
                        <li class="current"><a class=""  href="index.html" >Home</a></li>
                        <li><a class=""  href="about.html" >About</a></li>
                        <li><a class=""  href="services.html" >Services</a></li>
                        <!--<li><a class="" href="rentals.html" >Rentals</a></li>-->
                        <li><a class="" href="prices.html" >Prices</a></li>
                         <li><a class="" href="photo-booth.html" >Photo Booth</a></li>
                         <li><a class="" href="partner.html">Partners</a></li>
                        <li><a class=""  href="contact.html">Contact</a></li>
                     </ul>
                     <ul class="header-nav__social">
                        <li>
                           <a href="" target="_blank"><i  class="fa fa-facebook-square fa-3x social"></i></a>
                        </li>
                        <li>
                           <a href="" target="_blank"><i  class="fa fa-twitter-square fa-3x social"></i></a>
                        </li>
                        <li>
                           <a href="" target="_blank"><i  class="fa fa-instagram fa-3x social"></i></a>
                        </li>
                        <li>
                           <a href="#0"><i class="fa fa-facebook-square fa-3x social"></i></a>
                        </li>

                     </ul>
                  </div>
                  <!-- end header-nav__content -->
               </nav>
               <!-- end header-nav -->
               <a class="header-menu-toggle" href="#0">
               <span class="header-menu-icon"></span>
               </a>
            </header>
            <!-- end s-header -->
            <!-- End Header_Area -->
            <!-- #banner start -->
            <section id="banner" class="py_120">
               <div class="container ">
                  <div class="row">
                     <!-- #banner-text start -->
                     <div id="banner-text" class="col-md-7 text-c text-left ">
                        <h5 class="wow fadeInUp main-h font_30" data-wow-delay="0.2s" >
                           <br><span class="about_text " style="color:#fff"> CONTACT US </span>
                        </h5>

                     </div>
                     <!-- /#banner-text End -->
                  </div>
               </div>
            </section>
            <!--#Our banner-shap- Area -->
            <div class="container-fluid p0 banner-shap-img">
            </div>
            <!--#EndOur banner-shap- Area -->
         </div>
      </div>
      <!-- /#banner end -->
      <!-- #Contact Us Area start -->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="section-heading left" id="form">
                     <h4>Let's Talk About Your Event</h4>
                  </div>
                  <div class="contact-form-box margin-30px-top">
                     <div class="no-margin-lr" id="success-contact-form" style="display: none;"></div>
                     <?php if(isset($_GET["responseMessage"])): ?>
                             		<div class="alert-success"><?php echo $_GET["responseMessage"]; ?></div>
                         		<?php endif; ?>
         					<form action="php/sendmail.php" method="post">
         						<div class="row form-group">
         							<div class="col-md-6">
         								<label for="name">* Name</label>
         								<input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
         							</div>
         							<div class="col-md-6">
         								<label for="lname">* Phone number</label>
         								<input type="text" name="phone" id="lname" class="form-control" placeholder="Phone number" required="required">
         							</div>
         						</div>

         						<div class="row form-group">
         							<div class="col-md-12">
         								<label for="email">* Email</label>
         								<input type="email" name="email" id="email" class="form-control" placeholder="Your email address" required="required">
         							</div>
         						</div>

         						<div class="row form-group">
         							<div class="col-md-12">
         								<label for="message">* Message</label>
         								<textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message" required="required"></textarea>
         							</div>
         						</div>
         						<div class="form-group">
         							<input type="submit" value="Send Message" class="btn btn-primary">
         						</div>

         					</form>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="contact-info-box padding-30px-left sm-no-padding">
                     <div class="row">
                        <div class="col-12">
                           <div class="contact-info-section no-padding-top margin-10px-top">
                              <h4>Get in Touch</h4>
                              <p>For online bookings please fill in the form below with your contact details, required services, preferred date and time and we will get back to you. Thank you</p>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="contact-info-section">
                              <h4>The Office</h4>
                              <ul class="list-style-1 no-margin-bottom">
                                 <li>
                                   <p><i class="fa fa-globe text-center"></i><strong>Address:</strong> Los Angelas, USA</p>
                                 </li>
                                 <li>
                                    <p><i class="fa fa-phone text-center"></i> <strong>Phone:</strong> +1-206-488-5257</p>
                                 </li>
                                 <li>
                                    <p><i class="fa fa-envelope text-center"></i> <strong>Email:</strong> <a href="javascript:void(0)" class="email_color_site"> info@partyshakersla.com </a></p>
                                 </li>
                              </ul>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- #Contact Us Area End -->

      <!--#start Our footer Area -->
      <div class="our_footer_area">
         <div class="book_now_aera ">
            <div class="container wow fadeInUp">
               <div class="row book_now">
                  <div class="col-md-4">
                     <div class="">
                        <a class=" logo-biss" href="index.html">  <img src="assets/images/logo.png"></a>
                     </div>
                     <div class="bigpixi-footer-social">
                        <a href="https://www.facebook.com/partyshakersla/" target="_blank" class="ml-15"><i id="social-fb" class="fa fa-facebook fa-2x social"></i></a>
                        <a href="https://twitter.com/partyshakersla?lang=en" target="_blank" class="ml-15"><i id="social-tw" class="fa fa-twitter fa-2x social"></i></a>
                        <a href="https://www.instagram.com/partyshakersla/?hl=en" target="_blank" class="ml-15"><i id="social-em" class="fa fa-instagram fa-2x social"></i></a>
                        <a href="" target="_blank" class="ml-15"><i id="social-em" class="fa fa-youtube fa-2x social"></i></a>
                     </div>
                  </div>
                  <div class="col-md-1 ">
                  </div>
                  <div class="col-md-3">
                     <h2 class="footer-top">SOLUTIONS </h2>
                     <ul class="footer-menu">
                        <li><a href="index.html"><i class="fa fa-angle-double-right ml-15"></i>HOME</a></li>
                        <li><a href="contact.html"><i class="fa fa-angle-double-right ml-15"></i>CONTACT</a> </li>
                        <li><a href="about.html"><i class="fa fa-angle-double-right ml-15"></i>ABOUT </a> </li>
                        <li><a href="services.html"><i class="fa fa-angle-double-right ml-15"></i>SERVICES</a> </li>
                        <li><a href="photo-booth.html"><i class="fa fa-angle-double-right ml-15"></i>PHOTO-BOOTH</a> </li>
                        <li><a href=""><i class="fa fa-angle-double-right ml-15"></i>HELP DESK</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <ul class="location">
                        <li class="footer-left-h"><i class="fa fa-map-marker"></i>Address<br>Los Angelas <br>CA 90004, USA</li>
                        <li class="footer-left-h"><i class="fa fa-phone"></i>Call Us <br>+1-206-488-5257</li>
                        <li class="footer-left-h"><i class="fa fa-envelope-o"></i>Email<br>
                           <a href="mailto:info@partyshakersla.com"> info@partyshakersla.com </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-12 text-center">
        				<p>
  						<small class="block">© <script type="text/JavaScript">document.write(new Date().getFullYear());</script> Party Shakers. All Rights Reserved.</small>
  						<small class="block">Developed by <b><a href="https://www.web-brickdesign.com" target="_blank">Web-Brick Design</a></b></small>
  					</p>
  					<p>
  						</p><ul class="fh5co-social-icons">
  							<li><a href="https://twitter.com/la_drinks" target="_blank"><i class="icon-twitter2"></i></a></li>
  							<li><a href="https://www.facebook.com/Drinks-Master-401976123620605/" target="_blank"><i class="icon-facebook2"></i></a></li>
  							<li><a href="https://www.instagram.com/drinksmasterla/" target="_blank"><i class="icon-instagram2"></i></a></li>

  						</ul>
  					<p></p>
  				</div>
               </div>
            </div>
         </div>
      </div>
      <!--#End Our footer Area -->
      <!-- The following is only needed when the video is in the html
         otherwise the who .hero__overlay html can be removed -->
      <div class="hero__overlay">
         <div class="hero__modal">
            <a class="hero__close" href="#">Close</a>
            <iframe allowscriptaccess="always" id="hero-video" class="hero__player" src="https://www.youtube.com/embed/1NSA8ycGfKg?enablejsapi=1&html5=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
         </div>
         <!-- /.hero__modal -->
      </div>
      <!-- /.hero__overlay -->
      <!-- jQuery JS -->
      <script src="assets/js/jquery-1.12.0.min.js"></script>
      <script src="assets/vendors/popup/lightbox.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
         $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
           e.preventDefault();
           $(this).siblings('a.active').removeClass("active");
           $(this).addClass("active");
           var index = $(this).index();
           $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
           $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
         });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
           $(".currency_year").hide();
             $("#radio1").click(function(){
                 $(".currency_year").hide();
                 $(".currency_month").show();
             });
             $("#radio2").click(function(){
                 $(".currency_month").hide();
                 $(".currency_year").show();
             });
         });

          $('.tabs_label').click(function(){
                      $('.tabs_label').removeClass('active_t');
                      $(this).addClass('active_t');

                  })

      </script>
      <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
                 $(this).toggleClass('active');
             });
         });
      </script>
      <!-- Bootstrap JS -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Animate JS -->
      <script src="assets/vendors/animate/wow.min.js"></script>
      <script src="assets/vendors/sidebar/main.js"></script>
      <!-- Owlcarousel JS -->
      <script src="assets/vendors/owl_carousel/owl.carousel.min.js"></script>
      <!-- Stellar JS-->
      <!-- Theme JS -->
      <script src="assets/js/theme.min.js"></script>
   </body>
</html>
