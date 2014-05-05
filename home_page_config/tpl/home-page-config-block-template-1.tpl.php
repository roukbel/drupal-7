<?php
/**
 * Blocks template
 */?>

<script
	type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$(".janimate").mouseover(function () {
				 $(this).animate({ 
				        height: "70%", 
				        widht:"100%",
				      }, 100 );
	 });
				 
				 $(".janimate").mouseleave(function () {
					 $(this).animate({ 
					        height: "30%", 
					      }, 100 );

					
	});
	});
</script>


<div class="block_style_1">
	<span class="block-ico-<?php print $ico_type;?>"></span>

	<?php
	print(theme('image_style',array(
				'style_name'=> 'home_page_config_style_1',
				'path' => $uri,
				'alt' => 'Image not found',
				'text' => ' image article for test',)));
	?>
	<div class="block_style_2">
		<div class="tbcell">
			<p class="janimate">
				<span class="article_info"> 
				<?php if(isset($authors)):?> 
				<span class="author"> 
				<?php print ($authors['0']['safe_value']);?> 
				</span>
				<?php endif; ?>
				 <span class="img_separator">
				  </span> 
				  <span class="content_type">
				  <?php print ($content_type);?> 
				  </span>
				  </span>
				<span class="title"> 
				<?php print($title);?> 
				</span>
			</p>

		</div>
	</div>
</div>

