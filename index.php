<!DOCTYPE html>

<html lang="en">
<head>
    <title>Music Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
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
					<a href="#about">About</a>
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
                                            <li> <a href="radio_playlist.php">Radio Playlist</a> </li>
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
            
	    <section class="intro_section page_mainslider ds">
		<div class="flexslider" data-dots="true" data-nav="ture">
		    <ul class="slides">
			<li>
			    <img src="images/slide01.jpg" alt="">
			    <div class="container">
				<div class="row">
				    <div class="col-sm-12 text-center">
					<div class="slide_description_wrapper">
					    <div class="slide_description">
						<div class="intro-layer" data-animation="fadeInUp">
						    <h2 class="text-uppercase"> Welcome </h2>
						</div>
                                                
						<div class="intro-layer" data-animation="fadeInUp">
						    <p class="small-text"> Love is my weapon, music is my religion,<br> peace is in my soul.<br><br><h5>Scroll down for more!!</h5></p>
						</div>
					    </div>										
					</div>									
                                    </div>								
				</div>							
			    </div>				
			</li>
                        
			<li>
			    <img src="images/slide02.jpg" alt="">
			    <div class="container">
				<div class="row">
				    <div class="col-sm-12 text-center">
					<div class="slide_description_wrapper">
					    <div class="slide_description">
						<div class="intro-layer" data-animation="fadeInUp">
						    <h2 class="text-uppercase"> <span class="small">Browse through the <br>catalog of music </h2>
						</div>
                                                
						<div class="intro-layer" data-animation="fadeInUp">
						    <p class="small-text"> Discover all your favourite tracks, albums<br> and so much more </p>
						</div>
                                                
						<div class="intro-layer" data-animation="fadeInUp">
						    <p class="topmargin_30">
							<a href="shop-right.html" class="theme_button inverse min_width_button">
							Official merch
							</a>
						    </p>
						</div>
					    </div>										
					</div>									
				    </div>								
				</div>							
			    </div>						
			</li>
                        
			<li>
			    <img src="images/slide03.jpg" alt="">
			    <div class="container">
				<div class="row">
			            <div class="col-sm-12 text-center">
					<div class="slide_description_wrapper">
					    <div class="slide_description">
						<div class="intro-layer" data-animation="fadeInUp">
						    <h2 class="text-uppercase"> <span class="small">Check our</span> Featured video </h2>
						</div>
                                                
						<div class="intro-layer" data-animation="fadeInUp">
						    <p class="small-text"> Music speaks to the heart in ways words annot express.<br> Music, the mosaic of the air. </p>
						</div>
                                                
						<div class="intro-layer" data-animation="fadeInUp">
						    <p class="topmargin_30">
							<a href="#featured-video" class="theme_button inverse min_width_button">
							   Whatch now
							</a>
						    </p>
						</div>
					    </div>									
					</div>								
			            </div>							
				</div>							
			    </div>							
			</li>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>

			<hr>
			<h5>About section</h5>
			<hr>

			<section id="about" class="ls section_padding_top_40 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-push-5"> <img src="images/" alt=""> </div>
						<div class="col-md-5 col-md-pull-7">
							<h2 class="section_header"> <span class="small">About </span> The Music Portal </h2>
							<hr class="header_divider">
							<p class="small-text big">
								"If Music is a Place — then Jazz is the City, Folk is the Wilderness, Rock is the Road, Classical is a Temple."
								<br>
								<br>
								- Vera Nazarin
							</p>
							<p>
                                                            This music portal was created to connect the user through the world of music. Explore all of your favourite tracks, artists, playlists and more.<br><br>
                                                            Feel free to stay in touch and remember to keep the music flame burning bright!!
								
							</p>
							<div class="content-justify vertical-center content-margins topmargin_25">
								<a href="about.html" class="theme_button color min_width_button">Read more</a> <span class="divided-content outside-dividers">
									<span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>								<span><a class="social-icon socicon-google" href="#" title="Google"></a></span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<hr>
			<h5>Music section</h5>
			<hr>

			<hr>
			<p>Add a tracks section with a few songs</p>
			<hr>

			<div class="col-sm-12 text-center">
				<h2 class="section_header">Featured Song</h2>
				<hr class="header_divider" />
			</div>

			<section id="featured-video" class="ds background_cover section_padding_top_150 section_padding_bottom_150 columns_margin_top_30 columns_margin_bottom_30">
				<div class="container">
					<div class="row">

						<div class="col-sm-12 text-center">

							<a href="https://www.youtube.com/watch?v=2Kvl0vpV6lM" class="theme_button inverse round_button margin_0" data-gal="prettyPhoto[gal-video]">
								<i class="fa fa-caret-right" aria-hidden="true"></i>
							</a>
							<h2 class="section_header bottommargin_0 topmargin_30"> The crowd - life in other people's dreams </h2>
							<h5 class="margin_0">New York City 2017 (Full Concert) (HD)</h5>
						</div>
					</div>
				</div>
			</section>
			<section id="players" class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header">Featured Atists</h2>
							<hr class="header_divider">
							<p class="small-text big"> Meet some of the artitsts featured in the music portal. these are the most passionate, dedicated and talented musicians </p>
							<div class="owl-carousel topmargin_80" data-responsive-lg="3" data-nav="true" data-dots="false">
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media"> <img src="images/team/01.jpg" alt=""> </div>
									<div class="item-content cs transp_gradient_bg">
										<h4 class="entry-title bottommargin_0"> <a href="team-single.html">Sophia Horton</a> </h4>
										<p class="small-text">Singer</p>
										<div class="divided-content darklinks"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>											<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
										<div class="entry-content">
											<div class="toppadding_20">
												<p class="content-3lines-ellipsis"> Landjaeger flank capicola salami chicken boudin, biltong frankfurter doner ribeye. Ball tip venison bacon hamburger. </p>
												<p class="topmargin_30"> <a href="team-single.html" class="theme_button inverse min_width_button margin_0">View Profile</a> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media"> <img src="images/team/02.jpg" alt=""> </div>
									<div class="item-content cs transp_gradient_bg">
										<h4 class="entry-title bottommargin_0"> <a href="team-single.html">Carlos Tyler</a> </h4>
										<p class="small-text">bass guitar</p>
										<div class="divided-content darklinks"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>											<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
										<div class="entry-content">
											<div class="toppadding_20">
												<p class="content-3lines-ellipsis"> Landjaeger flank capicola salami chicken boudin, biltong frankfurter doner ribeye. Ball tip venison bacon hamburger. </p>
												<p class="topmargin_30"> <a href="team-single.html" class="theme_button inverse min_width_button margin_0">View Profile</a> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media"> <img src="images/team/03.jpg" alt=""> </div>
									<div class="item-content cs transp_gradient_bg">
										<h4 class="entry-title bottommargin_0"> <a href="team-single.html">Tomas Young</a> </h4>
										<p class="small-text">guitar</p>
										<div class="divided-content darklinks"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>											<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
										<div class="entry-content">
											<div class="toppadding_20">
												<p class="content-3lines-ellipsis"> Landjaeger flank capicola salami chicken boudin, biltong frankfurter doner ribeye. Ball tip venison bacon hamburger. </p>
												<p class="topmargin_30"> <a href="team-single.html" class="theme_button inverse min_width_button margin_0">View Profile</a> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media"> <img src="images/team/04.jpg" alt=""> </div>
									<div class="item-content cs transp_gradient_bg">
										<h4 class="entry-title bottommargin_0"> <a href="team-single.html">Lottie Dean</a> </h4>
										<p class="small-text">guitar</p>
										<div class="divided-content darklinks"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>											<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
										<div class="entry-content">
											<div class="toppadding_20">
												<p class="content-3lines-ellipsis"> Landjaeger flank capicola salami chicken boudin, biltong frankfurter doner ribeye. Ball tip venison bacon hamburger. </p>
												<p class="topmargin_30"> <a href="team-single.html" class="theme_button inverse min_width_button margin_0">View Profile</a> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media"> <img src="images/team/05.jpg" alt=""> </div>
									<div class="item-content cs transp_gradient_bg">
										<h4 class="entry-title bottommargin_0"> <a href="team-single.html">Mary Austin</a> </h4>
										<p class="small-text">bass guitar</p>
										<div class="divided-content darklinks"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>											<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
										<div class="entry-content">
											<div class="toppadding_20">
												<p class="content-3lines-ellipsis"> Landjaeger flank capicola salami chicken boudin, biltong frankfurter doner ribeye. Ball tip venison bacon hamburger. </p>
												<p class="topmargin_30"> <a href="team-single.html" class="theme_button inverse min_width_button margin_0">View Profile</a> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="vertical-item content-absolute hover-entry-content">
									<div class="item-media"> <img src="images/team/06.jpg" alt=""> </div>
									<div class="item-content cs transp_gradient_bg">
										<h4 class="entry-title bottommargin_0"> <a href="team-single.html">Alex Wise</a> </h4>
										<p class="small-text">singer</p>
										<div class="divided-content darklinks"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>											<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
										<div class="entry-content">
											<div class="toppadding_20">
												<p class="content-3lines-ellipsis"> Landjaeger flank capicola salami chicken boudin, biltong frankfurter doner ribeye. Ball tip venison bacon hamburger. </p>
												<p class="topmargin_30"> <a href="team-single.html" class="theme_button inverse min_width_button margin_0">View Profile</a> </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="photos" class="ls ms section_padding_top_65 columns_padding_0">
				<div class="container-fluid">
					<div class="col-sm-12 bottommargin_0">
						<div class="filters carousel_filters bottommargin_40 divided-content">
							<a href="#" class="selected" data-filter="*">All</a> <a href="#" data-filter=".music">Music</a> <a href="#" data-filter=".artists">Artists</a> <a href="#" data-filter=".concerts">Concerts</a> <a href="#" data-filter=".backstage">Backstage</a>
							<a href="#" data-filter=".new">New</a>
						</div>
						<div class="owl-carousel owl-center-scale gallery-carousel" data-nav="true" data-dots="false" data-margin="0" data-center="true" data-loop="true" data-responsive-sm="2" data-responsive-xs="2" data-responsive-xxs="1" data-filters=".carousel_filters">
							<div class="vertical-item music">
								<div class="item-media">
									<img src="images/gallery/01.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/01.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item artists">
								<div class="item-media">
									<img src="images/gallery/02.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/02.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item concerts">
								<div class="item-media">
									<img src="images/gallery/03.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item backstage">
								<div class="item-media">
									<img src="images/gallery/04.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/04.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item new">
								<div class="item-media">
									<img src="images/gallery/05.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item music">
								<div class="item-media">
									<img src="images/gallery/06.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/06.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item artists">
								<div class="item-media">
									<img src="images/gallery/07.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/07.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item concerts">
								<div class="item-media">
									<img src="images/gallery/08.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/08.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item backstage">
								<div class="item-media">
									<img src="images/gallery/09.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/09.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item new">
								<div class="item-media">
									<img src="images/gallery/10.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/10.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item farming">
								<div class="item-media">
									<img src="images/gallery/11.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/11.jpg"></a> </div>
									</div>
								</div>
							</div>
							<div class="vertical-item farm">
								<div class="item-media">
									<img src="images/gallery/12.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="images/gallery/12.jpg"></a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="albums" class="ls section_padding_top_130 section_padding_bottom_100 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header">Featured Music Albums</h2>
							<hr class="header_divider">
							<p class="small-text big">Check out the latest music albums. You can easily purchase our music albums on <span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap">
									<img src="images/albums/01.jpg" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media">
										<img src="images/albums/01.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links">
												<a href="https://play.google.com/store/music" target="blanck">
													<img src="images/google-play.png" alt="">
												</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
													<img src="images/app-store.png" alt="">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
										$99,85
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap">
									<img src="images/albums/02.jpg" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media ">
										<img src="images/albums/02.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links">
												<a href="https://play.google.com/store/music" target="blanck">
													<img src="images/google-play.png" alt="">
												</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
													<img src="images/app-store.png" alt="">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Shake the Shudder (2017)</a> </h4> <span class="price">
										$160,20
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap">
									<img src="images/albums/03.jpg" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media ">
										<img src="images/albums/03.jpg" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <a href="single-album.html" class="p-link"></a> </div>
											<div class="bottom-links">
												<a href="https://play.google.com/store/music" target="blanck">
													<img src="images/google-play.png" alt="">
												</a> <a href="https://itunes.apple.com/us/genre/music" target="blanck">
													<img src="images/app-store.png" alt="">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">Let's Build A Fire (2017)</a> </h4> <span class="price">
										$158,25
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!-- Contact Section-->

			<hr>
			<h4>Contact Section</h4>
			<hr>

			<section id="contact" class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4>Contact Form</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form class="contact-form columns_padding_5 bottommargin_40" method="post" action="./">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight2" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group bottommargin_0"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight2" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">											</div>
									</div>
									<div class="col-sm-12">
										<div class="contact-form-message form-group bottommargin_0"> <label for="message">Message</label> <i class="fa fa-comment highlight2" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </div>
									</div>
									<div class="col-sm-12 bottommargin_0">
										<div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color wide_button margin_0">Send message</button> </div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-4 to_animate" data-animation="scaleAppear">
							<ul class="list1 no-bullets no-top-border no-bottom-border">
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-shop highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h6 class="media-heading grey">Postal Address:</h6> 6 Herculesstreet, Vredenburg, Western Cape, 7380
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-phone5 highlight2 fontsize_18"></i> </div>
										<div class="media-body">
											<h6 class="media-heading grey">Phone:</h6> 061 164 9200
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="media-left"> <i class="rt-icon2-mail highlight2 fontsize_18"></i> </div>
										<div class="media-body greylinks">
											<h6 class="media-heading grey">Email:</h6> <a href="gmilford321@gmail.com">My Email</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer Section -->>

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
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>
</html>

