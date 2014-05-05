<?php
/**
 * Blocks template 3
 */
?>
<?php if((variable_get('last_news_'.$language)) && isset($last_news)):?>
<div id="header-col-1">
	<span class="block-ico-<?php print $ico_type;?>"></span>
	<?php print(l(theme('image_style',array('style_name'=> 'header_big_img_style','path' => $last_news['uri'],'alt' => 'Image not found','text' => ' image text')),'node/'.$last_news['nid'],array('html' => TRUE)));?>
	<div>
		<div>
			<p class="janimate">
				<span class="article_info"> <?php if(isset($authors)):?> <span
					class="author"> <?php print ($authors['0']['safe_value']);?> </span>
					<?php endif; ?> <span class="img_separator"> </span> <span
					class="content_type"> <?php print ($content_type);?> </span> </span>
				<span class="title"> <?php print($last_news['title']);?> </span>
			</p>
		</div>
	</div>
</div>
					<?php endif; ?>
<div id="header-col-2">

	<div id="header-col-2-col-1">
	<?php if (variable_get('radio_'.$language)): ?>
		<div id="header-radio-bt">
			<span><?php print(t('Listen to rozana')); ?> </span>
		</div>
		<?php endif;?>


		<?php if (variable_get('podcast_'.$language)) :?>
		<div id="header-podcast-bt">
			<span><?php print(t('Last news')); ?> </span>
		</div>

		<?php endif;?>

	</div>
	<?php if (variable_get('daily_program_'.$language)): ?>
	<?php print(l('<div id="header-daily-prog-bt"><span>'.t('Program of the day').'</span></div>','node/'.$podcast['nid'],array('html' => TRUE)));?>
	<?php endif;?>


	<?php if (variable_get('last_4_news_'.$language)&&($last_4_news)) :?>
	<div id="header-last-news-list">
		<h2>
		<?php print(t('Latest News'));?>
		</h2>
		<?php print(theme('item_list', $last_4_news));?>
	</div>
	<?php endif;?>


</div>
