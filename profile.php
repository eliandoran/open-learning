<!DOCTYPE HTML>
<html>

	<?php
		require_once 'config.php';		

		$instructor_email = $_GET['instructor_email'];
		
		$getinfo = "SELECT name, email, website, twitter, picture, about from instructor where email='$instructor_email'";
		$query = mysqli_query($link, $getinfo);
		$row = mysqli_fetch_assoc($query);
		
		$inst_name = $row['name'];
		$inst_email = $row['email'];
		$inst_website = $row['website'];
		$inst_twitter = $row['twitter'];
		$inst_picture = $row['picture'];
		$inst_about = $row['about'];
		mysqli_close($link);
	?>

	<head>
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Free Online Courses &mdash; OpenLearn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		.modal {
			text-align: center;
			padding: 0!important;
			}

			.modal:before {
			content: '';
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			margin-right: -4px;
			}

			.modal-dialog {
			display: inline-block;
			text-align: left;
			vertical-align: middle;
			}


	</style>

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.openlearn.com</p>
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php"><i class="icon-study"></i><span>&nbsp;Open</span><font color="#2D6CDF">Learn</font></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="courses.php">Courses</a></li>
						<li><a href="instructors.php">Instructors</a></li>
						<li><a href="#"  data-toggle="modal" data-target="#livestream">Livestream</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="btn-cta" data-toggle="modal" data-target="#myModal"><a href="#"><span>Login</span></a></li>
						<li class="btn-cta"><a href="signup.php"><span>Become an Instructor</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>

	<!-- Modal - For Login-->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Login to OpenLearn (For Instructors Only)</h4>
				</div>

				<div class="modal-body">
					<form action="index.php" method="get">
						<div class="form-group">
								<label for="InputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							</div>

							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">&nbsp;Remember me
								</label>
							</div>
				</div>

				<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" value="Login" class="btn btn-primary">
				</form>
				</div>
			</div>
		</div>
	</div>
	<!--Modal for login ends-->

	<!-- Modal - For Livestream-->
	<div class="modal fade" id="livestream" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Livestream_modal">Join Livestream</h4>
				</div>

				<div class="modal-body">
					<form action="livestream.php" method="get">
						<div class="form-group">
								<label for="Code_Livestream">Enter the invite code of the Livestream you want to join</label>
								<input type="text" class="form-control" id="livestream_link" aria-describedby="emailHelp" placeholder="Livestream Invite Code" required>
							</div>
				</div>

				<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" value="Join Livestream" class="btn btn-primary">
				</form>
				</div>
			</div>
		</div>
	</div>
	<!--Modal for livestream ends-->
	
	<!-- Modal - For Message-->
	<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="sendMessageLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="sendMessageLabel">Send Message</h4>
				</div>

				<div class="modal-body">
					<form action="index.php" method="get">
						<div class="form-group">
							<label for="sender-name" class="form-control-label">Your name</label>
							<input type="text" class="form-control" id="sender-name" placeholder="Enter your name" required>
						</div>
						<div class="form-group">
							<label for="sender-email" class="form-control-label">Your email address</label>
							<input type="email" class="form-control" id="sender-email" placeholder="Enter your email address" required>
						</div>
						<div class="form-group">
							<label for="message-text" class="form-control-label">Message:</label>
							<textarea class="form-control" id="message-text" style="height: 180px;" placeholder="Enter your message to the instructor. Make sure to be polite." required></textarea>
						</div>
				</div>

				<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" value="Send" class="btn btn-primary">
				</form>
				</div>
			</div>
		</div>
	</div>
    <!--Modal for message ends-->


    <div class="container">
        <div class="jumbotron text-center">
            <div class="row animate-box">
            	<h1><?php echo "$inst_name"; ?></h1>
            	<?php echo "<img src='profile_pictures/".basename($inst_picture)."' class='img-circle img-responsive text-center' style='height: 150px; width: 150px; margin: auto;' alt='No Image' />"; ?><br>
            
            	<p class="lead"><?php echo "$inst_about"; ?><br><br><br>

            	<button class="btn btn-primary" data-toggle="modal" data-target="#messageModal" style="color: white;"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Send Message</button><br><br>
            
            	<div>
                	<h5>Follow me on</h5>
                	<?php echo "<a href='$inst_website' target='_blank'>";?> <i class="fa fa-globe fa-2x"></i></a>
                	&emsp;<?php echo "<a href='$inst_twitter' target='_blank'>";?><i class="fa fa-twitter fa-2x"></i></a>
            	</div>
            </div>
        </div>
    </div>


    <!--Courses List -->    
        <div id="fh5co-course">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Courses by <?php echo $inst_name; ?></h2>
                        <p>Go through the courses made by the instructor.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#">Web Master</a></h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#">Business &amp; Accounting</a></h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#">Science &amp; Technology</a></h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#">Health &amp; Psychology</a></h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-5.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#">Science &amp; Technology</a></h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(images/project-6.jpg);">
                            </a>
                            <div class="desc">
                                <h3><a href="#">Health &amp; Psychology</a></h3>
                                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                                <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!--Courses List ends -->
    

    <div id="fh5co-register" style="background-image: url(images/studying.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/mountain.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About OpenLearn</h3>
					<p>OpenLearn is a global marketplace for learning and teaching online where students are mastering new skills and achieving their goals by learning from an extensive library of over 55,000 courses taught by expert instructors.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="index.php#fh5co-testimonial">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 OpenLearn, Inc.&nbsp;&nbsp;All Rights Reserved.</small>
						<small class="block">Designed by <a href="https://www.sddey.com" target="_blank">Subhadeep Dey</a>.</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

