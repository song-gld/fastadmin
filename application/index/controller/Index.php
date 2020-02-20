<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        return $this->view->fetch();
    }    

    public function test()
    {
        $cate = model('category')->all();
        //$result = cate::count();
        $this->assign('cate',$cate);
        //dump($cate); die;
        return $this->fetch();
    }

}
