<section class="section--top-slider" id="header">
	<div class="container">
		<div class="row ">
			<div class="col-12 col-md-6 col-lg-6 col-xl-5 offset-lg-2">
				<div class="icon icon--mouse-wheel d-none d-xl-block"></div>
			</div>
		</div>
	</div>
	<div class="section__inner">
		<div class="row ">
			<div class="col-12">
				<div class="top-slider">
					<?php
					$args = [
						'post_type' => 'slider-item',
						'posts_per_page' => -1,
						'order' => 'ASC',
						'orderby' => 'title'
					];
					$slides = get_posts($args);
					foreach($slides as $slide){
						?>
						<div>
							<?= wp_get_attachment_image( get_post_thumbnail_id( $slide->ID ), 'Frontpage Slider'); ?>
							<div class="slide__content-holder d-none d-md-block">
								<?= wpautop($slide->post_content); ?>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-5">
				<div class="slider-widget">
					<div class="slider-widget__inner">
						<?php dynamic_sidebar('Post Slider Widget'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>