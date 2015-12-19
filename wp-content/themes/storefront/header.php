<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header>
	    <div class='row'>

	        <!-- Home : Banner Principal
	        ================================================== -->
	        <div class="col-xs-12 no-padding banner-principal hidden-xs">
	            <div class='triangle-up-left'></div> 
	            <div class='triangle-up-right'></div> 

	            <!-- Home : Principal logo
	            ================================================== -->
	            <div class='col-sm-2 col-sm-offset-5 logo-principal'>
	                <a href="#">
	                    <img src="https://s3-sa-east-1.amazonaws.com/feelingsurf/logoblancohome.svg">
	                </a>
	            </div>               
	            <a href="https://www.facebook.com/feelingsurf.tanktop" target="_blank">
	                <img class='facebook-principal' src="https://s3-sa-east-1.amazonaws.com/feelingsurf/facebook2.svg">
	            </a>
	            <a href="https://www.instagram.com/feelingsurf/" target="_blank">
	                <img class='instagram-principal' src="https://s3-sa-east-1.amazonaws.com/feelingsurf/instagram19.svg">
	            </a>
	        </div>

	        <!-- Home : Banner
	        ================================================== -->
	        <div class="col-sm-12 no-padding banner-nav no-height" style='height:50px;'>
	            <div class="col-sm-8 col-sm-offset-2 no-height">
	                <nav id="navbar-main" class="navbar navbar-default" style='margin-bottom:0px; height:50px;'>
	                  <div>
	                    <!-- Brand and toggle get grouped for better mobile display -->
	                    <div class="navbar-header">
	                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                      </button>
	                    </div>

	                    <!-- Collect the nav links, forms, and other content for toggling -->
	                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	                      <ul class="nav navbar-nav">
	                        <li><a href="index.php/product-category/clothing/">HOMBRE</a></li>
	                        <li><a href="index.php/product-category/hoodies/">MUJER</a></li>
	                        <li class="navbar-logo hidden-xs"><img class="img-responsive" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/logoblancohome.svg"></li>
	                        <li><a href="index.php/product-category/music/">ACCESORIOS</a></li>
	                        <li><a href="index.php/product-category/clothing/">SALE</a></li>
	                        
	                        <li class="floating-cart">
	                        	<ul class="site-header-cart menu">
	                        		<li class="">
	                        			<a class="cart-contents" href="http://localhost/wordpress/index.php/cart/" title="View your shopping cart">
	                        				$0.00 <span class="count">0</span>
	                        			</a>
	                        		</li>
	                        		<li>
	                        			<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content">
	                        	        <ul class="cart_list product_list_widget ">                        		
	                        			 <li class="empty">No hay productos en el carrito</li>	                        		
	                        	        </ul><!-- end product list -->
	                        	</div></div>			</li>
	                        			</ul>
	                        </li>

	                      </ul>                   

	                    </div><!-- /.navbar-collapse -->
	                  </div><!-- /.container-fluid -->
	                </nav>
	            </div>
	        </div>

	       

	    </div>
	</header>



<!-- 
		<?php do_action( 'storefront_content_top' ); ?> -->
