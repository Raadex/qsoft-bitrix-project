<?php

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();



Loc::loadMessages(__FILE__);

CBitrixComponent::includeComponentClass('bitrix:advertising.banner');

class Cars extends AdvertisingBanner
{
	public function onPrepareComponentParams($params)
	{
		global $USER;
		$params = parent::onPrepareComponentParams($params);
		if (!$USER->IsAuthorized()) 
		{
			$params['QUANTITY'] = 1;
		}

		return $params;
	}
}