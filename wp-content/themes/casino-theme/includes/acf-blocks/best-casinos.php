<div class="best-games">
	<div class="ocs-row">

		<?php for ($j=1; $j < 4; $j++) {
			$data = get_field('casino_'.$j); ?>

			<?php if ($data): ?>

				<div class="col-4 mt-1">
			        <div class="casino-item casino-v text-center">
						<?php $logo = $data['logo']; ?>
						<div class="game-logo">
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>

						<p class="extra-large-purple"><?php echo $data['description']; ?></p>
						<p class="cas-title">
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
							<div class="text-center">
								<a href="<?php echo $link2['url']; ?>"><?php echo $link2['title']; ?></a>
							</div>
						<?php endif; ?>

						<p class="games"><?php echo $data['game_title']; ?></p>
						<p><?php echo $data['games']; ?></p>

						<?php $link = $data['button_link']; ?>
						<?php if ($link) : ?>
							<button type="button" class="btn-ocs btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
						<?php endif; ?>

			        </div>
			    </div>

			<?php endif; ?>

		<?php } ?>
	</div>

</div>
