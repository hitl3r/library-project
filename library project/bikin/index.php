<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bikin - HTML Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    Hey <?php
	                    echo   $_SESSION['usrname']
                        ?>     
                    <a class="navbar-brand" href="index.html">Libraria</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#gallery">Categories</a></li>
                        
                        <li><a href="#our-team">Our Team</a></li> 
                        <li><a href="#contact">Contact</a></li>  
                        <li><a href="profile.php">My profile</a></li>  
                        <li><a href="login.php">Log Out</a></li> 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/7.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Clean & Fully Modern Design</span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="img/6.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Fully Responsive</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
								<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="img/1.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2>Modern Design</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	
	
	
	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Categories</h3>
				
			</div>
			<div class="row">
				<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center"><a href="img/cat/Literature-and-Fiction.png" class="flipLightBox">
						<img src="img/cat/Literature-and-Fiction.png" class="img-responsive" alt="">
						</a>
						<br>
						<label>Literature And Fiction</label></p>						
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center">
						<a href="img/cat/Romance.png" class="flipLightBox">
						<img src="img/cat/Romance.png" class="img-responsive" alt="">
						</a>
						<br>
						<label>Romance</label></p>
					</div>
				</figure>	
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center">
						<a href="img/cat/CrimeThriller.png" class="flipLightBox">
						<img src="img/cat/CrimeThriller.png" class="img-responsive" alt="">
						</a>
						<br>
						<label>Crime And Thriller</label></p>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center">
						<a href="img/cat/ChildrenYoung-Adult.png" class="flipLightBox">
						<img src="img/cat/ChildrenYoung-Adult.png" class="img-responsive" alt="">
						</a>
						<br>
						<label>Children Young and Adult</label></p>
					</div>	
				</figure>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/BiographiesMemories.png" class="flipLightBox">
							<img src="img/cat/BiographiesMemories.png" class="img-responsive" alt="">
							</a>
							<br>
							<p align="center"><label>Biographies & Memories</label></p>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/Business-Economics.png" class="flipLightBox">
							<img src="img/cat/Business-Economics.png" class="img-responsive" alt="">
							</a>
							<br>
							<p align="center"><label>Business & Economics</label></p>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/ExamCentral.png" class="flipLightBox">
							<img src="img/cat/ExamCentral.png" class="img-responsive" alt="">
							</a>
							<br>
							<p align="center"><label>Study Aids & Exam Prep</label></p>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/IndianWriting.png" class="flipLightBox">
							<img src="img/cat/IndianWriting.png" class="img-responsive" alt="">
							</a>
							<br>
							<p align="center"><label>Indian Writing</label></p>
						</div>
					</figure>
				</div>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center"><a href="img/cat/Sci-fantasy.png" class="flipLightBox">
						<img src="img/cat/Sci-fantasy.png" class="img-responsive" alt="">
						</a>					
						<br>
						<p align="center"><label>Sci-fi & Fantasy</label></p>	
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center"><a href="img/cat/Textbooks.png" class="flipLightBox">
						<img src="img/cat/Textbooks.png" class="img-responsive" alt="">
						</a>
						<br>
						<p align="center"><label>Textbooks</label></p>
					</div>
				</figure>
				</div>
			</div>
		</div>
	</div><!--/#gallery-->
	
	
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>