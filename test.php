<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/7
 * Time: 下午3:27
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

// https://segmentfault.com/a/1190000014926703
error_reporting(0);
ini_set('display_errors', 0);

set_error_handler(function(){
	echo "error handler execute";
}, E_ALL);

set_exception_handler(function(){
	echo "exception handler execute";
});

//register_shutdown_function(function(){
//	echo "shutdown function execute";
//});

### 1)
try{
	require_once __DIR__ . "/another.php";
}catch(Exception $e){
	echo "catch exception";
}catch (Error $error) {
	var_export($error);
}finally{
	echo "finally ";
}

### 2)
//echo 'i lost semicolon operator'