<?php
namespace app\index\controller;

use think\Controller;

class Favorite extends Controller
{
	public function index(){
		$data = model('favorite')->all();
		$this->assign('data', $data);
		return $this->fetch();
	}
	public function add(){
		return 2;
	}
}