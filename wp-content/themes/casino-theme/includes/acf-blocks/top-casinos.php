<div class="top5_box">
	<table class="top5 mt-15">
		<?php for ($j=1; $j < 6; $j++) {
			$data = get_field('casino_'.$j); ?>

			<?php if ($data): ?>

				<tr class="casino-item casino-h" data-row-number="<?php echo $j ?>">
					<td data-type="row-number"><h5><?php echo $j ?></h5></td>
					<td data-type="logo">
						<?php $logo = $data['logo']; ?>
						<div class="game-logo flex-box">
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>
					</td>
					<td data-type="description">
						<p class="cas-title mb-0">
							<?php echo $data['title']; ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/casino-flag.svg" alt="icon">
						</p>
						<?php $stars = $data['rating']; ?>
						<div class="rate-stars">
							<?php for ($i=0; $i<$stars; $i++) { ?>
								<span class="star"></span>
							<?php } ?>
							<?php for ($i=0; $i<5-$stars; $i++) { ?>
								<span class="star empty"></span>
							<?php } ?>
							<span><?php echo $stars; ?>.0 / 5.0</span>
						</div>
						<?php $link2 = $data['link']; ?>
						<?php if ($link2) : ?>
							<a href="<?php echo $link2['url']; ?>"><?php echo $link2['title']; ?></a>
						<?php endif; ?>
					</td>
					<td data-type="description">
						<p class="large-purple mb-0"><?php echo $data['description']; ?></p>
					</td>
					<td data-type="options">
						<ul class="unstyled">
							<li><b>Spiele:</b> <?php echo $data['list_group']['spiele'] ?></li>
							<li><b>Win Rate:</b> <?php echo $data['list_group']['win_rate'] ?></li>
							<li><b>Payout Speed:</b> <?php echo $data['list_group']['payout_speed'] ?></li>
						</ul>
					</td>
					<td data-type="button">
						<?php $link = $data['button_link']; ?>
						<?php if ($link) : ?>
							<button type="button" class="btn-ocs btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
						<?php endif; ?>
					</td>
				</tr>

			<?php endif; ?>

		<?php } ?>
	</table>
</div>
