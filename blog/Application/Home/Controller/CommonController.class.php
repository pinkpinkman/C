<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->nav();
    }

    public function nav()
    {
        $cate = D('cate');
        $navers = $cate->select();
        $this->assign('navers', $navers);

//        $this->display();
    }
}