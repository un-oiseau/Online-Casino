<?php
$classname = "expert-box expert-vertical mt-3";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="ocs-row">
		<div class="col-3">
			<div class="light-purple-box">
				<div class="expert-img mx-auto mb-15">
					<?php $logo = get_field('photo'); ?>
					<?php if ($logo) :  ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
					<?php endif; ?>
				</div>

				<div class="expert-info">
					<p class="h5 mb-0"><?php the_field('full_name'); ?></p>
					<p>Experte</p>
				</div>
			</div>
		</div>
		<div class="col-9">
			<div class="expert-description">
				<?php the_field('text'); ?>
			</div>
		</div>
	</div>

</div>
