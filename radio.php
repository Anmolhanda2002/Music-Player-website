
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Radio :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="js/jquery-2.1.4.js"></script>


</head> 
    	 <!-- /w3layouts-agile -->
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <?php

	  include('sidebar.php');
	  ?>
					<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						<div class="col-md-5 app-left mpl">
							<h3>Mosaic mobile app on your smartphone!</h3>
							<p>Download and Avail Special Songs Videos and Audios.</p>
							<div class="app-devices">
								<h5>Gets the app from</h5>
								<a href="#"><img src="images/1.png" alt=""></a>
								<a href="#"><img src="images/2.png" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-7 app-image">
							<img src="images/apps.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
			 	 <!-- /w3l-agile -->
		<!-- signup -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="sign-right">
									    <form action="#" method="post">
											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
 	 <!-- /w3layouts-agile -->
		<!-- main content start-->
		<div class="main-content">
			<?php
			include('header.php');
			?>
			<div id="page-wrapper">
				<div class="inner-content">
				      <div class="music-browse">
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
					
						<div class="browse">
								<div class="tittle-head two">
									<h3 class="tittle">New Releses <span class="new">New</span></h3>
									 <a href="browse.php"><h4 class="tittle third">See all</h4></a>
									<div class="clearfix"> </div>
								</div>
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="myTab" class="nav nav-tabs" role="tablist">
								   <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Telugu</a></li>
								   <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Hindi</a></li>
								   <li role="presentation" class="dropdown">
									 <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">English <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
										  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Melody</a></li>
										  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Classic</a></li>
										</ul>
								   </li>
								   <li role="presentation"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tamil</a></li>
								    <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Malayalam</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<div class="browse-inner">
								 	 <!-- /agileits -->
								
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sukhwinder singh</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Shekhar Ravjiani</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Shalmali</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sajid-Wajid</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Atif Aslam</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">A R Rahman</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Shreya Ghoshal</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Lata Mangeshkar</a>
										</div>
											<div class="col-md-3 artist-grid">
													<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
													 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.php">Arijit Sing</a>
												</div>
											<div class="col-md-3 artist-grid">
													<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
													 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.php">Sunidhi Chauhan</a>
												</div>
												<div class="col-md-3 artist-grid">
													<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
													 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
														<a class="art" href="single.php">Yo Yo Honey Singh</a>
												</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Neeti Mohan</a>
											</div>
											<div class="clearfix"> </div>
										</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									   <div class="browse-inner">
								<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Neeti Mohan</a>
									</div>
								<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">A R Rahman</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shreya Ghoshal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
								 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sukhwinder singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shekhar Ravjiani</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shalmali</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sajid-Wajid</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Atif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">Lata Mangeshkar</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
									  <div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">A R Rahman</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shreya Ghoshal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
								 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sukhwinder singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shekhar Ravjiani</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shalmali</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sajid-Wajid</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Atif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">Lata Mangeshkar</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
									<div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">A R Rahman</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shreya Ghoshal</a>
								</div>
							<div class="col-md-3 artist-grid">
								<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
								 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sukhwinder singh</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shekhar Ravjiani</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Shalmali</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Sajid-Wajid</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="single.php">Atif Aslam</a>
								</div>
							<div class="col-md-3 artist-grid">
									<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
									 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="art" href="single.php">Lata Mangeshkar</a>
								</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Arijit Sing</a>
										</div>
									<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Sunidhi Chauhan</a>
										</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Yo Yo Honey Singh</a>
										</div>
									<div class="col-md-3 artist-grid">
										<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
										 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
											<a class="art" href="single.php">Neeti Mohan</a>
									</div>
									<div class="clearfix"> </div>
								</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									 <div class="browse-inner">
								
								<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shreya Ghoshal</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Lata Mangeshkar</a>
													</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Arijit Sing</a>
															</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Sunidhi Chauhan</a>
															</div>
															<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Yo Yo Honey Singh</a>
															</div>
														<div class="col-md-3 artist-grid">
															<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
															 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																<a class="art" href="single.php">Neeti Mohan</a>
														</div>
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sukhwinder singh</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shekhar Ravjiani</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shalmali</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sajid-Wajid</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Atif Aslam</a>
											</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">A R Rahman</a>
											</div>
										
														<div class="clearfix"> </div>
													</div>
								  </div>
								   <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									  <div class="browse-inner">
								
								
										<div class="col-md-3 artist-grid">
											<a  href="single.php"><img src="images/a3.jpg" title="allbum-name"></a>
											 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sukhwinder singh</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a6.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shekhar Ravjiani</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a7.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shalmali</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a4.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Sajid-Wajid</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a5.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Atif Aslam</a>
											</div>
											<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a1.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">A R Rahman</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a2.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
													<a class="art" href="single.php">Shreya Ghoshal</a>
											</div>
										<div class="col-md-3 artist-grid">
												<a  href="single.php"><img src="images/a8.jpg" title="allbum-name"></a>
												 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="single.php">Lata Mangeshkar</a>
													</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a9.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Arijit Sing</a>
															</div>
														<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a10.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Sunidhi Chauhan</a>
															</div>
															<div class="col-md-3 artist-grid">
																<a  href="single.php"><img src="images/a11.jpg" title="allbum-name"></a>
																 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																	<a class="art" href="single.php">Yo Yo Honey Singh</a>
															</div>
														<div class="col-md-3 artist-grid">
															<a  href="single.php"><img src="images/a12.jpg" title="allbum-name"></a>
															 <a href="single.php"><i class="glyphicon glyphicon-play-circle"></i></a>
																<a class="art" href="single.php">Neeti Mohan</a>
														</div>
														<div class="clearfix"> </div>
													</div>
											</div>
								</div>
							</div>
						 	 <!-- /agileinfo -->
						</div>
					<!--//End-albums-->
					
						<!--//discover-view-->
								<div class="albums fourth">
										<div class="tittle-head two">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="browse.php"><h4 class="tittle third">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v11.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v22.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v33.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.php"><img src="images/v44.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v55.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v66.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v77.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid last-grid">
													<a href="single.php"><img src="images/v88.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v99.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
												</div>
												<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v9.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
													<a href="single.php"><img src="images/v21.jpg" title="allbum-name"></a>
													<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="col-md-3 artist-grid">
												<a href="single.php"><img src="images/v5.jpg" title="allbum-name"></a>
												<div class="inner-info"><h5>Pop</h5></div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								<!--//discover-view-->
							<!--//music-left-->
							</div>
						<!--body wrapper start-->
						
						<div class="review-slider">
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="single.php"><img src="images/v1.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v2.jpg" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v3.jpg" alt=""/></a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v4.jpg" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v5.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v6.jpg" alt=""/></a>
									<div class="slide-title"><h4>Ellie Goluding </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.php"><img src="images/v6.jpeg" alt=""/></a>
									<div class="slide-title"><h4>Fifty Shades </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.php">READ MORE</a>
										</div>
									</div>
								</li>
							</ul>
							<script type="text/javascript">
						$(window).load(function() {
							
						  $("#flexiselDemo1").flexisel({
								visibleItems: 5,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: false,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 2
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 3
									},
									tablet: { 
										changePoint:800,
										visibleItems: 4
									}
								}
							});
							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
						</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
						<!-- /w3layouts-agile -->
					</div>
			  <!--body wrapper end-->
			      <?php

				  include('footer.php');
				  ?>
   </section>
   	 <!-- /wthree-agile -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>