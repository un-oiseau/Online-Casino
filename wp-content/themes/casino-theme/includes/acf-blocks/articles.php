<?php $data = get_field('articles'); ?>
<div class="ocs-row articles-row">

	<?php foreach ($data as $item) { $article = $item['article'] ?>
		<div class="col-10">
			<div class="article">
				<div class="article-link">
					<?php $link = $article['link']; ?>
					<?php if ($link) : ?>
						<p>
							<img src="<?php echo get_template_directory_uri(); ?>/images/tag.svg" alt="icon">
							<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
						</p>
					<?php endif; ?>
				</div>
				<p class="mb-0"><?php echo $article['text']; ?></p>
			</div>
		</div>
	<?php } ?>

</div>
