<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("MAIN_BANNER_NAME"),
	"DESCRIPTION" => GetMessage("MAIN_BANNER_DESC"),
	"ICON" => "/images/banner.gif",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "service",
		"CHILD" => array(
			"ID" => "cars",
			"NAME" => GetMessage("MAIN_SERVICE")
		)
	),
);
?>