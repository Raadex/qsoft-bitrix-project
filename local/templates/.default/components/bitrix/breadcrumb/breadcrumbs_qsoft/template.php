<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';


$strReturn .= '<nav class="nav_chain">';
$arrow = '<span class="nav_arrow inline-block"></span>';
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
		if ($index != $itemSize-1)
		{
			$strReturn .= '<a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a>' . $arrow;
		} else {
			$strReturn .= '<span>' . $title . '</span>';
		}
}

$strReturn .= '</nav>';

return $strReturn;
