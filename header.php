<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- Header pic carousel -->
					<div class="header-item header-images">
						<div class="dim"></div>
					</div>

					<div class="header-item header-details">

						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/edm-logo.png" alt="Logo" class="logo-img">
							</a>
						</div>

						<div class="blurb-container edm-shadow">
							<h1>Strengthening families</h1>
							<h2>for a better community</h2>
						</div>

						<div class="social-container">
							<ul>
								<li>
									<a href="#">
										<img class="edm-shadow" src="<?php echo get_template_directory_uri(); ?>/img/icons/social/facebook.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img class="edm-shadow" src="<?php echo get_template_directory_uri(); ?>/img/icons/social/twitter.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img class="edm-shadow" src="<?php echo get_template_directory_uri(); ?>/img/icons/social/instagram.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img class="edm-shadow" src="<?php echo get_template_directory_uri(); ?>/img/icons/social/vimeo.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img class="edm-shadow" src="<?php echo get_template_directory_uri(); ?>/img/icons/social/rss.png">
									</a>
								</li>
							</ul>
						</div>
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>

					</div>
					

			</header>
			<!-- /header -->
