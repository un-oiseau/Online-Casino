<?php $data = get_field('casino'); ?>

<?php if ($data): ?>
	<div class="casino-item casino-v best-casino">
		<div class="bg-gradient text-center">
			<p class="h4 mb-0">Beste Online Casino Bonus 2020</p>
		</div>
		<div class="bg-gradient-dark text-center">
			<p class="h6 mb-0"><?php echo $data['description']; ?></p>
		</div>

		<div class="casino-content">
			<div class="ocs-row">
				<div class="col-4">
					<?php $logo = $data['logo']; ?>
					<div class="flex-box">
						<div class="game-logo flex-box">
		 				   <?php if ($logo) :  ?>
		 					   <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
		 				   <?php endif; ?>
		 			   </div>
		 			   <div class="casino-main">
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
		 				   <?php $link1 = $data['link']; ?>
		 				   <?php if ($link1) : ?>
							   <a href="<?php echo $link1['url']; ?>"><?php echo $link1['title']; ?></a>
		 				   <?php endif; ?>
		 			   </div>
					</div>
				</div>
				<div class="col-8 flex-box">
					<?php if ($data['description_list']): $list = $data['description_list']; ?>
						<ul class="check-purple">
							<?php foreach ($list as $item): ?>
								<li><?php echo $item['list_item']; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<?php $link = $data['button_link']; ?>
			<?php if ($link) : ?>
				<button type="button" class="btn-tc btn-tc-green btn-block mt-1" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>
