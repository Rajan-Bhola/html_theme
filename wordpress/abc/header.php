<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">



	
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_url') ?>/images/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/images/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/images/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_bloginfo('template_url') ?>/images/manifest.json">
<link rel="mask-icon" href="<?php echo get_bloginfo('template_url') ?>/images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
		<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
</head>

<body class="home">
 <?php if(  is_home() )
 {
	?>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="navbar-collapse collapse">
		
				<?php wp_nav_menu( array('menu' => 'Main','menu_class'=> 'nav navbar-nav pull-right', 'container' => 'ul',
				'items_wrap'=> '<ul id="%1$s" class="nav navbar-nav pull-right">%3$s</ul>' )); ?>
				        

			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead"><?php bloginfo('name'); ?></h1>
				<p class="tagline"><?php bloginfo('description'); ?></p>
			<!--	<p><a class="btn btn-default btn-lg" role="button">MORE INFO</a> <a class="btn btn-action btn-lg" role="button">DOWNLOAD NOW</a></p> -->
			</div>
		</div>
	</header>
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">The best place to tell people why they are here</h2>
		<p class="text-muted">
			A True traveller loves adventure frequent and amazing opportunities to be in love with people all around.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container" id="gallary">
			
			<h3 class="text-center thin">Gallary</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<img class="im" src="<?php echo get_bloginfo('template_url') ?>/images/k1.jpg" alt="Progressus HTML5 template">
					<div class="h-caption"><h4>Lahul Spiti</h4></div>
					<div class="h-body text-center">
						<p>The district of Lahaul-Spiti in the Indian state of Himachal Pradesh consists of the two formerly separate districts of Lahaul and Spiti. The present administrative centre is Keylong in Lahaul. Before the two districts were merged, Kardang was the capital of Lahaul, and Dhankar the capital of Spiti. The district was formed in 1960.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<img class="im" src="<?php echo get_bloginfo('template_url') ?>/images/k2.jpg" alt="Progressus HTML5 template">
					<div class="h-caption"><h4>Kullu Valley</h4></div>
					<div class="h-body text-center">
						<p>Kullu or Kulu is the capital town of the Kullu district in the Indian state of Himachal Pradesh. It is located on the banks of the Beas River in the Kullu Valley about 10 kilometres (6.2 mi) north of the airport at Bhuntar.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<img class="im" src="<?php echo get_bloginfo('template_url') ?>/images/k3.jpg" alt="Progressus HTML5 template">
					<div class="h-caption"><h4>Nathula Pass</h4></div>
					<div class="h-body text-center">
						<p>Nathu La is one of the three open trading border posts between China and India; the others are Shipkila in Himachal Pradesh and Lipulekh (or Lipulech) at the trisection point of Uttarakhand–India, Nepal and China.[3] Sealed by India after the 1962 Sino-Indian War, Nathu La was re-opened in 2006 following numerous bilateral trade agreements.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<img class="im" src="<?php echo get_bloginfo('template_url') ?>/images/k4.jpg" alt="Progressus HTML5 template">
					<div class="h-caption"><h4>Manali highway</h4></div>
					<div class="h-body text-center">
						<p>Manali is a Valley nestled in the mountains of the Indian state of Himachal Pradesh near the northern end of the Kullu Valley, at an altitude of 2,050 m (6,726 ft) in the Beas River Valley. It is located in the Kullu district, about 270 km (168 mi) north of the state capital, Shimla. </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
		<p class="text-right"><a class="btn btn-primary btn-large">More »</a></p>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container" id="services">

		<h2 class="text-center top-space">Services</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Tour & Travel Services</h3>
				<p>We offer an extensive range of holiday destinations, with travel options to suit every traveler, from cheap packages to luxury packages, a huge range of accommodation, car hire and cruises, through to city tours, transfers and Customized holidays.</p>
			</div>
			<div class="col-sm-6">
				<h3>Cab Services</h3>
				<p>
					Travels villa is one of the oldest and most reputed Tour & Travel Agents in Nashik offering clients with impeccable travel solutions. We hold expertise in Car Rental Services wherein we provide cars and coaches to assist tourists from one destination to another. </p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Car Rental Services</h3>
				<p>
					Travels villa is one of the oldest and most reputed Tour & Travel Agents in Nashik offering clients with impeccable travel solutions. We hold expertise in Car Rental Services wherein we provide cars and coaches to assist tourists from one destination to another. 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Hotel Services</h3>
				<p>We offer an extensive range of holiday destinations, with travel options to suit every traveler, from cheap packages to luxury packages, a huge range of accommodation, car hire and cruises, through to city tours, transfers and Customized holidays.</p>
			</div>
			<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
		</div> <!-- /row -->

	<!--	<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div> -->

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container" >
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
	<?php
 } 
 else
 {
	 ?>
	 	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" style="position:static!important;" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="navbar-collapse collapse">
		
				<?php wp_nav_menu( array('menu' => 'Main','menu_class'=> 'nav navbar-nav pull-right', 'container' => 'ul',
				'items_wrap'=> '<ul id="%1$s" class="nav navbar-nav pull-right">%3$s</ul>' )); ?>
				        

			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	
	<?php
 } 
	 ?>