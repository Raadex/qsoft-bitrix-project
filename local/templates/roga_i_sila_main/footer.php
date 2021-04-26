<!--Footer -->
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
				</div>
			</section>
<div class="d_footer width_960"></div>
			<div class="clear"></div>
		</div>
		<footer class="footer width_960">
			<section class="float_inner bottom_block">
				<?$APPLICATION->IncludeComponent(
					"qsoft:stores.list",
					"stores_short",
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
					    "STORES_COUNT" => "2",
					)
				);?><br>
				<section class="info_block left_block_shadow">
					<h2><?=getMessage('BLOCK_INFORMATION')?></h2>		
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"menu_footer",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom",
							"USE_EXT" => "N"
						)
					);?>
				</section>
			</section>
			<div class="footer_inner">
				<a href="http://www.qsoft.ru" target="_blank" class="qsoft grey inline-block">Сделано в </a>
				<div class="copy">&copy; 2013 Рога &amp; Сила. Продажа автомобилей.</div>
			</div>
		</footer>
	</body>
</html>