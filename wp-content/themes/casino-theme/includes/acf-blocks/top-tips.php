<?php
$classname = "tips-box text-center";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
$data = get_field('tips');
?>

<div class="ocs-row">
	<?php foreach ($data as $item): ?>
		<div class="col-3">
			<div class="<?php echo esc_attr($classname) ?>">
				<?php
				$image = $item['tip_item']['icon'];
				if( !empty( $image ) ): ?>
					<div class="tips-img">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
				<?php endif; ?>
				<p class="h6"><?php echo $item['tip_item']['title'] ?></p>
				<p><?php echo $item['tip_item']['text'] ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
