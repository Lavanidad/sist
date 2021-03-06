<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Article</title>

        <!-- style.css -->
        <link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/article.css">

        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/bootstrap.css">

        <!-- 可选的Bootstrap主题文件 -->
        <link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/bootstrap-theme.css">

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="<?php echo (SITE_PUBLIC); ?>/home/js/jquery.min.js"></script>

        <!-- Bootstrap 核心 JavaScript 文件 -->
        <script src="<?php echo (SITE_PUBLIC); ?>/home/js/bootstrap.min.js"></script>

        <!-- Ripple CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo (SITE_PUBLIC); ?>/home/css/ripple-config.css">

        <!--[if IE]>
        <script src="<?php echo (SITE_PUBLIC); ?>/home/js/iehtml5.js"></script>
        <![endif]-->
    </head>

    <body style="background-color:#F3F3F3">
        <!-- Header-->
        <div class="header">
            <div class="container header-container" >
                <!-- LOGO&Search -->
                <div class="row row-1">

                    <!-- LOGO -->
                    <div class="col-md-6" >
                        <a href="<?php echo U('index/index');?>"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/logo-wb.png"/></a>
                    </div>
                    <!-- /End LOGO -->

                    <!-- Search 搜索框 -->
                    <div class="col-md-3 col-md-offset-2 "id="search" >
                        <form class="navbar-left " id="search-form" role="search">
                            <input type="text" id="search-input" placeholder="搜索其实很简单">
                            <input type="button" value=" " class="search-button">
                        </form>
                    </div>
                    <!-- /End Search 搜索框 -->

                    <!-- 按钮触发模态框 -->
                    <div class="col-md-1" id="popup-button" data-toggle="modal" data-target="#myModal" >
                        <span id="hamburger-button" ></span>
                    </div>

                    <!-- 弹出框（Modal） -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width:1000px;margin-top:100px;border-radius:0px;">
                            <div class="modal-content">
                                <div class="modal-body row">
                                    <div class="col-md-4">
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="<?php echo U('list/show_list');?>" class="popup-list ">Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="<?php echo U('list/show_list');?>" class="popup-list ">Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                    </div>
                                    <div class="col-md-4">
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="<?php echo U('list/show_list');?>" class="popup-list ">Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                        <li class="popup-list "><a href="#" >Google</a></li>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /End 弹出框 -->
                </div>
                <!-- /End LOGO&Search -->
            </div>
            <!-- /End container-->
        </div>
        <!-- /End Header -->

        <div class="container">

            <!-- Matrix 主体 -->
            <div class="row row-2">
                <div class="col-md-12">
                    <div class=" ">
                    </div>

                    <div id="article_content">
                        <div id="ArticleInfo">
                            <?php if(is_array($outputArticleInfo)): $i = 0; $__LIST__ = $outputArticleInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ArticleInfo): $mod = ($i % 2 );++$i;?><p class="article_title"><?php echo ($ArticleInfo['title']); ?></p>
                                    <p class="article_info"><?php echo ($ArticleInfo['add_time']); ?></p>
                                    <p class="article_info"><?php echo ($ArticleInfo['source']); ?></p>
                                    <p class="article_info"><?php echo ($ArticleInfo['viewnum']); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>

                        <div id="ArticleContent">
                            <p><?php echo ($outputArticle[0]['content']); ?></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Matrix 主体 -->



            <!-- Footer 页脚 -->
            <div class="row" id="footer">

                <!-- 信院简介 -->
                <div class="col-md-4 col-md-offset-1">
                    <h3>信院简介</h3>
                    <p  class="footer_introduction">厦门大学嘉庚学院信息科学与技术学院<br>是一个很神奇的学院<br>很神奇的学院<br>神奇的学院<br>学院<br>院</p>
                </div>

                <!-- LOGO -->
                <div class="col-md-3 ">

                    <!-- SVG Sprite -->
                    <div style="height: 0; width: 0; position: absolute; visibility: hidden;" aria-hidden="true">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false">
                            <symbol id="ripply-scott" viewBox="0 0 100 100">
                                <circle id="ripple-shape" cx="1" cy="1" r="1" />
                            </symbol>
                        </svg>
                    </div>
                    <!-- /end sprite -->

                    <!-- button component -->
                    <button id="js-ripple-btn" class="button styl-material">
                        LOGO
                        <svg class="ripple-obj" id="js-ripple">
                            <use height="100" width="100" xlink:href="#ripply-scott" class="js-ripple"></use>
                        </svg>
                    </button>
                    <!-- /end button component -->
                </div>
                <!-- /LOGO -->

                <!-- 联系我们 -->
                <div class="col-md-4">
                    <h3>联系我们</h3>
                    <p  class="footer_contact">地址：福建漳州招商局经济开发区厦门大学嘉庚学院<br>邮编：363100<br>电话：0596-6288506<br>邮箱：sist@xujc.com<br>微博：sist@xujc.com<br>微信：sist@xujc.com</p>
                </div>
            </div>
            <!-- /Footer 页脚 -->
        </div>


        <!-- LOGO RippleJS -->
        <script src="<?php echo (SITE_PUBLIC); ?>/home/js/ripple-config.js"></script>
        <script src="<?php echo (SITE_PUBLIC); ?>/home/js/TweenMax.min.js"></script>
        <!-- /LOGO RippleJS -->


    </body>
</html>