<?php $data = get_field('faq'); ?>
<?php foreach ($data as $faq) { ?>
	<div class="faq-box">
		<div class="toggller"></div>
		<p class="question mb-0"><?php echo $faq['faq_item']['question']; ?></p>
		<div class="answer">
			<?php echo $faq['faq_item']['answer']; ?>
		</div>
	</div>
<?php } ?>
