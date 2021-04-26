<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наши салоны");
$APPLICATION->IncludeComponent(
	"qsoft:stores.list",
	"stores_full",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS_PROP" => "5",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "salons",
	    "LIST_ELEMENT_URL" => "/company/stores/",
	    "SORT_BY" => "RAND",
	    "SORT_ORDER" => "DESC",
	    "STORES_COUNT" => "",
	    "SHOW_MAP" => "Y",
	)
);
?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>