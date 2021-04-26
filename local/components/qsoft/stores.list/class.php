<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */


/*************************************************************************
	Processing of received parameters
*************************************************************************/
class CQsoftStores extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
    {
		if (!isset($arParams["CACHE_TIME"])) $arParams["CACHE_TIME"] = 3600;
		$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
		if (strlen($arParams["IBLOCK_TYPE"]) <= 0) $arParams["IBLOCK_TYPE"] = "salons";
		if (empty($arParams['IBLOCK_ID']) || !is_numeric($arParams["IBLOCK_ID"]) || $arParams["IBLOCK_ID"] <= 0)
		{
			$arParams['IBLOCK_ID'] = 5;
		} else {
			$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
		}
		if (isset($arParams["STORES_COUNT"])) {
		    $arParams["STORES_COUNT"] = intval($arParams["STORES_COUNT"]);
		    if ($arParams["STORES_COUNT"] <= 0 ) unset($arParams["STORES_COUNT"]);
		}
		$arParams["SORT_BY"] = trim($arParams["SORT_BY"]);
		if (strlen($arParams["SORT_BY"]) <= 0)
		    $arParams["SORT_BY"] = "RAND";
		if (!preg_match('/^(asc|desc|nulls)$/i', $arParams["SORT_ORDER"]))
		    $arParams["SORT_ORDER"] = "ASC";
		if ($arParams['SHOW_MAP'] !== 'Y')  $arParams['SHOW_MAP'] = 'N';

		return $arParams;
	}

	public function executeComponent()
    {
    	global $APPLICATION, $USER, $INTRANET_TOOLBAR;
		if ($this->StartResultCache())
		{
			if (!CModule::IncludeModule("iblock"))
			{
				$this->AbortResultCache();
				ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
				return;
			}
			//SELECT
			$arSelect = array(
				"ID",
				"IBLOCK_ID",
				"NAME",
				"PREVIEW_PICTURE",
				"PROPERTY_ADDRESS",
				"PROPERTY_PHONE",
				"PROPERTY_WORK_HOURS",
			);
			if ($this->arParams['SHOW_MAP'] ==="Y") {
				$arSelect[] = "PROPERTY_MAP";
			}
			//WHERE
			$arFilter = array(
				"IBLOCK_ID" => $this->arParams["IBLOCK_ID"],
				"IBLOCK_LID" => SITE_ID,
				"ACTIVE" => "Y",
			);
			//ORDER BY
			$arSort = array(
				$this->arParams['SORT_BY'] => $this->arParams['SORT_ORDER'],

			);
			//EXECUTE
			$arNavStartParams = array_key_exists('STORES_COUNT', $this->arParams) ? ['nTopCount' => $this->arParams['STORES_COUNT']] : false;
			$rsIBlockElement = CIBlockElement::GetList($arSort, $arFilter, false, $arNavStartParams, $arSelect);

			$arFilter = [];

		            while ($item = $rsIBlockElement->GetNext()) {

		            	$arButtons = CIBLOCK::GetPanelButtons(
		            		$item['IBLOCK'],
		            		$item['ID'],
		            		0,
		            		array("SECTION_BUTTONS" => false, "SESSID" => false)
		            	);
		            	$item['EDIT_LINK'] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
		            	$item['DELETE_LINK'] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

		                $this->arResult['ITEMS'][] = $item;
		                if ($item['PREVIEW_PICTURE'])
		                    $arFilter['@ID'][] = $item['PREVIEW_PICTURE'];
		                if (array_key_exists('PROPERTY_MAP_VALUE', $item)) {
		                    list($lat, $lon) = explode(',', $item['PROPERTY_MAP_VALUE']);
		                    $this->arResult['MAP_DATA']['PLACEMARKS'][] = [
		                    	'TEXT' => $item['PROPERTY_ADDRESS_VALUE'],
		                        'LAT' => (float)$lat,
		                        'LON' => (float)$lon
		                    ];
		                }
		            }
		            $this->arResult['IBLOCK_ID'] = $this->arResult['ITEMS'][0]['IBLOCK_ID'];
		            if (!empty($arFilter)) {
		                $dbFiles = CFile::GetList([], $arFilter);
		                while ($image = $dbFiles->getNext()) {
		                    $this->arResult['IMAGES'][$image['ID']]['SRC'] = CFile::GetFileSRC($image);
		                }
		            }

				$this->setResultCacheKeys(array_key_exists('MAP_DATA', $this->arResult) ? ['MAP_DATA', 'IBLOCK_ID'] : ['IBLOCK_ID']);
		        $this->includeComponentTemplate();
			
		}
		if (CModule::includeModule("iblock")) {
            if ($USER->IsAuthorized()) {
                if ($APPLICATION->GetShowIncludeAreas()) {
                    $arButtons = CIBlock::GetPanelButtons(
                        $this->arResult['IBLOCK_ID'],
                        0,
                        0,
                        array("SECTION_BUTTONS" => false, "SESSID" => false)
                    );

                    $this->addIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));
                }
            }
        }
	}
}
?>
