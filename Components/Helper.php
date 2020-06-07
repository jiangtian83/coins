<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/6
 * Time: 下午10:37
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

if (!function_exists("put")) {
	function put ($file, $data, $mod = FILE_APPEND)
	{
		if (is_array($data) || is_object($data)) $data = json_encode($data, JSON_UNESCAPED_UNICODE);
		if (strpos($file, "../") === 0) $file = str_replace("../", dirname(getcwd()) . "/", $file);
		elseif (strpos($file, "./") === 0) $file = str_replace("./", getcwd() . "/", $file);
		elseif (strpos($file, "/") === 0) $file = str_replace("/", getcwd() . "/", $file);
		elseif (strpos($file, "..") !== 0 || strpos($file, "./") !== 0 || strpos($file, "/") !== 0) $file = "/" . getcwd() . "/" . $file;
		if (!($dir = file_exists(dirname($file)))) mkdir($dir, 0777, true);
		echo 999;
		@file_put_contents($file, $data, $mod);
	}
}

if (!function_exists("__autoload")) {
	function __autoload($class)
	{
		die($class . '未定义');
	}
}