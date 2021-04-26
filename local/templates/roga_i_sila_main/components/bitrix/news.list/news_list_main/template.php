<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h2 class="inline-block"><?=GetMessage('NEWS');?></h2><span class="all_list">&nbsp;/&nbsp;<a href="<?=$arResult['LIST_PAGE_URL']?>" class="text_decor_none"><b><?=GetMessage('ALL_LINK')?></b></a></span>
<div>
	<?php foreach($arResult["ITEMS"] as $arItem):?>
		<figure class="news_item"> <a href="<?=$arItem["DETAIL_PAGE_URL"];?>"> <img src="<?= isset($arItem["PREVIEW_PICTURE"]["SRC"]) ?
                    $arItem["PREVIEW_PICTURE"]["SRC"] :
                    $arParams['DEFAULT_PICTURE_PREVIEW'];?>" alt="" title="" /></a> 
                    <figcaption class="news_item_description">
			<h3><a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><?=$arItem["NAME"]?></a></h3>
			<div class="news_item_anons">
		 		<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" class="text_decor_none">
				<?=$arItem["PREVIEW_TEXT"]?> </a>
			</div>
			<div class="news_item_date grey">
				 <?=$arItem["DISPLAY_ACTIVE_FROM"]?>
			</div>
		 			</figcaption> 
		</figure>
	<?php endforeach;?>
</div>
