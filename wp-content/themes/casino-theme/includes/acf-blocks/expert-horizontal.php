<?php
$classname = "expert-box exp-horizontal";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="flex-box mb-1">
		<?php $logo = get_field('photo'); ?>
		<?php if ($logo) :  ?>
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
		<?php endif; ?>
		<div class="expert-info">
			<h5 class="mb-0"><?php the_field('full_name'); ?></h5>
			<p class="mb-0">Experte</p>
		</div>
	</div>
	<p><?php the_field('text'); ?></p>

</div>
