<?php 
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'exam' ),
		//'social'  => __( 'Social Links Menu', 'exam' ),
	) );
	
	function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-item nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

	add_theme_support( 'post-thumbnails' ); 

	function roneldelavictoria_scripts() {

	wp_enqueue_style( 'bootsrapcss', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'themestylecss', get_template_directory_uri().'/css/style.css' );
	wp_enqueue_style( 'responsivecss', get_template_directory_uri().'/css/responsive.css' );
	wp_enqueue_style( 'mCustomScrollbar', get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css' );
	wp_enqueue_style( 'font-awesome', 'https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'owlcss', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owltheme', get_template_directory_uri().'/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'fancybox', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'ronel-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/query.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'jqueryminjs', get_template_directory_uri(). '/js/jquery-3.0.0.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'pluginjs', get_template_directory_uri(). '/js/plugin.js', array(), '1.0.0',true);
	wp_enqueue_script( 'mCustomScrollbarjs', get_template_directory_uri(). '/js/query.mCustomScrollbar.concat.min.js', array(), '1.0.0',true);
	wp_enqueue_script( 'customjs', get_template_directory_uri(). '/js/custom.js', array(), '1.0.0',true);
	wp_enqueue_script( 'carouseljs', get_template_directory_uri(). '/js/owl.carousel.js', array(), '1.0.0',true);
	wp_enqueue_script( 'fancyboxjs', 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array(), '1.0.0',true);
	}
	add_action( 'wp_enqueue_scripts', 'roneldelavictoria_scripts' );

	// To change add to cart text on single product page
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
	function woocommerce_custom_single_add_to_cart_text() {
	    return __( 'Add to basket', 'woocommerce' ); 
	}

	// To change add to cart text on product archives(Collection) page
	add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
	function woocommerce_custom_product_add_to_cart_text() {
	    return __( 'Add to basket', 'woocommerce' );
	}

	function custom_mini_cart() { 
    echo '<a href="#" class="dropdown-back" data-toggle="dropdown"> ';
    echo '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
    echo '<div class="basket-item-count" style="display: inline;">';
        echo '<span class="cart-items-count count">';
            echo WC()->cart->get_cart_contents_count();
        echo '</span>';
    	echo '</div>';
    	echo '</a>';
    	echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
        echo '<li> <div class="widget_shopping_cart_content">';
                  woocommerce_mini_cart();
            echo '</div></li></ul>';

      }
       add_shortcode( '[custom-techno-mini-cart]', 'custom_mini_cart' );
 ?>