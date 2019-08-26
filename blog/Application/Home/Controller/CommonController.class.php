<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->nav();
        $this->pop();
    }

    public function nav()
    {
        $cate = D('cate');
        $navers = $cate->select();
        $this->assign('navers', $navers);

        // $this->display();
    }

    public function pop(){
      $article=D('article');
      $where['a_rem']=1;
      $arem=$article->where($where)->limit(3)->select();
      $this->assign('arem',$arem);
      }
}
