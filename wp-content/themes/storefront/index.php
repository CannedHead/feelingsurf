<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>


	
	<!-- Home : Carrousel
	================================================== -->
	<div class="col-sm-12 no-padding banner-2">
	    <div class='triangle-down-left'></div> 
	    <div class='triangle-down-right'></div> 
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">

	      <!-- Wrapper for slides -->
	      <div class="carousel-inner" role="listbox">
	        <div class="col-xs-12 no-padding item active">
	          <img class="img-responsive hidden-xs" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/banner-superior-2.jpg" alt="Chania">
	          <img class="img-responsive visible-xs-block" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/imagen-320-460.jpg">
	          <div class="carousel-caption">
	            <h3>FEELINGSURF</h3>
	          </div>
	        </div>

	        <div class="item">
	          <img class="img-responsive hidden-xs" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/banner-superior-2.jpg" alt="Chania">
	          <img class="img-responsive visible-xs-block" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/imagen-320-460.jpg">
	          <div class="carousel-caption">
	            <h3>FEELINGSURF</h3>
	          </div>
	        </div>

	        <div class="item">
	          <img class="img-responsive hidden-xs" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/banner-superior-2.jpg" alt="Chania">
	          <img class="img-responsive visible-xs-block" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/imagen-320-460.jpg">
	          <div class="carousel-caption">
	            <h3>FEELINGSURF</h3>
	          </div>
	        </div>

	        <div class="item">
	          <img class="img-responsive hidden-xs" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/banner-superior-2.jpg" alt="Chania">
	          <img class="img-responsive visible-xs-block" src="https://s3-sa-east-1.amazonaws.com/feelingsurf/imagen-320-460.jpg">
	          <div class="carousel-caption">
	            <h3>FEELINGSURF</h3>
	          </div>
	        </div>
	      </div>

	      <!-- Left and right controls -->
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left glyphicon-menu-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right glyphicon-menu-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div>
	</div>

	<!-- Home : Categorias
	================================================== -->
	<section class='s-categorias'>
	        <div class='row'>
	            <div class='col-sm-6 accesorios'>
	                <a href="#">
	                    <h2>ACCESORIOS</h2>
	                    <hr style='margin-top:-5px;'>
	                </a>
	                <div class='btn-categorias btn-accesorios'> 
	                    <button type='submit'> CONOCE MÁS </button>
	                </div> 
	            </div>
	            <div class='col-sm-6'>
	                <div class='row'>
	                    <div class='col-sm-12 descuento'>
	                        <a href="#">
	                            <h2>EN DESCUENTO</h2>
	                            <hr style='margin-top:-5px;'>
	                        </a>
	                        <div class='btn-categorias btn-descuento'> 
	                            <button type='submit'> CONOCE MÁS </button>
	                        </div>                     
	                    </div>
	                    <div class='col-sm-6 hombre'>
	                        <a href="#">
	                            <h3>HOMBRE</h3>
	                            <hr style='margin-top:-5px;'>
	                        </a>
	                        <div class='btn-categorias btn-gender'> 
	                            <button type='submit'> CONOCE MÁS </button>
	                        </div>                               
	                    </div>
	                    <div class='col-sm-6 mujer'>
	                        <a href="#">
	                            <h3>MUJER</h3>
	                            <hr style='margin-top:-5px;'>
	                        </a>
	                        <div class='btn-categorias btn-gender'> 
	                            <button type='submit'> CONOCE MÁS </button>
	                        </div>   
	                    </div>
	                </div>
	            </div>            
	        </div>
	</section>


	<!-- Home : video
	================================================== -->
	<section class='s-video'>
	    <div class='row' style='position: relative; height:100%'>
	        <div class='col-sm-5 video-description'>
	            <h4>FEELINGSURF</h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>   
	        </div>
	        <div class='col-sm-7 no-padding' id='video-container'>
	            <iframe width="560" height="315" src="https://www.youtube.com/embed/tH1FwbI1xKI" frameborder="0" allowfullscreen></iframe>   
	        </div>
	        <div class='col-sm-12 center-block'>
	            <button class='isokbutton' type='button'>SURFING IS OK</button>
	        </div>
	    </div>
	</section>




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php do_action( 'storefront_sidebar' ); ?>
<?php get_footer('feeling'); ?>
