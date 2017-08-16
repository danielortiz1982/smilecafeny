<?php /* Template Name: Full Width */ ?>

<?php get_header(); ?>
<main class="site-content">

<div class="home-hero">

		<div class="video-box">
			<video autoplay loop>
				 <source src="<?php echo get_template_directory_uri(); ?>/video/638851294.mp4" type="video/mp4">
			</video>
		</div>
		<!--end of video-box-->

		<div class="home-form-box">
			<h1>Questions or Comments</h1>

			<form>
				<div class="form-box">
					<p>Name:</p>
					<input type="text" name="home_form_name" class="form-control" placeholder="Enter Here..." required>
				</div>

				<div class="form-box">
					<p>Email:</p>
					<input type="email" name="home_form_email" class="form-control" placeholder="Enter Here..." required>
				</div>

				<div class="form-box">
					<p>Phone:</p>
					<input type="text" name="home_form_phone" class="form-control" placeholder="Enter Here..." required>
				</div>

				<div class="form-box">
					<p>Message:</p>
					<textarea placeholder="Enter Here..."></textarea>
				</div>

				<div class="form-box">
					<button type="submit" class="btn form-btn">Send</button>
				</div>

			</form>
			<!--end of form-->
		</div>
		<!--end of home-form-box-->
		
	</div>
	<!--end of home-hero-->

	<div class="contentBox">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="<?php post_class(); ?>">
			<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			<div class="the-content"><?php the_content(); ?></div>
		</div>
		<?php endwhile ?>
		<?php endif ?>
	</div>
</main>
<?php get_footer(); ?>