<?php
date_default_timezone_set('Asia/Almaty');

defined("APP_NAME")        || define('APP_NAME', 'Landing page');

defined("DEV_ENV")         || define('DEV_ENV', 0);
defined("PRODUCTION_ENV")  || define('PRODUCTION_ENV', 1);
defined("APP_ENVIRONMENT") || define('APP_ENVIRONMENT', DEV_ENV);
if (APP_ENVIRONMENT === DEV_ENV) {
	error_reporting(E_ALL);
}

defined("DB_NAME")        || define('DB_NAME', 'b6_15270688_test_task');
defined("DB_HOST")        || define('DB_HOST', 'sql212.byethost6.com');
defined("DB_USER")        || define('DB_USER', 'b6_15270688');
defined("DB_PASSWORD")    || define('DB_PASSWORD', '');

// defined("DB_NAME")   || define('DB_NAME', 'landing_db');
// defined("DB_HOST")   || define('DB_HOST', 'localhost');
// defined("DB_USER")   || define('DB_USER', 'root');
// defined("DB_PASSWORD") || define('DB_PASSWORD', '');


const SITE_EMAILS = [
	'admin' => [
		'email'=>'dosan@tamur.kz',
		'password'=>'',
		'host'=>'smtp.yandex.ru',
	],
	'info' =>[
		'email'=>'blah',
		'password'=>'blah',
		'host'=>'blah',
	]
];
