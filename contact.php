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
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
					    <li> <a href="charts.php">Charts</a> </li>
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
                                        <a href="contact.php">Contacts</a>
				    </li>
				</ul>
			    </nav>				
			</div>
		    </div>
	        </div>
	    </header>
            
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
        </body>
        </html>
