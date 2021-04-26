<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 ошибка: Страница не найдена");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

	<div class="bx-404-container">
		<div class="bx-404-block"><img src="<?=SITE_DIR?>images/404.png" alt=""></div>
		<div class="bx-404-text-block">К сожалению, такая страница не найдена. Данная страница была удалена с сайта, либо ее никогда не существовало. Вы можете вернуться на
		<a href="<?=SITE_DIR?>">Главную страницу</a> или воспользоваться
		<a href="<?='/search/'?>">поиском</a>
		Если вы хотите что-то сообщить, напишите нам спомощью формы
		<a href="<?='/company/contacts/'?>">Обратная связь</a></div>
	</div>
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>