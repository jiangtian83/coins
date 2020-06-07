<?php
// 设定错误监听的级别
// 但不会影响 set_error_handler 和 try ... catch 的捕获
// set_error_handler 和 try ... catch 是将错误处理交给用户
// 只有当用户没有对错误做处理时
// 错误才会根据 error_reporting / display_errors / log_errors / error_log 进行 php 标准的错误处理流程
error_reporting(E_ALL);

// 是否回显错误信息，默认 true
// 则会将所有监听到的错误信息回显到标准输出：浏览器或者命令行
// 线上环境强烈建议关闭 错误信息会暴露服务器相关信息
ini_set('display_errors', false);

// 开启错误日志
// 线上环境强烈建议开启 记录错误日志
ini_set('log_errors', true);
// 错误日志的位置 注意：如果 error_log 的路径有误的话 display_errors 会被强制打开 回显错误到标准输出
ini_set('error_log', __DIR__ . '/error.log');

// 以上为 php 标准错误处理 的设定

// E_WARNING E_NOTICE E_DEPRECATED E_USER_* E_STRICT 捕获
set_error_handler(function ($error_no, $error_str, $error_file, $error_line) {
	echo "erro_no: " . $error_no . " error_str: " . $error_str . PHP_EOL;
	//注意 程序并不会在这里退出执行
	//注意 如果返回了 false 错误会被 php 标准错误处理流程处理
}, E_ALL | E_STRICT);

// E_PARSE & E_ERROR 捕捉
try {
	// E_WARNING 被 set_error_handler 捕获
	//echo $variable_not_exists;
	
	// E_ERROR 被 try ... catch 捕获
	func_not_exists("function not exists!");
	
	// E_PARSE 被 try ... catch 捕获 lib.php 中有语法错误
	require_once __DIR__ . '/lib.php';
} catch (\Exception $exception) {
	echo var_export($exception, true) . PHP_EOL;
} catch (\Error $error) {
	echo var_export($error, true) . PHP_EOL;
}

echo "run finished" . PHP_EOL;