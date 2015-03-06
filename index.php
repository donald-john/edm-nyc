<?php get_header(); ?>

	<main role="main">

		<section class="mission-section">
			<div class="mission-container">
				<div class="mission">
					<h1>Our Mission</h1>
					<h3>is to educate the public and raise community awareness in order to eradicate 
poverty and hunger among Bronx families.</h2>
				</div>
				
			</div>
			<hr/>
		</section>


		<section class="engage-section">
			<ul class="row">
				<li class="help col-md-4">
					<a href="#">
						<h2>Find Help</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/help.png">
					</a>
				</li>
				<li class="volunteer col-md-4">
					<a href="#">
						<h2>Volunteer</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/volunteer.png">
					</a>
				</li>
				<li class="give col-md-4">
					<a href="#">
						<h2>Give</h2>
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/give.png">
					</a>
				</li>
			</ul>
		</section>
		
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
