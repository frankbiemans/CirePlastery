<?php
	$args = [
		'post_type' => 'project',
		'posts_per_page' => -1
	];
	$projects = get_posts( $args );
?>

<section class="section--projects-slider" id="projecten">
	<div class="section__inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 offset-xl-3">
					<div class="title-addon title-addon--04 wp-fade-only-in"><span class="white">Projecten</span></div>
					<h2 class="text-transition white">
						<?= put_title_in_spans(get_option('frontpage_h_2')); ?>
					</h2>
				</div>
			</div>

			<div class="row--project-slider">
				<div class="project-sliders">
					<?php foreach($projects as $project) { ?>
						<div class="fontpage-widget fontpage-widget--project">
							<div class="fontpage-widget__inner">
								<div class="frontpage-widget__image">
									<figure>
										<a href="<?= get_permalink($project->ID); ?>">
											<?= get_the_post_thumbnail($project, 'post-thumbnail'); ?>
										</a>
									</figure>
								</div>
								<div class="frontpage-widget__text">
									<h3 class="yellow"><a href="<?= get_permalink($project->ID); ?>"><?= $project->post_title; ?></a></h3>
									<?= wpautop($project->post_excerpt); ?>
									<a class="cp-btn-2" href="<?= get_permalink($project->ID); ?>">Lees meer</a>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="fontpage-widget fontpage-widget--project fontpage-widget--call-to-action">
						<div class="fontpage-widget__inner">
							<div class="frontpage-widget__text">
								<h3 class="yellow"><?= get_option('c2a_text_heading'); ?></h3>
								<?= wpautop(get_option('c2a_text_text')); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>