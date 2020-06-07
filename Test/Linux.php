<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/7
 * Time: 上午11:33
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace Test;


class Linux
{
	function __construct()
	{
		echo '<h1>' . __CLASS__ . '</h1>' . PHP_EOL;
	}
	
	function class_output()
	{
		$class = 'app\view\news\Index';
		
		/* 顶级命名空间路径映射 */
		$vendor_map = array(
			'app' => '/tmp/coins',
		);
		
		/* 解析类名为文件路径 */
		$vendor = substr($class, 0, strpos($class, '\\')); // 取出顶级命名空间[app]
		$vendor_dir = $vendor_map[$vendor]; // 文件基目录[/tmp/Baidu]
		$rel_path = substr($class, strlen($vendor)); // 相对路径[/view/news]
		//$file_name = substr($class, strrpos($class, "\\")) . '.php'; // 文件名[Index.php]
		$file_name = ".php";
		
		/* 输出文件所在路径 */
		echo str_replace("\\", "/", $vendor_dir . $rel_path . $file_name) . PHP_EOL;
	}
}