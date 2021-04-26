<?php
define('DEFAULT_TEMPLATE_PATH', '/local/templates/.default/');
define('DEFAULT_IMG', '/local/templates/.default/images/no-image.jpg');
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/event_handlers.php'))
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/event_handlers.php';