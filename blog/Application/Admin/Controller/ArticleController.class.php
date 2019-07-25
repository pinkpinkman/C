<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller
{
    public function lst()
    {
        $article=D('article');
        $articles=$article->select();
        $this->assign('articles',$articles);
        $this->display();
    }

    public function add()
    {
        $article=D('article');

        if (IS_POST) {
            $data['a_title']=I('a_title');
            $data['a_id']=I('a_id');
            $data['a_rem']=I('a_rem');
            $data['a_content']=I['a_content'];
            $data['time']=time();
//            dump($data);
//            die();
            if ($_FILES['a_pic']['tmp_name']!='') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath = './Upl+256oads/'; // 设置附件上传（子）目录
                $upload->rootPath = './'; // 设置附件上传根目录

                $info=$upload->uploadOne($_FILES['a_pic']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['a_pic']=$info['savepath'].$info['savename'];//article_pic 为数据库字段


                }
            }
//            dump($data);die();
            if ($article->create($data)) {
                if ($article->add()) {
                    $this->success('新增首页文章成功', U(lst));
                } else {
                    $this->error('新增首页文章失败');
                }
            } else {
                $this->error($article->getError());
            }
            return;
        }
        $this->display();
    }
    public function edit(){
        $article=D('article');

        if (IS_POST) {
            $data['a_title']=I('a_title');
            $data['a_id']=I('a_id');
            $data['a_rem']=I('a_rem');
            $data['a_content']=I['a_content'];
            $data['time']=time();
//            dump($data);
//            die();
            if ($_FILES['a_pic']['tmp_name']!='') {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

                $upload->savePath  =     './Upl+256oads/'; // 设置附件上传（子）目录
                $upload->rootPath  =     './'; // 设置附件上传根目录

                $info=$upload->uploadOne($_FILES['a_pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['a_pic']=$info['savepath'].$info['savename'];//article_pic 为数据库字段


                }
            }
//            dump($data);die();
            if ($article->create($data)) {
                if ($article->save()) {
                    $this->success('修改首页文章成功', U(lst));
                }else{
                    $this->error('修改首页文章失败');
                }
            }else{
                $this->error($article->getError());
            }
            return;
        }

        $articleid=I('id');
        $articles=$article->find($articleid);
        $this->assign('articles',$articles);

        $this->display();
    }
    public function del(){
        $article=D('article');
        if ($article->delete(I('id'))) {
            $this->success("删除首页文章成功", U(lst));
        }else{
            $this->error('删除首页文章失败');
        }
    }

}