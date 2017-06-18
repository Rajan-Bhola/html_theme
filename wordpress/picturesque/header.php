


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('title'); ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="<?php echo get_bloginfo('template_url') ?>/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_bloginfo('template_url') ?>/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body class="home">
 <?php if(  is_home() )
 {
	?>
	<!-- Fixed navbar -->
	<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
  <?php wp_nav_menu( array('menu' => ' ','menu_class'=> ' ', 'container' => 'ul',
				'items_wrap'=> '<ul id="%1$s" class=" ">%3$s</ul>' )); ?>
  
</div>



<span style="font-size:30px;cursor:pointer;font-size: 30px;
    cursor: pointer;
 
    position: absolute;
    color:rgb(255, 182, 57);
    margin: 30px;" onclick="openNav()">&#9776; open</span>
	<div id="banner"></div>
<div class="container">
	<div class="row">
<div id="aboutus">
<div id="page-wrapper">
	<div id="page" class="container">
	<div class="row">
				<div class="col-sm-6 col-md-12">
		<div class="title">
			<h2>Welcome to our website</h2>
		</div>
		<p>This is <strong>Travel Adventure</strong>, a free, fully standards-compliant travel website.. The photos in this template are from travellers.This free blogging website is released under the Creative Commons Attribution, so you're pretty much free to do whatever you want with it provided you give us credit for it. Have fun :) </p>
	</div>
	</div>
	</div>
</div>
</div>
<div id="gallary">
<div id="wrapper2">
	<div id="portfolio" class="container">
		<div class="title">
			<h2>Gallary</h2>
			<span class="byline"></span>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		
			<div class="box"> <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/images/2.png" alt="" class="image image-full" /></a>
				<h3>Australia</h3>
				<p>Big fun during the trip.</p>
				<a href="#" class="button button-small">Read More</a> </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="box"> <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/images/3.jpg" alt="" class="image image-full" /></a>
				<h3>New zealand</h3>
				<p>Adventure all over trip.</p>
				<a href="#" class="button button-small">Read More</a> </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="box"> <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/images/4.jpg" alt="" class="image image-full" /></a>
				<h3>Germany</h3>
				<p>Beautiful place with a lot of peace.</p>
				<a href="#" class="button button-small">Read More</a> </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="box"> <a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/images/5.jpg" alt="" class="image image-full" /></a>
				<h3>India</h3>
				<p>Nature all around.</p>
				<a href="#" class="button button-small">Read More</a> </div>
		</div>
	</div>
</div>
</div>
<div class="wrapper">

	<div id="three-column" class="container">
	<div class="row" id="services">
				<div class="col-sm-6 col-md-12">
				<h2 style="font-size:2.8em;">Services</h2>
		<div><span class="arrow-down"></span></div>
		<div id="tbox1">
		
		
			<div class="title">
				<h2>Cab Services</h2>
				<span class="byline">Get cab service nearby place </span>
			</div>
			<p>Get the best cab service at reasonable rates by finding here on our website.</p>
			<a href="#" class="button">Read More</a> </div>
		<div id="tbox2">
			<div class="title">
				<h2>Hotel</h2>
				<span class="byline">Best Hotels</span>
			</div>
			<p>Best booking to the hotels with full furnished services at good price.</p>
			<a href="#" class="button">Read More</a> </div>
		<div id="tbox3">
			<div class="title">
				<h2>Attractions</h2>
				<span class="byline">Nearby Attractions</span>
			</div>
			<p>Find the best nearby attraction like bars, restraunts, adventure parks ,lakes etc.</p>
			<a href="#" class="button">Read More</a> </div>
	</div>
	</div>
	</div>
</div>
</div>
</div>

	
	<?php
 } 
 else
 {
	 ?>
	 	<!-- Fixed navbar -->
		<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php wp_nav_menu( array('menu' => ' ','menu_class'=> ' ', 'container' => 'ul',
				'items_wrap'=> '<ul id="%1$s" class=" ">%3$s</ul>' )); ?>
  
</div>



<span style="font-size:30px;cursor:pointer;font-size: 30px;
    cursor: pointer;
 
    position: Static;
    color:rgb(255, 182, 57);
    margin: 30px;" onclick="openNav()">&#9776; open</span><br>
	
	<?php
 } 
	 ?>