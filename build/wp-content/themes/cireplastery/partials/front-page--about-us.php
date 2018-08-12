<section class="section--about-us" id="over-ons">
	<div class="section__inner">

		<div class="container-fluid">
			<div class="row row--seven-cols-xl">
				<div class="col-xl-1">&nbsp;</div>
				<div class="col-12 col-xl-6">
					<h2 class="text-transition">
						<div class="title-addon title-addon--02 wp-fade-only-in"><span>Over Ons</span></div>
						<?= put_title_in_spans(get_option('frontpage_h_4')); ?>
					</h2>
				</div>
			</div>
			<div class="row row--seven-cols-xl">
				<div class="d-none d-xl-block col-xl-1">&nbsp;</div>
				<div class="col-12 col-md-6 col-xl-2">
					<?php dynamic_sidebar('Over CirePlastery'); ?>
				</div>
				<div class="col-12 col-md-6 col-xl-4">
					<figure class="mt-3 mb-md-0">
						<img src="<?php bloginfo( 'template_url' ) ?>/images/furnibo-keukentablet-001.jpg" class="img-fluid w-100 scale-in" width="1024" height="768" alt="" />
					</figure>
				</div>
			</div>
		</div>

	</div>
</section>