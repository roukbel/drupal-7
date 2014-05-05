<?php
/**
 * Blocks template 3
 */?>
<div class="block_style_3">
	<span class="block-ico-image"></span>
	<div>
		<?php
		print(theme('image_style',array(
		    'style_name'=> 'home_page_config_style_2',
		    'path' => $uri,
		    'alt' => 'Image not found',
		    'text' => ' image article for test',)));
		?>
	</div>
	<?php if($img_type=='rz_photos'):?>
	<div id="title-overlay">
		<?php print($title);?>
	</div>
	<?php endif;?>
	<div>
		<p class="block_title">
			<?php if($img_type=='rz_caricature'):?>
			<?php print(t('Caricatures'));?>
			<?php else:?>
			<?php print(t('Picture of the day'));?>
			<?php endif;?>
		</p>
	</div>
</div>
