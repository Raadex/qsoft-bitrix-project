<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("IBLOCK_RAND_SALON_LIST"),
	"DESCRIPTION" => GetMessage("IBLOCK_RAND_SALON_DESC"),
	"SORT" => 40,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "salon",
			"NAME" => GetMessage("IBLOCK_SALON"),
			"SORT" => 20,
		)
	),
);

?>