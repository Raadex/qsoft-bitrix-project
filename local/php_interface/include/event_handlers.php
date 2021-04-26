<?php
\Bitrix\Main\EventManager::getInstance()->AddEventHandler("main", "OnAfterUserAuthorize", Array("MessageSender", "OnAfterUserAuthorizeHandler"));

class MessageSender
{
    // создаем обработчик события "OnAfterUserAuthorize"
    public static function OnAfterUserAuthorizeHandler($arUser)
    {
         // выполняем все действия связанные с авторизацией
		\Bitrix\Main\Mail\Event::send(array(
			"EVENT_NAME" => "USER_LOGGED",
			"LID" => SITE_ID,
			"C_FIELDS" => array(
				"LOGIN" => $arUser['user_fields']['LOGIN'],
				"EMAIL" => $arUser['user_fields']['EMAIL'],
				"AUTH_DATE" => date('Y.d.m. H:i:s'),
			),
		));
    }
}