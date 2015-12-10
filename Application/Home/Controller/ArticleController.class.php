<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller
{
    public function article()
    {
        $id = $_GET['id'];
        $getArticle =  M('news')->where("id='".$id."'")->select();
        $this->assign('outputArticle', $getArticle);

        $getArticleInfo = M('news')->where("id='".$id."'")->field('title,source,add_time,viewnum')->select();//id='$id'
        $this->assign('outputArticleInfo',$getArticleInfo);

        $this->display();
    }
}