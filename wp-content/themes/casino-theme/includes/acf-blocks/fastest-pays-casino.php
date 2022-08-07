<div class="ocs-row">
	<?php $data = get_field('casinos'); ?>
	<?php foreach ($data as $item) { $casino = $item['casino']; ?>
		<div class="col-6">
			<div class="light-purple-box text-center mb-15">
				<div class="game-logo mb-15">
					<?php $logo = $casino['logo']; ?>
					<?php if ($logo) :  ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
					<?php endif; ?>
				</div>
				<p class="mb-0"><?php echo $casino['title']; ?></p>
			</div>
		</div>
	<?php } ?>
</div>
