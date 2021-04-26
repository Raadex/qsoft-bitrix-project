<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<nav class="main_menu">
	<ul>
	<?
	$levelDepth = 0;
	foreach($arResult as $arItem):
	?>
		<?if ($levelDepth && $arItem["DEPTH_LEVEL"] < $levelDepth):?>
			<?=str_repeat("</ul></li>", ($levelDepth - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>
		<?php if ($arItem['IS_PARENT']):?>
				<?if ($arItem["SELECTED"]):?>
					<li class="submenu current">
					<span><?=$arItem["TEXT"]?></span>
				<?else:?>
					<li class="submenu"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?endif?>
				<div class="submenu_border"></div>
				<ul>
		<?else:?>
			<?if($arItem["SELECTED"]):?>
				<li class="current">
				<span><?=$arItem["TEXT"]?></span>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?endif?>
			</li>	
		<?endif?>
		<?php $levelDepth = $arItem["DEPTH_LEVEL"];?>
	<?endforeach?>
	<?if ($levelDepth > 1):?>
		<?=str_repeat("</ul></li>", ($levelDepth-1) );?>
	<?endif?>
		</ul>
	</nav>
<?endif?>
