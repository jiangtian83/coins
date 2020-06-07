<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/7
 * Time: 下午3:27
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

error_reporting(-1);
ini_set('display_errors', 1);

set_error_handler(function(){
	echo "error handler execute";
}, E_ALL);

set_exception_handler(function(){
	echo "exception handler execute";
});

register_shutdown_function(function(){
	echo "shutdown function execute";
});

try{
	0$a;
}catch(exception $e){
	echo "catch exception";
}finally{
	echo "finally ";
}