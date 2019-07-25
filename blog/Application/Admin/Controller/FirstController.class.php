<?php
namespace Admin\Controller;
use Think\Controller;
class FirstController extends Controller{
    public function lst(){
        $first=D('first');
        $firsts=$first->select();
        $this->assign('firsts',$firsts);
        $this->display();
    }

    public function add(){
        $first=D('first');

        if (IS_POST) {
            $data['f_title']=I('f_title');
            $data['f_pic'] = I('f_pic');
            $data['f_content']=I('f_content');
            $data['time']=time();
//            dump($data);
//            die();
            if ($_FILES['f_pic']['tmp_name']!='') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath  =     './Upl+256oads/'; // 设置附件上传（子）目录
                $upload->rootPath  =     './'; // 设置附件上传根目录

                $info=$upload->uploadOne($_FILES['f_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['f_pic']=$info['savepath'].$info['savename'];//article_pic 为数据库字段


                }
            }
//            dump($data);die();
            if ($first->create($data)) {
                if ($first->add()) {
                    $this->success('新增首页文章成功', U(lst));
                }else{
                    $this->error('新增首页文章失败');
                }
            }else{
                $this->error($first->getError());
            }
            return;
        }
        $this->display();
    }

    public function edit(){
        $first=D('first');

        if (IS_POST) {
            $data['f_id']=I('f_id');
            $data['f_title']=I('f_title');
            $data['f_pic'] = I('f_pic');
            $data['f_content']=I('f_content');
            $data['time']=time();
//            dump($data);
//            die();
            if ($_FILES['f_pic']['tmp_name']!='') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath  =     './Upl+256oads/'; // 设置附件上传（子）目录
                $upload->rootPath  =     './'; // 设置附件上传根目录

                $info=$upload->uploadOne($_FILES['f_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['f_pic']=$info['savepath'].$info['savename'];//article_pic 为数据库字段


                }
            }
//            dump($data);die();
            if ($first->create($data)) {
                if ($first->save()) {
                    $this->success('修改首页文章成功', U(lst));
                }else{
                    $this->error('修改首页文章失败');
                }
            }else{
                $this->error($first->getError());
            }
            return;
        }

        $firstid=I('id');
        $firsts=$first->find($firstid);
        $this->assign('firsts',$firsts);

        $this->display();
    }
    public function del(){
        $first=D('first');
        if ($first->delete(I('id'))) {
            $this->success("删除首页文章成功", U(lst));
        }else{
            $this->error('删除首页文章失败');
        }
    }

}
