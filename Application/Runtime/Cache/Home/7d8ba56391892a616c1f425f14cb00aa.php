<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>List</title>

		<!-- style.css -->
		<link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/listpage.css">

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
				<div class=" monthnews">

					<div class=" ">
					</div>

					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel2.jpg" class="col-md-3"/>
					<div class="col-md-5">
						<h2>立嘉园信梦，创青春未来</h2>
						<div class="informationn">

						</div>
						<div class="summary">
							<p>信息类专业是注重实践能力、创新能力的专业，实践能力和创新能力培养的成功与否直接关系到信息类专业人才培养的质量。我院信息类专业学生思维活跃、创新意识强。</p>
						</div>
					</div>
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel1.jpg" class="col-md-3"/>
					<div class="col-md-1 listbutton"></div>
				</div>

				<div class="monthnews">
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel2.jpg" class="col-md-3"/>
					<div class="col-md-5">
						<h2>立嘉园信梦，创青春未来</h2>
						<div class="informationn">

						</div>
						<div class="summary">
							<p>信息类专业是注重实践能力、创新能力的专业，实践能力和创新能力培养的成功与否直接关系到信息类专业人才培养的质量。我院信息类专业学生思维活跃、创新意识强。</p>
						</div>
					</div>
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel1.jpg" class="col-md-3"/>
					<div class="col-md-1 listbutton"></div>
				</div>

				<div class="monthnews">
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel2.jpg" class="col-md-3"/>
					<div class="col-md-5">
						<h2>立嘉园信梦，创青春未来</h2>
						<div class="informationn">

						</div>
						<div class="summary">
							<p>信息类专业是注重实践能力、创新能力的专业，实践能力和创新能力培养的成功与否直接关系到信息类专业人才培养的质量。我院信息类专业学生思维活跃、创新意识强。</p>
						</div>
					</div>
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel1.jpg" class="col-md-3"/>
					<div class="col-md-1 listbutton"></div>
				</div>

				<div class="monthnews">
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel2.jpg" class="col-md-3"/>
					<div class="col-md-5">
						<h2>立嘉园信梦，创青春未来</h2>
						<div class="informationn">

						</div>
						<div class="summary">
							<p>信息类专业是注重实践能力、创新能力的专业，实践能力和创新能力培养的成功与否直接关系到信息类专业人才培养的质量。我院信息类专业学生思维活跃、创新意识强。</p>
						</div>
					</div>
					<img src="<?php echo (SITE_PUBLIC); ?>/home/img/Carousel1.jpg" class="col-md-3"/>
					<div class="col-md-1 listbutton"></div>
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


	<!-- LOGO RippleJS -->
	<script src="<?php echo (SITE_PUBLIC); ?>/home/js/TweenMax.min.js"></script>
	<script src="<?php echo (SITE_PUBLIC); ?>/home/js/ripple-config.js"></script>
	<!-- /LOGO RippleJS -->

	</body>
</html>