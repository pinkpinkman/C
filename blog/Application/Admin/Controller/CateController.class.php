<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller{
    public function lst(){
        $cate=D('cate');
        $cates=$cate->select();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function add(){
        $cate = D('cate');

        if (IS_POST) {
            $data['cate_name'] = I('cate_name');
//            dump($data);
//            die();
            if ($cate->create($data)) {
                if ($cate->add()) {
                    $this->success('新增栏目成功', U(lst));
                }else{
                    $this->error('新增栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $this->display();
    }

    public function del(){
        $cate=D('cate');
        if ($cate->delete(I('id'))) {
            $this->success("删除栏目成功", U(lst));
        }else{
            $this->error('删除栏目失败');
        }
    }

    public function edit(){
        $cate = D('cate');

        if (IS_POST) {
            $data['cate_id'] = I('cate_id');
            $data['cate_name'] = I('cate_name');
//            dump($data);
//            die();
            if ($cate->create($data)) {
                if ($cate->save()) {
                    $this->success('修改栏目成功', U(lst));
                }else{
                    $this->error('修改栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cateid=I('id');
        $caters=$cate->find($cateid);
        $this->assign('caters',$caters);
        $this->display();
    }
}
