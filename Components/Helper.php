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
	function put ($file, $data, $mod)
	{
		if (is_array($data) || is_object($data)) $data = json_encode($data, JSON_UNESCAPED_UNICODE);
		if (strpos($file, "..") === 0) $file = str_replace("..", dirname(getcwd()), $file);
		if (strpos($file, ".") === 0) $file = str_replace(".", getcwd(), $file);
		if (!($dir = file_exists(dirname($file)))) mkdir($dir, 0777, true);
		@file_put_contents($file, $data, $mod);
	}
}