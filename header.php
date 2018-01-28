<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page">

        <header id="header">
		<!---
            <div class="searchform header-search">
                <!-- Search -->
                <?php //get_search_form(); ?>
        <!---    </div>
            <div class="blog-top">
                <?php //if (is_home()) { ?>
                <h1>
                    <?php// } ?>
                    <a class="blogtitle" href="<?php //echo esc_url( home_url() ); ?>">
                        <?php //bloginfo('name'); ?>
                    </a>
                    <?php //if (is_home()) { ?>
                </h1>
                <?php //} ?>
                <div class="description">
                    <?php //bloginfo('description'); ?>
                </div>
            </div>
			--->
        </header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
					</button>
					<a class="" href="#" style=""><div style="width:100px; padding-top:5px; padding-bottom:5px;"><img src="<?php echo get_template_directory_uri();?>/img/DLRL-3Dogo-1.png" style="width:100%; height:auto;"/></div></a>
				</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<?php wp_nav_menu(array(
				'menu' => 'main',
				'theme_location' => 'header-nav', 
				'menu_class' => 'nav navbar-nav navbar-right',
				'container' => false,
				'depth'=>1,
				// do not fall back to wp_page_menu()
				'fallback_cb' => false
				)); ?>
				
				
			</div>
			</div>
		</nav>
