<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>sist.xujc.com</title>

		<!-- style.css -->
		<link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/style.css">

		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/bootstrap.css">

		<!-- 可选的Bootstrap主题文件 -->
		<link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/bootstrap-theme.css">

		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="<?php echo (SITE_PUBLIC); ?>/home/js/jquery.min.js" charset="utf-8"></script>

		<!-- Bootstrap 核心 JavaScript 文件 -->
		<script src="<?php echo (SITE_PUBLIC); ?>/home/js/bootstrap.min.js"></script>

		<!-- Ripple CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo (SITE_PUBLIC); ?>/home/css/ripple-config.css" />
		<!--[if IE]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
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
						<img src="<?php echo (SITE_PUBLIC); ?>/home/img/logo-wb.png"/>
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
						<div class="modal-dialog" style="width:400px;margin-top:150px;">
							<div class="modal-content" style="border-radius:0px">
								<div class="modal-body">
									<div class="navigation">
										<a href="#" class="navigation-list navigation-list-1">Weather</a>
										<a href="#" class="navigation-list navigation-list-2">Google</a>
										<a href="#" class="navigation-list navigation-list-3">Google</a>
										<a href="#" class="navigation-list navigation-list-4">Google</a>
										<a href="#" class="navigation-list navigation-list-5">Google</a>
										<a href="#" class="navigation-list navigation-list-6">Google</a>
										<a href="#" class="navigation-list navigation-list-7">Google</a>
										<a href="#" class="navigation-list navigation-list-8">Google</a>
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
			
				<!-- line-1 第一列 -->
				<div class="col-md-3">
				
					<!-- Speciality list 专业列表 -->
					<div class="row-2-block speciality" style="overflow: hidden;">
					
						<!-- 院长寄语-->
						<div class="" >
							<div class="col-md-4" style="background-color:#FFFFFF" >
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
							</div>
							<div class="col-md-4" style="background-color:#FFFFFF">
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
							</div>
							<div class="col-md-4" style="background-color:#FFFFFF">
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
							</div>
						</div>
						<!-- /院长寄语-->
						
						<!-- 专业-->
						<div class="row">
							<div class="col-md-4 col-md-offset-1">
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
							</div>
							<div class="col-md-4 col-md-offset-2">
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
								<li onclick="window.open('http://www.weibo.com')" class="speciality-list"><img src="<?php echo (SITE_PUBLIC); ?>/home/img/weibo.png" style="width:55px;height:60px">官方微博</li>
							</div>
						</div>
						<!-- /专业-->
					</div>
					<!-- /Speciality list 专业列表 -->
					
					<!-- Lost Property 失物招领-->
					<div class="row-2-block lost">
						<a href="#" class="list-group-item row-2-block-headline" style="background-color: #F7F7F7;border-color:#F7F7F7">失物招领</a>
						<a href="#" class="list-group-item-list">致全体学生的一封信</a>
						<a href="#" class="list-group-item-list">信院喊你下馆子活动通知</a>
						<a href="#" class="list-group-item-list">信息科学与技术学院卫生评比通知</a>
						<a href="#" class="list-group-item-list">第2周信院学生会督导部课堂考勤情况汇总表</a>
						<a href="#" class="list-group-item-list">厦大嘉庚信息科学与技术学院第三届学生组织部长名单公示</a>
						<a href="#" class="list-group-item-list">2015-2016学年第一学期信息科学与技术学院注册注意事项</a>
						<a href="#" class="list-group-item-list">第2周信院学生会督导部课堂考勤情况汇总表</a>
					</div>
					<!-- /Lost Property 失物招领-->
				</div>
				<!-- /line-1 -->
				
				<!-- line-2 -->
				<div class="col-md-3">
				
					<!-- ClassNews 班级动态 -->
					<div class="row-2-block news">
						<a href="#" class="list-group-item row-2-block-headline" >班级动态</a>
						<?php if(is_array($outputClassNews)): $i = 0; $__LIST__ = $outputClassNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ClassNews): $mod = ($i % 2 );++$i;?><a href="<?php echo U('article/article', 'id='.$ClassNews['id']);?>" class="list-group-item-list"><?php echo ($ClassNews['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<!-- /News 班级新闻 -->
					
					<!-- Announcement 公告 -->
					<div class="row-2-block announcement">
						<a href="#" class="list-group-item row-2-block-headline" >通知公告</a>
						<?php if(is_array($outputAnnouncement)): $i = 0; $__LIST__ = $outputAnnouncement;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Announcement): $mod = ($i % 2 );++$i;?><a href="<?php echo U('article/article', 'id='.$Announcement['id']);?>" class="list-group-item-list"><?php echo ($Announcement['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>

				</div>
				<!-- /line-2 -->

				<!-- line-3 -->
				<div class="col-md-3">
					<!-- Picture 图片轮播 -->
					<div class="row-2-block">

						<!-- 平滑轮播（Carousel） -->
						<div id="myCarousel" class="carousel slide">

							<!-- 轮播（Carousel）指标 -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

							<!-- 轮播（Carousel）项目 -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel1.jpg" alt="First slide">
									<div class="carousel-caption">First slide</div>
								</div>
								<div class="item">
									<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel2.jpg" alt="Second slide">
									<div class="carousel-caption">Second slide</div>
								</div>
								<div class="item">
									<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel3.jpg" alt="Third slide">
									<div class="carousel-caption">Third slide</div>
								</div>
							</div>

							<!-- 轮播（Carousel）导航
							<a class="carousel-control left" href="#myCarousel"
								data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel"
								data-slide="next">&rsaquo;</a>
							-->
						</div>
						<!-- /平滑轮播（Carousel） -->
					</div>
					<!-- /Picture 图片轮播 -->

					<!-- Partynews 党团 -->
					<div class="row-2-block party">
						<a href="#" class="list-group-item row-2-block-headline">党团资讯</a>
						<?php if(is_array($outputPartyNews)): $i = 0; $__LIST__ = $outputPartyNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$PartyNews): $mod = ($i % 2 );++$i;?><a href="<?php echo U('article/article', 'id='.$PartyNews['id']);?>" class="list-group-item-list"><?php echo ($PartyNews['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					
				</div>
				
				<!-- line-4 -->
				<div class="col-md-3">
				
					<!-- Navigation 导航天气 -->
					<div class="row-2-navigation navigation">
						<a href="#" class="navigation-list navigation-list-1">Headline</a>
						<a href="#" class="navigation-list navigation-list-2">Google</a>
						<a href="#" class="navigation-list navigation-list-3">Google</a>
						<a href="#" class="navigation-list navigation-list-4">Google</a>
						<a href="#" class="navigation-list navigation-list-5">Google</a>
						<a href="#" class="navigation-list navigation-list-6">Google</a>
						<a href="#" class="navigation-list navigation-list-7">Google</a>
						<a href="#" class="navigation-list navigation-list-8">Google</a>
					</div>
					
					<!-- Calendar 日历 -->
					<div class="row-2-block calendar">
					<p>Calendar</p>
					</div>
				</div>
			</div>
			<!-- /Matrix 主体 -->
			
			<!-- Horizontal Roll 横行滚动图片 -->
			<div id="roll"> 
				<ul class="rollul1"> 
					<li class="rollli1"> 
			      		<ul class="rollul2"> 
							<li><img src="<?php echo (SITE_PUBLIC); ?>/home/img/BigCarousel1.jpg"/></li>
							<li><img src="<?php echo (SITE_PUBLIC); ?>/home/img/BigCarousel2.jpg"/></li>
							<li><img src="<?php echo (SITE_PUBLIC); ?>/home/img/BigCarousel3.jpg"/></li>
							<li><img src="<?php echo (SITE_PUBLIC); ?>/home/img/BigCarousel4.jpg"/></li>
						</ul> 
					<li class="rollli2"></li>
					</li>
				</ul> 
			</div> 
			
			<!-- Footer 页脚 -->
			<div class="row footer">
			
				<!-- 信院简介 -->
				<div class="col-md-4 col-md-offset-1">
				<h3>信院简介</h3>
				<p  class="footer-introduction">厦门大学嘉庚学院信息科学与技术学院<br>是一个很神奇的学院<br>很神奇的学院<br>神奇的学院<br>学院<br>院</p>
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
				<p  class="footer-contact">地址：福建漳州招商局经济开发区厦门大学嘉庚学院<br>邮编：363100<br>电话：0596-6288506<br>邮箱：sist@xujc.com<br>微博：sist@xujc.com<br>微信：sist@xujc.com</p>
				</div>
			</div>
			<!-- /Footer 页脚 -->

		<!-- 横向滚动JS -->
		<script type="text/javascript">
			var _speed=10;
			var _roll = $("#roll");
			var _rollli1 = $(".rollli1");
			var _rollli2 = $(".rollli2");
			_rollli2.html(_rollli1.html());
			function Marquee(){
				if(_roll.scrollLeft() >= _rollli1.width())
					_roll.scrollLeft(0);
				else{
					_roll.scrollLeft(_roll.scrollLeft()+1);
				}
			}
			$(function(){
				//两秒后调用
				var sliding=setInterval(Marquee,_speed)
				_roll.hover(function() {
					//鼠标移动DIV上停止
					clearInterval(sliding);
				},function(){
					//离开继续调用
					sliding=setInterval(Marquee,_speed);
				});
			});

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-20541395-2']);
			  _gaq.push(['_trackPageview']);
			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
		</script>
		<!-- /横向滚动JS-->

		<!-- 平滑轮播自动播放 -->
		<script>
			$("#myCarousel").carousel('cycle');
		</script>
		<!-- /平滑轮播自动播放 -->
		
		<!-- 3D轮播JS -->
		<script type="text/javascript" src="<?php echo (SITE_PUBLIC); ?>/home/js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navOptions = $( '#nav-options' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
								slicebox.play();
								$navArrows.show();
								$navOptions.show();
								$shadow.show();

							},
							orientation : 'h',
							cuboidsCount : 3
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
		<!-- /3D轮播 -->
		
		<!-- GreenSock Power : Required for Demo -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
		<script src="<?php echo (SITE_PUBLIC); ?>/home/js/ripple-config.js"></script>
		<!-- /GreenSock Power : Required for Demo -->

	</body>
</html>