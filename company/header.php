<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
    // Get the title of the current page
    $page_title = wp_get_document_title();
    ?>
    <title><?php echo $page_title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Blue</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'nav navbar-nav',
                            'container' => false,
                        ));
                    ?>
                </nav>
                <!-- /main nav -->
			
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
    
<?php wp_footer(); ?>