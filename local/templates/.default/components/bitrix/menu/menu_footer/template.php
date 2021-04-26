<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<ul class="menu_footer grey">
	<?
	foreach($arResult as $arItem):
	?>
		<li><a href="<?=$arItem["LINK"]?>"<?=$arItem['SELECTED'] ? 'class="selected"' : '' ?><?=$arItem['PARAMS']['style'] ? 'style="' . $arItem['PARAMS']['style'] . '"' : '';?>>
		<?=$arItem["TEXT"]?></a></li>
	<?endforeach?>
	</ul>
<?endif?>