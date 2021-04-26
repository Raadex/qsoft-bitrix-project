<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addString("<link href=\"/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />");
Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/base.css");
Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/bxslider/jquery.bxslider.css");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery-1.9.1.min.js");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.placeholder.js");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/bxslider/jquery.bxslider.js");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/default_script.js"); 

Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.core.css");
Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.theme.css");
Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jquery.ui.selectmenu/jquery.ui.selectmenu.css");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery-1.9.1.min.js");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.placeholder.js");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/bxslider/jquery.bxslider.js");
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/default_script.js");
?><!DOCTYPE>
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8> <![endif]-->
<!--[if IE 9]>    <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>
		<title><?php $APPLICATION->ShowTitle()?></title>
		<?php $APPLICATION->ShowHead();?>
		<!--[if lt IE 9]>
			<script src="<?=DEFAULT_TEMPLATE_PATH?>/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php $APPLICATION->ShowPanel()?>
		
		<div class="wrapper">
			<div class="base_layer"></div>
			<header class="header">
				<div class="width_960">
					<div class="item-logo">
						<span class="logo inline-block"></span>
					</div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:system.auth.form",
							"auth_form_header",
							Array(
								"FORGOT_PASSWORD_URL" => "",
								"PROFILE_URL" => "/personal/profile/",
								"REGISTER_URL" => "/auth/",
								"SHOW_ERRORS" => "N",
								"PERSONAL_AREA" => "/personal/",
								"AUTH_URL" => "/auth/"
							)
						);?>
					<div class="basket_block">
						<a href="#" class="basket_product_count inline-block">0</a>
						<a href="#" class="order_button pie">Оформить заказ</a>
					</div>
				</div>
			</header>
