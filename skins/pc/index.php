<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" lang="en-US">
<head>
<title><?php echo $tag['seo.title']; ?></title>
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/style.css" type="text/css" media="screen" />
<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/style-ie7.css" type="text/css" media="screen" />
<![endif]-->
<script type='text/javascript' src='<?php echo $tag['path.skin']; ?>js/jquery.js?ver=1.7.2'></script>
<script type='text/javascript' src='<?php echo $tag['path.skin']; ?>js/functions.js?ver=3.4.1'></script>
</head>
<body class="home blog">
<div id="container" class="clearfix">
	<div id="top-container">
		<div id="glow-bg">
			<!-- BEGIN OF MAINMENU -->
			<div id="menu-wrapper">
				<div id="menu-container">
					<div id="logo">
						<a href="<?php echo $tag['path.root']; ?>/"><img src="<?php echo $tag['path.skin']; ?>images/LogoParteSuperior_V6.png" alt=""/></a>
					</div>
					<div id="mainmenu">
						<ul id="menu" class="">
							<li>
								<a href="<?php echo $tag['path.root']; ?>/">首页</a>
							</li>
							<?php nav_main() //主导航调用的标签?>
						</ul>
					</div>
					<div id="login-wrapper">
						<a class="popup-logout" href="<?php echo sys_href(6); ?>"><span>联系我们</span></a>
					</div>
				</div>
			</div>
			<!-- END OF MAINMENU -->
			<!-- END OF HEADER -->
			<!-- BEGIN OF HEADER -->

			<div id="header-container">
				<!--..lang_sel_listt-->
				<div id="slideshow-wrapper" class="wrapper">
					<?php doc_focus(1,4,0,0,0,true,'ordering',0) ?>
				</div>
			</div>
			<!--#header-container-->
			<!-- BEGIN OF CONTENT -->
			<div id="conten">
				<div id="home" class="maincontent-inner">
					<div id="productlist" class="clearfix">
						<h3>推荐产品<a href="/<?php echo sys_menu_info('menuName',false,3)?>/" class="more">>>更多</a></h3>
						<ul>
							<?php doc_product('3',8,0,16,0,0,true,false,'ordering',0)?>
						</ul>
					</div>
					<div class="conten-box clearfix">
						<div class="conten-box-left">
							<h3>公司介绍</h3>
							<?php doc_article('24',1,0,0,0,0,true,true,'id',0)?>
						</div>
						<div class="conten-box-right">
							<h3>新闻资讯<a href="/<?php echo sys_menu_info('menuName',false,2)?>/" class="more">>>更多</a></h3>
							<?php doc_list('2',8,0,30,0,0,true,false,'id',0)?>
						</div>
					</div>
				</div>
				<!--.maincontent-->
			</div>
			<!--#content-->
			<script>
				jQuery(document).ready(function(){
					/*iconos*/
					jQuery('.home-content h4').each(function(){
						var hh = jQuery(this).height();
						if(hh > 22){
							jQuery(this).css('background-position','0px 12px')
						}	
					})
				});	
			</script>
			<div id="bottom-wrapper">
				<div id="bottom-content">
					<div class="logofooter-column">
						<img src="<?php echo $tag['path.skin']; ?>images/LogoParteSuperior_V6.png" alt="" class="footerlogo"/>
					</div>
					<?php nav_main(1) //主导航调用的标签?>
				</div>
				<!--#bottom-content-->
				<div id="slideshow-shadow" class="lastt"></div>
			</div>
			<!--#bottom-wrapper-->
			
			<?php include(dirname(__FILE__).DIRECTORY_SEPARATOR.'footer.php');?>
		</div>
		<!--#glow-bg-->
	</div>
	<!--#top-container-->
</div>
<!--#container-->
</body>
</html>