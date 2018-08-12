<?php
$i = 0;
$insta_feed = array_slice(return_instagram_feed(), 0, 14);
?>

<section class="section--instagram-feed">
	<div class="container-fluid">
		<div class="insta-header d-block d-xl-none">
			<div class="row">
				<div class="col-12">
					Volg ons ook<br />
					op instagram
					<a href="<?= get_option('url_instagram'); ?>" target="_blank" class="social__a">
						<i class="fab fa-instagram social__i" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="row row--first">
			<?php foreach(array_slice($insta_feed, 0, 7) as $item){ ?>
				<div class="col">
					<?php if($i == 1){ ?>
						<div class="insta-header insta-header--md d-none d-xl-block">
							Volg ons ook<br />
							op instagram
							<a href="<?= get_option('url_instagram'); ?>" target="_blank" class="social__a">
								<i class="fab fa-instagram social__i" aria-hidden="true"></i>
							</a>
						</div>
					<?php } ?>
					<div class="instagram-post widget--transition-to-top widget--transition-to-top--<?= ($i+1); ?>">
						<figure style="background-image:url(<?= $item['image']['src']; ?>);">
							<a href="<?= $item['link']; ?>" target="<?= $item['target']; ?>">
								<img src="<?= $item['image']['src']; ?>" width="<?= $item['image']['width']; ?>" height="<?= $item['image']['height']; ?>" alt="<?= $item['image']['alt']; ?>" />
							</a>
						</figure>
					</div>
				</div>
				<?php $i++; } ?>
			</div>
			<div class="row row--second">
				<?php foreach(array_slice($insta_feed, 7, 14) as $item){ ?>
					<div class="col">
						<div class="instagram-post widget--transition-to-top widget--transition-to-top--<?= ($i+1); ?>">
							<figure style="background-image:url(<?= $item['image']['src']; ?>);">
								<a href="<?= $item['link']; ?>" target="<?= $item['target']; ?>">
									<img src="<?= $item['image']['src']; ?>" width="<?= $item['image']['width']; ?>" height="<?= $item['image']['height']; ?>" alt="<?= $item['image']['alt']; ?>" />
								</a>
							</figure>
						</div>
					</div>
					<?php $i++; } ?>
				</div>
			</div>
		</section>