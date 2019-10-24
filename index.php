<!doctype html>
<html lang="en">

<!--
Adriana Sawyer
7/3/19
Flickr WebApp
-->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Fitzone</title>
	<link rel="icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="css/all.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="css/style.css">



<!-- Justified Gallery libs -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="justifiedGallery/justifiedGallery.min.css" />
	<script src="justifiedGallery/jquery.justifiedGallery.min.js"></script>
<!-- Swipebox libs -->
	<script src="swipebox/src/js/jquery.swipebox.js"></script>
	<link rel="stylesheet" href="swipebox/src/css/swipebox.css">
</head>
<!-- Wordspace -->
<div id="content">
	<h3 align="center">Welcome to Jupiter's Space Pics Page!</h3>
</div>
<!-- Gallery Area -->
<div id="gallery">

<?php

	include_once('./phpFlickr.php');

	$key = "a5e95177da353f58113fd60296e1d250";    // API key here
	$secret = ""; // API secret here

	$userid = "24662369@N07"; // Flickr UserID points to NASA's acct
//new Flickr objects
	$f = new phpFlickr($key, $secret);

	$response = $f->people_getPublicPhotos($userid, NULL, "url_m,url_h", 500)['photos']['photo'];
//returns each photo with alt text as title
	foreach ($response as $photo) {
		$title = str_replace("'", "&#39;", $photo['title']);

		echo '<a href="' . $photo['url_h'] . '" class="swipebox" title="' . $title . '"><img alt="' . $title . '" src="' . $photo['url_m'] . '"></a>';
	}

?>

</div>
<!--extra room on webpage -->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Heaven fruitful doesn't over for these theheaven fruitful doe over days
                            appear creeping seasons sad behold beari ath of it fly signs bearing
                            be one blessed.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Important Link</h4>
                        <div class="contact_info">
                            <ul>
                                <li><a href="#">WHMCS-bridge</a></li>
                                <li><a href="#"> Search Domain</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#"> Our Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Email Address'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright_part_text">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright_social_icon text-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

<!-- internal Style and JS -->
<script>
	$('#gallery').justifiedGallery( {
		rowHeight: 200,
		lastRow: 'nojustify',
		rel: 'Portfolio',
		margins: 2
	});

	$(".swipebox").swipebox({
		loopAtEnd: true
	});
</script>

<!-- full page span green bg-->
<style>
	body {
		margin: 0;
	}

	#gallery {
		background-color: green;
	}
</style>
</html>
