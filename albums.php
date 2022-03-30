<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
	<title>Crowd</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/cue.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/mediaelementplayer-legacy.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="preloader">
	<div class="preloader_image"></div>
    </div>
	<!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">
	        <i class="rt-icon2-cross2"></i>
	    </span>
	</button>
        
	<div class="widget widget_search">
	    <form method="get" class="searchform search-form form-inline" action="./">
	    <div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
	</div>
    </div>
        
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
	<div class="fw-messages-wrap ls with_padding">
			
	</div>
    </div>
	
    <div id="canvas">
	<div id="box_wrapper">
	    <!-- template sections -->
	    <section class="page_toplogo with_bottom_overlap_logo ls with_top_color_border columns_padding_0">
		<div class="container">
		    <div class="row flex-wrap v-center">
			<div class="col-sm-2 col-sm-push-5 text-left text-sm-center">
			    <div class="bottom_overlap_logo">
				<a href="./" class="logo">
				   <img src="images/logo.png" alt="">
				</a>  
			    </div>
	                    <span class="toggle_menu"><span></span></span>
			</div>
                        
			<div class="col-sm-5 col-sm-pull-2 hidden-xs">
			    <span class="small-text rightpadding_20 hidden-sm">follow us:</span> <span class="divided-content">
				<span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> 
                                <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>							<span><a class="social-icon socicon-google" href="#" title="Google"></a></span>
			    </span>
			</div>
                        
			<div class="col-sm-5 text-left text-sm-right">
			    <div class="divided-content small-text greylinks color2">
				<div>
				    <div class="dropdown">
					<a href="#0" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    My account
					    <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" aria-labelledby="account-dropdown">
					    <li> <a href="#0">Sign In</a> </li>
					    <li> <a href="#0">Sign Up</a> </li>
					</ul>
				    </div>
				</div>
                                
				<div class="hidden-sm hidden-xs">
				    <a href="shop-cart-right.html" class="cart-button">
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					<span class="total-price">
					    $1385,00
					</span>
				    </a>
				</div>
                                
				<div class="hidden-xs hidden-sm">
				    <div class="dropdown inline-block">
					<a href="" id="search-dropdown" class="theme_button no_bg_button square_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-search" aria-hidden="true"></i>
					</a>
                                        
					<div class="dropdown-menu" aria-labelledby="search-dropdown">
					    <div class="widget widget_search">
						<form method="get" class="searchform form-inline" action="./">
						    <div class="form-group-wrap">
							<div class="form-group margin_0"> <label class="sr-only" for="topline-search">Search for:</label> <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword"> </div> 
                                                        <button type="submit" class="theme_button no_bg_button">Search</button>
						    </div>
						</form>
					    </div>
					</div>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </section>
            
	    <header class="page_header header_darkgrey header_transparent background_cover divided_items with_menu_icon">
		<div class="container">
		    <div class="row">
		        <div class="col-sm-12">
			    <!-- main nav start -->
			    <nav class="mainmenu_wrapper">
				<ul class="mainmenu nav sf-menu">
				    <li class="active">
					<a href="index.php">Home</a>
				    </li>

				    <li>
                                        <a href="about.php">About</a>
				    </li>

				    <li>
					<a href="albums.html">Music</a>
					<ul>
                                            <li> <a href="albums.php">Albums</a> </li>
					    <li> <a href="tracks.php">Tracks</a> </li>
                                            <li> <a href="playlists.php">Playlists</a> </li>
					</ul>
				    </li>
                                    
				    <li>
                                        <a href="artists.php">Artists</a>								
				    </li>
                                    
                                    <li>
                                        <a href="videos.php">Music Videos</a>								
				    </li>
									
				    <li>
                                        <a href="gallery.php">Gallery</a>
				    </li>
									
				    <li>
                                        <a href="blog.php">Blog</a>
				    </li>

				    <li>
                                        <a href="playlists.php">Playlists</a>
				    </li>

				    <li>
					<a href="shop-right.html">Extras</a>
					<ul>
                                            <li><a href="trending.php">Trending Music</a></li>
                                            <li><a href="top_10.php">Top 10 Albums Of All Time</a></li>
				        </ul>
				    </li>
				
				    <li>
					<a href="#contact">Contacts</a>
				    </li>
				</ul>
			    </nav>				
			</div>
		    </div>
	        </div>
	    </header>
	
            <br>
            
            <?php include 'data-files/album-data.php'?>
            
            
            
		<!--	<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="small">Music Albums</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="./">
							Home
						</a> </li>
								<li> <a href="#">Music</a> </li>
								<li class="active">Music Albums</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75 columns_margin_bottom_40">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img src="images/albums/01.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img src="images/albums/02.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Shake the Shudder (2017)</a> </h4> <span class="price">
							$160,20
						</span> </div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img src="images/albums/03.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Let's Build A Fire (2017)</a> </h4> <span class="price">
							$158,25
						</span> </div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img src="images/albums/04.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Based on a T.R.U. Story (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img src="images/albums/05.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Don't Tread On Me (2015)</a> </h4> <span class="price">
							$160,20
						</span> </div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="images/albums/cd.png" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media"> <img src="images/albums/06.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links"> <a href="https://play.google.com/store/music" target="blanck">
										<img src="images/google-play.png" alt="">
									</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
										<img src="images/app-store.png" alt="">
									</a> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Streets Of Gold (2014)</a> </h4> <span class="price">
							$158,25
						</span> </div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer class="page_footer ds section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="cs gradient_bg with_padding big-padding">
								<div class="row columns_padding_0">
									<div class="col-md-3 col-sm-4 text-center text-sm-left">
										<h5 class="margin_0"> <span class="small">Register for</span><br> Our newsletter </h5>
									</div>
									<div class="col-md-6 col-sm-4">
										<div class="widget widget_mailchimp margin_0">
											<form class="signup" action="./" method="get">
												<div class="form-group margin_0"> <input class="mailchimp_email form-control" name="email" required="" type="email" placeholder="Email Address"> </div> <button type="submit" class="theme_button color3 no_bg_button">Subscribe now</button>
												<div class="response"></div>
											</form>
										</div>
									</div>
									<div class="col-md-3 col-sm-4 text-center text-sm-right">
										<h5 class="margin_0"> <span class="small">Get the latest</span><br> Crowd's news </h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title"> Our new albums </h4>
								<ul class="greylinks list-unstyled">
									<li> <a href="#0">Let's Build a Fire</a> </li>
									<li> <a href="#0">World's Apart</a> </li>
									<li> <a href="#0">Shake the Shudder</a> </li>
									<li> <a href="#0">Life in Other People's Dreams</a> </li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title"> Download Avaliable </h4>
								<p>You can purchase our music albums on iTunes, Google Play, Amazon, Spotify or SoundCloud.</p>
								<div class="big-icons topmargin_25"> <a href="#" class="social-icon border-icon socicon-apple"></a> <a href="#" class="social-icon border-icon socicon-play"></a> <a href="#" class="social-icon border-icon socicon-amazon"></a> <a href="#" class="social-icon border-icon socicon-spotify"></a>									<a href="#" class="social-icon border-icon socicon-soundcloud"></a> </div>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="widget widget_text">
								<h4 class="widget-title"> Contact us </h4>
								<ul class="list-unstyled greylinks">
									<li> Some Adress, Some City, CA 47812 </li>
									<li> 8(800) 723 8269 </li>
									<li> 8(800) 723 8269 </li>
									<li> <a href="mailto:thecrowd@example.com">thecrowd@example.com</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<section class="ds page_copyright section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="divided-content bottommargin_5"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>								<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
							<p class="small-text big-spacing">&copy; Copyright 2017. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</section> -->
		</div>
		<!-- eof #box_wrapper -->
                </div>
	
	
</body>

</html>

