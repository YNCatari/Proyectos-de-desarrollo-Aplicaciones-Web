<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Perfil de la empresa">
        <meta name="author" content="FacturacionWeb.site">

        <title>FrontEnd</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="assets/css/modern-business.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        
    </head>

    <body >
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home">
                        <img src="images/logo.png" height="50">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <!-- llamar al archivo "navbar-menu.php" para visualizar el menú-->
                    <?php include "navbar-menu.php" ?>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    
    <?php  
    if ($_GET['page']=='home') { ?>
        <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('images/slide/slide1.jpg');"></div>
                    <div class="carousel-caption">
                        
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/slide/slide2.jpg');"></div>
                    <div class="carousel-caption">
                        
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/slide/slide3.jpg');"></div>
                    <div class="carousel-caption">
                       
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/slide/slide4.jpg');"></div>
                    <div class="carousel-caption">
                        
						
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('images/slide/slide5.jpg');"></div>
                    <div class="carousel-caption">
                        <h2></h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
    <?php
    } 
    elseif ($_GET['page']=='about') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="about">
                    Acerca de la Empresa
                </a>
            </div>
        </header>
    <?php
    } 
    elseif ($_GET['page']=='who') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="who">
                    Quienes Somos
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='services') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="services">
                  Nuestros Servicios
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='destination') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="destination">
                  Nuestros Destinos
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='agency') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="agency">
                  Nuestros Agencias
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='charges') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="charges">
                  Nuestros Cargos 
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='contact') { ?>
        <!-- Header Carousel -->
        <header>
            <div style="margin-top:27px"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15173.520920843786!2d-70.2526585!3d-18.0539442!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48fd47278eb4715b!2sAndinoSoft%20-%20Per%C3%BA!5e0!3m2!1ses!2spe!4v1596044968815!5m2!1ses!2spe"  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </header>
    <?php
    }
    ?>

        <!-- Page Content -->
        <div style="min-height:400px" class="container">
            
            <!-- llamar al archivo "content.php" para mostrar el contenido de cada página-->
            <?php include "content.php"; ?>

        </div>
        <!-- /.container -->
     	<!-- subscribe block -->
			<div class="subscribe">
				<div class="container">
					<div class="sub-content">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- subscribe update message -->
								<div class="sub-message">
									<!-- heading -->
									<h3>¡SUSCRIBETE Recibe nuestras novedades</h3>
									<p>Nos renovamos para ofrecerte un mejor servicio</p>
									<form role="form">
										<div class="input-group">
											<input type="text" class="form-control input-lg" placeholder="Tu Correo Electronico">
											<span class="input-group-btn">
												<button class="btn btn-info btn-lg" type="button">Subscribe</button>
											</span>
										</div><!-- /input-group -->
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
                                <img src="images/logo-line.png" height="130">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- footer above social block -->
        <!-- Footer -->
        <div class="footer">
        <div class="footer_menu">
           <div class="col_1">
              <div class="title">
              OFICINAS 
              </div>  
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
           </div>
           <div class="col_2">
             <div class="title">
             NOSOTROS 
              </div>  
              <ul>
                <li><a href="#">Support Center</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Call Center</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
           </div>
           <div class="col_3">
             <div class="title">
             DESTINOS  
              </div>  
              <ul>
                <li><a href="#">Business Consultancy</a></li>
                <li><a href="#">Digital Marketing</a></li>
                <li><a href="#">Market Analysis</a></li>
                <li><a href="#">Web Development</a></li>
              </ul>
           </div>
           <div class="col_4">
             <div class="title">
             LLAMENOS 
              </div>  
              <ul>
                <li><a href="#">Facilities Services</a></li>
                <li><a href="#">Workplace Staffing</a></li>
                <li><a href="#">Project Management</a></li>
                <li><a href="#">Wordpress Management</a></li>
              </ul>
          </div>
        </div>
        <div class="partners">
            <ul>
                <li><a class="partner1" href="#"></a></li>
                <li><a class="partner2" href="#"></a></li>
                <li><a class="partner3" href="#"></a></li>
                <li><a class="partner4" href="#"></a></li>
                <li><a class="partner5" href="#"></a></li>  
            </ul>
        </div>
        <div class="social_media">
            <ul>
                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
            <p>Copyright © Desarrollado Por AndinoSoft - -Peru</p>
        </div>
    </div>
</div>	
        

        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.js" ></script>
        

        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })

        $(document).ready(function() {
              $("#owl-demo").owlCarousel({
                  navigation : true,
                  slideSpeed : 300,
                  paginationSpeed : 200,
                  singleItem : true,
                  autoPlay:true

              });
          });
        </script>
    </body>
</html>
