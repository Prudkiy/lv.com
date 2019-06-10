<?php

strripos($_SERVER['SERVER_PROTOCOL'], 'https') ? $protocol = 'https://' : $protocol = 'http://';
$app_path = "{$protocol}{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = preg_replace("#/public/#", '', $app_path);

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/lv/core');
define("LIBS", ROOT . '/vendor/lv/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", ROOT . 'default');
define("PATH", $app_path);
define("ADMIN", ROOT . '/admin');

require_once ROOT . '/vendor/autoload.php';