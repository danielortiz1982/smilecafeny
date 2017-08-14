<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div class="site-content">

	<div class="home-hero">

		<div class="video-box">
			<video autoplay loop>
				 <source src="<?php echo get_template_directory_uri(); ?>/video/638851294.mp4" type="video/mp4">
			</video>
		</div>
		<!--end of video-box-->
		
	</div>
	<!--end of home-hero-->

	<div class="oral-topics-home">

	<div class="contentBox">

		<div class="oral-topics-content">
			<div class="row">
				
				<div class="col-md-4">
					<div class="oral-topic"><a href="#">oral health <span class="fa fa-angle-double-right"></span></a></div>
				</div>

				<div class="col-md-4">
					<div class="oral-topic"><a href="#">tooth care <span class="fa fa-angle-double-right"></span></a></div>
				</div>

				<div class="col-md-4">
					<div class="oral-topic"><a href="#">dental problems <span class="fa fa-angle-double-right"></span></a></div>
				</div>
			</div>
		</div>
	</div>
		
	</div>
	<!--end of oral-topics-home-->
	
</div>

<?php get_footer(); ?>