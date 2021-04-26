 <?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if ($arParams['SHOW_MAP'] == "Y"){
	 $APPLICATION->IncludeComponent(
		"bitrix:map.yandex.view",
		".default",
		Array(
			"CONTROLS" => array("ZOOM", "TYPECONTROL"),
			"INIT_MAP_TYPE" => "MAP",
			"MAP_DATA" => serialize($arResult['MAP_DATA']),
			"MAP_HEIGHT" => "500",
			"MAP_ID" => "salon",
			"MAP_WIDTH" => "600",
			"OPTIONS" => array("ENABLE_SCROLL_ZOOM")
		)
	);
}
?>