<?php
namespace Admin\Controller;

class TestController extends AdminController {
    public function _initialize(){
        parent::_initialize();
    }
    //空操作
    public function _empty(){
        header("HTTP/1.0 404 Not Found");
        $this->display('Public:404');
    }
    public function index(){
	    $exceptionFile =  C('TMPL_EXCEPTION_FILE',null,THINK_PATH.'Tpl/think_exception.tpl');
	    include $exceptionFile;
    }
}