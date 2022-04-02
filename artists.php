<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Music Portal</title>
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
                                        <a href="contact.php">Contacts</a>
				    </li>
				</ul>
			    </nav>				
			</div>
		    </div>
	        </div>
	    </header>
                        
            <hr>
            
            <div class="widget widget_search">
		<h3 class="widget-title">Search Artist</h3>
                <form method="get" class="searchform" action="">
		<div class="form-group"> 
                    <label class="sr-only" for="widget-search">Search for:</label> 
                    <input id="widget-search" type="text" name="search" class="form-control" placeholder="Search Keyword"> 
                </div> 
                    <button type="submit" class="theme_button color">Search</button>									</form>
	    </div>
            
            
            
            <hr>
			
            <?php include 'data-files/search-artist-data.php'?>
            
            <hr>
            
         
            
			<section class="ds page_copyright section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="divided-content bottommargin_5"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>								<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
							<p class="small-text big-spacing">&copy; Copyright 2022. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>