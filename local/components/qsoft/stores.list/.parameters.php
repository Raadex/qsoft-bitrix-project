<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock=array();

$rsIBlock = CIBlock::GetList(Array("SORT" => "ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arSorts = array("ASC" => GetMessage("IBLOCK_ASC"), "DESC" => GetMessage("IBLOCK_DESC"));
$arSortFields = array("NAME" => GetMessage("IBLOCK_SORT_NAME"), "RAND" => GetMessage("IBLOCK_SORT_RAND"));
$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
		),
		"SORT_BY" => array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => GetMessage("IBLOCK_SORT_BY"),
            "TYPE" => "LIST",
            "DEFAULT" => "RAND",
            "VALUES" => $arSortFields,
        ),
        "SORT_ORDER" => array(
            "PARENT" => "DATA_SOURCE",
            "NAME" => GetMessage("IBLOCK_SORT_TYPE"),
            "TYPE" => "LIST",
            "DEFAULT" => "DESC",
            "VALUES" => $arSorts,
        ),
        "STORES_COUNT" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("IBLOCK_SORT_LIST_COUNT"),
            "TYPE" => "STRING",
        ),
		"CACHE_TIME"  =>  Array("DEFAULT"=>3600),
		"SHOW_MAP" => array(
			"PARENT" => "VISUALE",
			"NAME" => GetMessage("IBLOCK_SORT_MAP"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
	),
);
?>
