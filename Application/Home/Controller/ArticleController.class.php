<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller
{
    public function article()
    {
        $id = $_GET['id'];
        //$article =  M('news')->where("id='".$id."'")->find();
        $article =  M('news')->where("id='".$id."'")->select();
        //dump($article);
        $this->assign('article', $article);
        $this->display();
    }
}