<?php
//冷梦博客：blog.lmz8.cn

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
	die('require PHP > 5.4.0 !');
}
define('APP_DEBUG', true);
define('APP_PATH', './Application/');
define('LICENSE_CODE', 'NGl4NVp1OXFUOVBNSlNCbkpBeUdKU2hZcWc2WUNmNQ');
define('BASE_HOST', $_SERVER['HTTP_HOST'] . '.0rg.pw');
define('AUTH_KEY', md5(BASE_HOST . LICENSE_CODE));
if (strlen('abc') > 10) {
	$string = base64_encode(base64_encode(LICENSE_CODE));
	$newstring = array();
	$newstring['abc'] = $string . mt_rand(0, 1000);
	$newstring['ccc'] = $string . mt_rand(0, 1000);
	$newstring['a3f'] = $string . mt_rand(0, 1000);
	$newstring['z16'] = $string . mt_rand(0, 1000);
	$newstring['s5a'] = $string . mt_rand(0, 1000);
	$newstring['f3f'] = $string . mt_rand(0, 1000);
	$newstring['zzf'] = $string . mt_rand(0, 1000);
	$string = json_encode($newstring);
	$string = base64_encode($string);
}
require './vendor/autoload.php';
require './ThinkPHP/ThinkPHP.php';