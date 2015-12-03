<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $getClassNews = M('news')->where('sortid=2')->field('id,title')->limit(0,9)->order('id desc')->select(); //获取变量
        $this->assign('outputClassnews',$getClassNews); //输出变量
        $getAnnouncement = M('news')->where('sortid=3')->field('id,title')->limit(0,9)->order('id desc')->select();
        $this->assign('outputAnnouncement', $getAnnouncement);
        $getPartynews = M('news')->where('sortid=4')->field('id,title')->limit(0,8)->order('id desc')->select();
        $this->assign('outputPartynews',$getPartynews);

        $this->display(index);
    }
}