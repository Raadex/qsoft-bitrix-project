<?
define("HIDE_SIDEBAR", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"ADD_SECTION_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "4",
		"ALSO_BUY_MIN_BUYES" => "1",
		"BASKET_URL" => "/personal/cart/",
		"BIG_DATA_RCM_TYPE" => "personal",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "N",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "BACKGROUND_IMAGE",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => "BRAND_REF",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BROWSER_TITLE" => "TITLE",
		"DETAIL_DISPLAY_NAME" => "N",
		"DETAIL_FB_USE" => "Y",
		"DETAIL_META_DESCRIPTION" => "META_DESCRIPTION",
		"DETAIL_META_KEYWORDS" => "KEYWORDS",
		"DETAIL_OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"",),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(0=>"ARTNUMBER",1=>"SIZES_SHOES",2=>"SIZES_CLOTHES",3=>"COLOR_REF",4=>"MORE_PHOTO",5=>"",),
		"DETAIL_PROPERTY_CODE" => array(0=>"NEWPRODUCT",1=>"MANUFACTURER",2=>"MATERIAL",),
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_USE_VOTE_RATING" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "desc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FIELDS" => array(0=>"STORE",1=>"SCHEDULE",),
		"FILTER_NAME" => "",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => array(0=>"NEWPRODUCT",),
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",
		"LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",
		"LIST_META_KEYWORDS" => "UF_KEYWORDS",
		"LIST_OFFERS_FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"DETAIL_PICTURE",3=>"",),
		"LIST_OFFERS_LIMIT" => "0",
		"LIST_OFFERS_PROPERTY_CODE" => array(0=>"SIZES_SHOES",1=>"SIZES_CLOTHES",2=>"COLOR_REF",3=>"MORE_PHOTO",4=>"ARTNUMBER",5=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"NEWPRODUCT",1=>"SALELEADER",2=>"SPECIALOFFER",3=>"",),
		"MAIN_TITLE" => "Наличие на складах",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MIN_AMOUNT" => "10",
		"OFFERS_CART_PROPERTIES" => array(0=>"SIZES_SHOES",1=>"SIZES_CLOTHES",2=>"COLOR_REF",),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "desc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_TREE_PROPS" => array(0=>"SIZES_SHOES",1=>"SIZES_CLOTHES",2=>"COLOR_REF",3=>"",),
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "15",
		"PRICE_CODE" => array(0=>"BASE",),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"QUANTITY_FLOAT" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"SECTIONS_VIEW_MODE" => "TILE",
		"SECTION_BACKGROUND_IMAGE" => "UF_BACKGROUND_IMAGE",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "1",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("sections"=>"","section"=>"#SECTION_CODE#/","element"=>"#SECTION_CODE#/#ELEMENT_CODE#/","compare"=>"compare/",),
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"SIDEBAR_DETAIL_SHOW" => "Y",
		"SIDEBAR_PATH" => "/catalog/sidebar.php",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"STORE_PATH" => "/store/#store_id#",
		"TEMPLATE_THEME" => "site",
		"USE_ALSO_BUY" => "Y",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"USE_STORE" => "Y"
	)
);?> <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>