<?php get_header(); ?>
<section class="section--top-slider" id="header">
	<div class="container">
		<div class="row ">
			<div class="col-12 col-md-6 col-lg-6 col-xl-5 offset-lg-2">
				<div class="icon icon--mouse-wheel d-none d-xl-block"></div>
			</div>
		</div>
	</div>
	<div class="section__inner">
		<div class="row">
			<div class="col-12">
				<div class="top-slider">
					<div>
						<?php
						$attachment = get_post( get_post_thumbnail_id( get_the_ID() ) );
						echo wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'Frontpage Slider');
						if(!empty($attachment->post_content) || trim($attachment->post_content) != '') {
							?>
							<div class="slide__content-holder d-none d-md-block">
								<?= wpautop($attachment->post_content); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 col-lg-5">
				<div class="slider-widget">
					<div class="slider-widget__inner">
						<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); 
								$prev_post = get_previous_post();
								$next_post  = get_next_post();
								$content = get_the_content();
								$pattern = get_shortcode_regex(); 
								echo wpautop(preg_replace("/$pattern/s", '', $content));
							}
						}
						?>
						<p><a href="#contact" class="cp-btn">Neem contact op</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php if ( get_post_gallery() ){ ?>
		<div class="container">
			<?php 
			$i = 0;
			$gallery = get_post_gallery( get_the_ID(), false );
			$gallery['ids'] = explode(',', $gallery['ids']);
			foreach($gallery['ids'] as $image_id){ 
				$attachment = get_post( $image_id );
				$column_classes = ['col-12 col-md-6 col-lg-7 offset-xl-1', 'col-12 col-md-6 col-lg-5 col-xl-4'];
				$order_classes = ['order-md-2', 'order-md-1'];
				if(!empty($attachment->post_excerpt)){
					$text = $attachment->post_excerpt;
				} else if (!empty($attachment->post_content)){
					$text = $attachment->post_content;
				}
				$i++;

				if ($i % 2 == 0) {
					$column_classes = ['col-12 col-md-6 col-lg-7', 'col-12 col-md-6 col-lg-5 col-xl-4 offset-xl-1'];
					$order_classes = ['order-md-1', 'order-md-2'];
				}

				if(empty($attachment->post_content) || trim($attachment->post_content) == '')
					$column_classes = ['col-12 col-md-9', 'col-12 col-md-3'];

				?>
				<div class="row row--gallery align-items-center">
					<div class="<?= $column_classes[0]; ?> <?= $order_classes[0]; ?>">
						<figure class="gallery__image-wrapper scale-in">
							<?= wp_get_attachment_image( $image_id, 'Large'); ?>
						</figure>
					</div>
					<div class="<?= $column_classes[1]; ?> <?= $order_classes[1]; ?> widget--transition-to-top">
						<?= wpautop($text); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>

	<div class="project-navigation widget--transition-to-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-md">
					<?php if($prev_post->ID != get_the_ID()){ ?>
						<a class="cp-btn cpt-btn--arrow-left" href="<?= get_permalink($prev_post->ID); ?>">Vorige <span class="d-none d-md-inline">project</span></a>
					<?php } ?>
				</div>
				<div class="col-2 col-xl-2 d-none d-md-block">
					<figure class="logo project-navigation__logo">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php bloginfo( 'template_url' ) ?>/images/cireplaster-logo.png" width="1182" height="1182" alt="<?php bloginfo( 'name' ); ?>" />
						</a>
					</figure>
				</div>
				<div class="col-6 col-md text-right">
					<?php if(!empty($next_post->ID)){ ?>
						<a class="cp-btn cpt-btn--arrow-on-right-side" href="<?= get_permalink($next_post->ID); ?>">Volgende <span class="d-none d-md-inline">project</span></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>