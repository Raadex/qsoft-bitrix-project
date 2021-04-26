<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<nav>
		<ul class="left_menu">
			<li>
				<h2><?=GetMessage('LEFT_MENU_HEADER')?></h2>
				<ul>
					<?
					foreach($arResult as $arItem):
					?>
						<li><a href="<?=$arItem["LINK"]?>"<?=$arItem['SELECTED'] ? 'class="selected"' : '' ?>>
						<?=$arItem["TEXT"]?></a></li>
					<?endforeach?>
				</ul>
			</li>
		</ul>
	</nav>
<?endif?>