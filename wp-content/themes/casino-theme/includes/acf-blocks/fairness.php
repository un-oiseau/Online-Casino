<?php
$classname = "ocs-row";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<div class="col-10 mx-auto text-center">
		<div class="fairness">
			<p class="mb-0"><?php echo the_field('text') ?></p>
		</div>
	</div>
</div>
