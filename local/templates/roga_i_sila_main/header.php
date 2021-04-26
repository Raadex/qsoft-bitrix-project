<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
require_once $_SERVER['DOCUMENT_ROOT'] . DEFAULT_TEMPLATE_PATH . "header.php"; ?>

			<section class="fixed_block">
				<div class="width_960">
					<form name="search_form" class="search_form pie">
						<div class="search_form_wrapper">
							<input type="text" placeholder="Поиск по сайту"/>
							<input type="submit" value=""/>
						</div>
					</form>
							<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"catalog_top",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "2",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "Y"
							)
							);?>
				</div>
			</section>
			
			<section class="content">
				<div class="work_area width_960">