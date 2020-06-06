<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/6
 * Time: 上午9:53
 * E-Mail: tibertwater@gmail.com
 * QQ: 284053253
 */

ini_set('display_errors', 'On');
error_reporting(E_ALL);
//git webhook 自动部署脚本
$requestBody = file_get_contents("php://input"); //该方法可以接收post传过来的json字符串
defined("LOG_DIR") or define("LOG_DIR", "/home/wwwroot/coins/App/Runtime/Logs/Git/");
defined("SRC_DIR") or define("SRC_DIR", "/tmp/coins");
defined("DES_DIR") or define("DES_DIR", "/home/wwwroot/coins");
if (empty($requestBody)) { //判断数据是不是空
	die('send fail');
}

$content = json_decode($requestBody, true); //数据转换
if (!$content) parse_str(urldecode($requestBody), $content);
$content = json_decode($content['payload'], true);

//若是主分支且提交数大于0
if ($content['ref'] == 'refs/heads/master') {
	file_put_contents(LOG_DIR . "git-webhook.log", "****写入日志****" . PHP_EOL, FILE_APPEND);
	//PHP函数执行git命令
	$bool = chdir(SRC_DIR);
	if ($bool === false) {
		die("Could not chdir()");
	}
	//$re = shell_exec("ls -al");
	$res = shell_exec('git reset --hard origin/master && git clean -f && git pull 2>&1 && git checkout master');
	file_put_contents(LOG_DIR . "git-content.log", $res . PHP_EOL, FILE_APPEND);
	file_copy(SRC_DIR, DES_DIR);
	
	$res_log.= ' 在' . date('Y-m-d H:i:s') . '向' . $content['repository']['name']
		. '项目的' . $content['ref'] . '分支push' . $res . PHP_EOL;
	//将每次拉取信息追加写入到日志里
	file_put_contents(LOG_DIR . "git-webhook.log", $res_log, FILE_APPEND);
}

function file_copy($src, $dst) {
	$dir = opendir($src);
	if (!file_exists($dst)) mkdir($dst);
	while (false !== ($file = readdir($dir))) {
		if (($file != '.') && ($file != '..') && $file != '.git') {
			if (is_dir($src . '/' . $file)) {
				file_copy($src . '/' . $file, $dst . '/' . $file);
			} else {
				copy($src . '/' . $file, $dst . '/' . $file);
			}
		}
	}
	closedir($dir);
}