<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function article(){
       // $cate=D('cate');
       // $cateid=2;
       // $cateids=$cate->find($cateid);
       // $this->assign('cateids', $cateids);

       $this->display();
    }
}
