<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/7
 * Time: 上午11:34
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

spl_autoload_register(function ($class) { // class = os\Linux
	
	/* 限定类名路径映射 */
	$class_map = array(
		// 限定类名 => 文件路径
		'os\\Linux' => './Linux.php',
	);
	
	/* 根据类名确定文件名 */
	$file = $class_map[$class];
	
	/* 引入相关文件 */
	if (file_exists($file)) {
		include $file;
	}
});