<?php get_header(); ?>

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
        <div class="col-sm-12 no-padding banner-nav no-height">
            <div class="col-sm-8 col-sm-offset-2 no-height">
                <nav id="navbar-main" class="navbar navbar-default">
                  <div class="container-fluid">
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
                      </ul>

                      

                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>

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

    </div>
</header>


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

<?php get_footer(); ?>
