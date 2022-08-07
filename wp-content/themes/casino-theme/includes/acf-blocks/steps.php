<ul class="steps-box">
	<?php $data = get_field('steps'); ?>
	<?php foreach ($data as $i => $step) { ?>
		<li>
			<span class="counter"><?php echo $i+1 ?></span>
			<p class="h5"><?php echo $step['step']['title']; ?></p>
			<p><?php echo $step['step']['text']; ?></p>
		</li>
	<?php } ?>
</ul>
