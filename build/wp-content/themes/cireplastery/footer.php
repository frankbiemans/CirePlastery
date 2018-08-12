		<footer id="contact" class="footer">
			<div class="section__inner">
				<div class="container">
					<div class="row align-items-end footer_row--first">
						<div class="col-12 col-md-9">
							<h3 class="white text-transition footer__title">
								<div class="title-addon title-addon--03 wp-fade-only-in"><span class="white">Contact</span></div>
								<span class="the-title"><?= put_title_in_spans(get_option('footer_title')); ?></span>
							</h3>
						</div>
						<div class="col-12 col-md">
							<div class="float-right">
								<?= do_shortcode('[social-icons]'); ?>
							</div>
						</div>
					</div>
					<div class="row footer_row--second">
						<div class="col-12 col-md-4 col-lg-3">
							<figure class="mb-3"> 
								<?= wp_get_attachment_image( 15, 'full'); ?>
							</figure>
							<div class="footer__contact-info">
								<?= wpautop(get_option('footer_contact')); ?>
							</div>
						</div>
						<div class="col-12 col-md-8 offset-lg-1">
							<?= do_shortcode(get_option('footer_form')); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		</div><!-- /.master-wrapper__inner -->
	</div> <!-- /#master-wrapper -->

	<div class="loading-screen">
		<div class="spinner"></div>
	</div>
</body>
</html>