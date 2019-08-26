<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends BaseController{
    public function lst(){
        $about=D('about');
        $abouts=$about->select();
        $this->assign('abouts',$abouts);
        $this->display();
    }

    public function add(){
        $about=D('about');

        if (IS_POST) {
            $data['ab_title']=I('ab_title');
            $data['ab_pic'] = I('ab_pic');
            $data['ab_content']=I('ab_content');
            $data['time']=time();
//            dump($data);
//            die();
            if ($_FILES['ab_pic']['tmp_name']!='') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath  =     './Upl+256oads/'; // 设置附件上传（子）目录
                $upload->rootPath  =     './'; // 设置附件上传根目录

                $info=$upload->uploadOne($_FILES['ab_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['ab_pic']=$info['savepath'].$info['savename'];//article_pic 为数据库字段


                }
            }
//            dump($data);die();
            if ($about->create($data)) {
                if ($about->add()) {
                    $this->success('新增关于页面成功', U(lst));
                }else{
                    $this->error('新增关于页面失败');
                }
            }else{
                $this->error($about->getError());
            }
            return;
        }
        $this->display();
    }

    public function edit(){
        $about=D('about');

        if (IS_POST) {
            $data['ab_id']=I('ab_id');
            $data['ab_title']=I('ab_title');
            $data['ab_pic'] = I('ab_pic');
            $data['ab_content']=I('ab_content');
            $data['time']=time();
//            dump($data);
//            die();
            if ($_FILES['ab_pic']['tmp_name']!='') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath  =     './Upl+256oads/'; // 设置附件上传（子）目录
                $upload->rootPath  =     './'; // 设置附件上传根目录

                $info=$upload->uploadOne($_FILES['ab_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['ab_pic']=$info['savepath'].$info['savename'];//article_pic 为数据库字段


                }
            }
//            dump($data);die();
            if ($about->create($data)) {
                if ($about->save()) {
                    $this->success('修改关于页面成功', U(lst));
                }else{
                    $this->error('修改关于页面失败');
                }
            }else{
                $this->error($about->getError());
            }
            return;
        }

        $aboutid=I('id');
        $abouts=$about->find($aboutid);
        $this->assign('abouts',$abouts);

        $this->display();
    }
    public function del(){
        $about=D('about');
        if ($about->delete(I('id'))) {
            $this->success("删除关于页面成功", U(lst));
        }else{
            $this->error('删除关于页面失败');
        }
    }

}
