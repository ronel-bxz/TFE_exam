<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pullshoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <?php wp_head(); ?>
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="<?php home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                       		<?php
            							wp_nav_menu( array( 
            							    'theme_location' => 'primary', 
            							    'container_class' => 'navbar-nav', ) ); 
            							?>
                        <ul id="header-right-content" class="d-flex">
                          <li id="show_mini_cart" class="position-relative">
                            <a class="cart-customlocation nav-item nav-link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                            (Cart)
                              <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>
                              <div class="mini-cart p-3 bg-light">
                                 <?php woocommerce_mini_cart(); ?>
                              </div>
                          </li>
                          <li>
                          <?php 
                              echo do_shortcode( '[aws_search_form]' );
                           ?>
                          </li>
                        </ul>
                        
						          </div>
                    <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="index.html">Home</a>
                           <a class="nav-item nav-link" href="collection.html">Collection</a>
                           <a class="nav-item nav-link" href="shoes.html">Shoes</a>
                           <a class="nav-item nav-link" href="racing boots.html">Racing Boots</a>
                           <a class="nav-item nav-link" href="contact.html">Contact</a>
                           <a class="nav-item nav-link last" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="<?php echo get_template_directory_uri(); ?>/images/shop_icon.png"></a>
                        </div>
                    </div> -->
                    </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->