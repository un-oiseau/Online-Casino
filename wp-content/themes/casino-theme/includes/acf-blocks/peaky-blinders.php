<?php $data = get_field('casino'); ?>

<?php if ($data): $list = $data['list'] ?>

	<div class="peaky-box">
		<div class="ocs-row">
			<div class="col-4">
				<div class="bg-gradient">
					<?php $logo = $data['logo']; ?>
					<div class="game-logo">
						<?php if ($logo) :  ?>
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
						<?php endif; ?>
					</div>
					<p class="peaky-title"><?php echo $data['title']; ?></p>

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
					<p><?php echo $data['description']; ?></p>
					<?php if ($list): ?>
						<ul class="checked-list">
							<?php foreach ($list as $li): ?>
								<li><?php echo $li['item']; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-8">
				<div class="top5_box">
					<table class="top5">
						<?php for ($j=1; $j <= 6; $j++) { ?>
							<?php if ($data['game_'.$j]): $game = $data['game_'.$j]?>
								<tr class="casino-item casino-h" data-row-number="<?php echo $j ?>">
									<td data-type="logo">
										<?php $logo = $game['logo']; ?>
										<div class="game-logo flex-box">
											<?php if ($logo) :  ?>
												<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
											<?php endif; ?>
										</div>
									</td>
									<td data-type="description">
										<p class="cas-title mb-0">
											<?php echo $game['title']; ?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/casino-flag.svg" alt="icon">
										</p>
										<?php $stars = $game['rating']; ?>
										<div class="rate-stars">
											<?php for ($i=0; $i<$stars; $i++) { ?>
												<span class="star"></span>
											<?php } ?>
											<?php for ($i=0; $i<5-$stars; $i++) { ?>
												<span class="star empty"></span>
											<?php } ?>
											<span><?php echo $stars; ?>.0 / 5.0</span>
										</div>
										<?php $link2 = $game['link']; ?>
										<?php if ($link2) : ?>
											<a href="<?php echo $link2['url']; ?>"><?php echo $link2['title']; ?></a>
										<?php endif; ?>
									</td>
									<td data-type="description">
										<p class="large-purple mb-0"><?php echo $game['description']; ?></p>
									</td>
									<td data-type="button">
										<?php $link = $game['button_link']; ?>
										<?php if ($link) : ?>
											<button type="button" class="btn-ocs btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
										<?php endif; ?>
									</td>
								</tr>
							<?php endif; ?>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>
