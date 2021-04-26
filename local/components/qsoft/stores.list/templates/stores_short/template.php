<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<section class="shops_block">
				<h2 class="inline-block"><?= GetMessage('SALONS');?></h2>
				<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="<?=$arParams['LIST_ELEMENT_URL']?>" class="text_decor_none"><b><?=GetMessage('ALL_SALONS');?></b></a></span>
				<div>
				<?php
				foreach($arResult['ITEMS'] as $arItem):
				?>
					<figure class="shops_block_item">
						<a href=""><img src="<?=isset($arResult['IMAGES'][$arItem['PREVIEW_PICTURE']]['SRC']) ? $arResult['IMAGES'][$arItem['PREVIEW_PICTURE']]['SRC'] : DEFAULT_IMG;?>" alt="" title="" /></a>
						<figcaption class="shops_block_item_description">
							<h3 class="shops_block_item_name"><?=$arItem['NAME']?></h3>
							<p class="dark_grey"><?=$arItem['PROPERTY_ADDRESS_VALUE']?></p>
							<p class="black"><?=$arItem['PROPERTY_PHONE_VALUE']?></p>
							<p><?=GetMessage('WORK_TIME')?>:<br/><?=$arItem['PROPERTY_WORK_HOURS_VALUE']?></p>
						</figcaption>
					</figure>
				<?php
				endforeach;
				?>
				</div>
			</section>