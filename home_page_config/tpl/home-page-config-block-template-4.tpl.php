<?php
/**
 * Blocks template 4
 */?>
<div class="block_style_5">
	<div class="block_style_6">
		<ul>
		<?php foreach ($terms as $term): ?>
			<li><?php print(l($term,$term,array('html' => TRUE))); ?></li>
			
			
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="block_footer">
	</div>
</div>
<div>
<p class="block_title"><?php print(t('Governorates')) ?></p>
</div>
