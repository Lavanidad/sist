<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>list</title>
		
		<!-- style.css -->
		<link rel="stylesheet" href="<?php echo (SITE_PUBLIC); ?>/home/css/listpage.css">

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
	<body style="background-color:#EBEDF0">

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
									<div class="row-2-navigation navigation">
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
			<div class="row col-md-12">
				<div class=" monthnews">
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

		<div class="container">
			<!-- Footer 页脚 -->
			<div class="row footer col-md-12">

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
		</div>

		<!-- LOGO RippleJS -->
		<script src="<?php echo (SITE_PUBLIC); ?>/home/js/ripple-config.js"></script>
		<script src="<?php echo (SITE_PUBLIC); ?>/home/js/TweenMax.min.js"></script>
		<!-- /LOGO RippleJS -->
	</body>
</html>