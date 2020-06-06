<?php
/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/6/6
 * Time: 上午9:53
 * E-Mail: tibertwater@gmail.com
 * QQ: 284053253
 */

//git webhook 自动部署脚本
$requestBody = file_get_contents("php://input"); //该方法可以接收post传过来的json字符串
if (empty($requestBody)) { //判断数据是不是空
	die('send fail');
}
$content = json_decode($requestBody, true); //数据转换
//若是主分支且提交数大于0
if ($content['ref'] == 'refs/heads/master') {
	//PHP函数执行git命令
	$res = shell_exec('cd /home/wwwroot/tmp/coins
           && git reset --hard origin/master && git clean -f
           && git pull 2>&1 && git checkout master');
	
	$file = '/home/wwwroot/tmp/coins/'; //旧目录
	$newFile = '/home/wwwroot/coins'; //新目录
	file_copy($file, $newFile);
	
	$res_log = '-------------------------------------------' . PHP_EOL;
	$res_log.= ' 在' . date('Y-m-d H:i:s') . '向' . $content['repository']['name']
		. '项目的' . $content['ref'] . '分支push' . $res . PHP_EOL;
	//将每次拉取信息追加写入到日志里
	file_put_contents("/home/wwwroot/tmp/logs/git-webhook.log", $res_log, FILE_APPEND);
}

function file_copy($src, $dst) {
	$dir = opendir($src);
	@mkdir($dst);
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