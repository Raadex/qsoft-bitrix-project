<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="slider">
	<ul class="bxslider">
		<?php foreach ($arResult["BANNERS"] as $key=>$value):?>
		<li>
			<div class="banner">
	 			<?=$value?>
				<div class="banner_content">
					<h1><?=$arResult['BANNERS_PROPERTIES'][$key]["NAME"]?></h1>
					<h2><?=$arResult['BANNERS_PROPERTIES'][$key]["COMMENTS"]?><a href="<?=$arResult['BANNERS_PROPERTIES'][$key]["URL"]?>" class="detail_link"><?=GetMessage('BANNER_DETAIL')?></a></h2>
				</div>
			</div>
 		</li>
 	<?php endforeach?>
 	</ul>
</div>