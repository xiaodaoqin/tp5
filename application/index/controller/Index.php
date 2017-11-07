<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Index extends controller
{
    public function index()
    {
    	$data=db('user')->where('id>0')->select();
    	// dump($list);
    	// $data=Db::table('tp_user')->select();
    	$this->assign('data',$data);
    	return $this->fetch();
    }

}
