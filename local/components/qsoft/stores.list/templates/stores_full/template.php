<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<table>

	<?php
	foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "element_edit"));
    	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "element_delete"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    	<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    		<td>
    			<img src="<?=isset($arResult['IMAGES'][$arItem['PREVIEW_PICTURE']]['SRC']) ? $arResult['IMAGES'][$arItem['PREVIEW_PICTURE']]['SRC'] : DEFAULT_IMG ;?>" alt="" title="" />	
    		</td>
    		<td>
    			<?=$arItem['NAME']?>
    		</td>
    		<td>
    			<?=$arItem['PROPERTY_ADDRESS_VALUE']?>
    		</td>
    		<td>
    			<?=$arItem['PROPERTY_PHONE_VALUE']?>
    		</td>
    		<td>
    			<?=GetMessage('WORK_TIME')?><br/> <?=$arItem['PROPERTY_WORK_HOURS_VALUE']?>
    		</td>
    	</tr>
    <?php
	endforeach;
	?>	
</table>