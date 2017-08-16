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
	<div class="homepage-content-box">
		<div class="contentBox">
			<div class="row">
				<div class="col-md-4">
					
					<div class="home-img-box">
						<img class="img-responsive img-rounded" src="<?php echo get_template_directory_uri(); ?>/images/army-of-dentists.jpg">
					</div>

					<!-- <div class="home-img-box">
						<img class="img-responsive img-rounded" src="<?php //echo get_template_directory_uri(); ?>/images/army-of-dentists.jpg">
					</div> -->

				</div>
				<div class="col-md-8">
					<div class="homepage-text-box">
						<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
							<div class="<?php post_class(); ?>">
								<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
								<div class="the-content"><?php the_content(); ?></div>
							</div>
						<?php endwhile ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end of homepage-content-box-->

	<div class="homepage-content-box">
		<div class="contentBox">
			<div class="row">
				
				<div class="col-md-12">
					<div class="homepage-text-box">
							<div class="<?php post_class(); ?>">
								<div class="the-content">
									<p>
										At Smile Cafe, we value our patient relationships, making it our priority to deliver gentle compassionate care that you deserve from a dentist in New York, NY. We work hard to make you feel at ease by providing exceptional patient care in a relaxed, convenient atmosphere. We strive to develop lifelong relationships with our patients by combining the latest dental technology with a professional and compassionate staff. The result is a beautiful, healthy smile that lasts a lifetime.
									</p>
									<p>
										We also believe that patients should have sufficient information to make educated decisions about their oral health, treatment options and choice of dentist in New York, NY. You'll find all of this important information on our website, including directions to our New York, NY office, service descriptions, patient forms, patient education resources and more.
									</p>
									<p>
										Not only are we a leading dentist in New York, NY, we are a full-service practice providing for all of your dental needs. Our services include:
									</p>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end of homepage-content-box-->

	<div class="home-logo-box">

		<div class="contentBox">
			<div id="homeLogoCarousel" class="carousel slide" data-ride="carousel">

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <div class="logos">
				      	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/accele_dent.png">
				      	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/snapon_smile.png">
				      	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/invisalign.png">
				      </div>
				    </div>

				    <div class="item">
				      <div class="logos">
				      	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/lumineers.png">
				      	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/invisalign_express.png">
				      	<img src="<?php echo get_template_directory_uri(); ?>/images/logos/cerec.png">
				      </div>
				    </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#homeLogoCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    
				  </a>
				  <a class="right carousel-control" href="#homeLogoCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    
				  </a>
				</div>
		</div>
		
	</div>
	<!--end of home-logo-box-->
</div>
<?php get_footer(); ?>