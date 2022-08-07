<?php $items = get_field('bonus_boxes'); ?>

<div class="ocs-row">
	<div class="col-8">
		<?php if ($items): ?>
			<div class="ocs-row">

				<?php foreach ($items as $item): ?>

					<div class="light-purple-box hoverable mb-15">
						<h5><?php echo $item['bonus_item']['title']; ?></h5>
						<p class="mb-0"><?php echo $item['bonus_item']['text']; ?></p>
					</div>

				<?php endforeach; ?>

			</div>
		<?php endif; ?>
	</div>
</div>
