<div class="ocs-row">
	<div class="col-6">
		<div class="green-list">
			<?php $data = get_field('green_list'); ?>

			<?php if ($data['title']): ?>
				<p class="list-title"><?php echo $data['title']; ?></p>
			<?php endif; ?>

			<ul class="checked_list">
				<?php foreach ($data['green_list'] as $li) { ?>

					<li><?php echo $li['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="col-6">
		<div class="red-list">
			<?php $data = get_field('red_list'); ?>

			<?php if ($data['title']): ?>
				<p class="list-title"><?php echo $data['title']; ?></p>
			<?php endif; ?>

			<ul class="unchecked_list">
				<?php foreach ($data['red_list'] as $li) { ?>

					<li><?php echo $li['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
	</div>
</div>
