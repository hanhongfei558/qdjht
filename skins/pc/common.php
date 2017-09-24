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

<body class="page page-id-839 page-parent page-template page-template-services-template-php">	
	<div id="container" class="clearfix">    	
		<div id="top-container-inner">
			<div id="glow-bg-inner">
				<!-- BEGIN OF MAINMENU -->
				<div id="menu-wrapper">
					<div id="menu-container">
						<div id="logo">
							<a href="/"><img src="<?php echo $tag['path.skin']; ?>images/LogoParteSuperior_V6.png" alt=""/></a>
						</div>
						<div id="mainmenu">
							<ul id="menu" class="">
								<li><a href="<?php echo $tag['path.root']; ?>/">首页</a></li>
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
				<div id="header-container-inner">
					<!--..lang_sel_listt-->
					<div id="pagetitle-wrapper" class="wrapper">
						<h1><?php echo sys_menu_info() ?></h1>
						<div id="breadcumb">
							<div class="breadcrumbs"><?php nav_location('>>','首页') //当前位置调用的标签?></div>
						</div>
					</div><!--#pagetitle-wrapper-->
				</div><!--#header-container-inner-->
				<!-- END OF HEADER -->
				<!-- BEGIN OF CONTENT -->
				<div id="conten">
					<div class="maincontent2-left clearfix">
						<div class="left-fixed">
							<h2 class="toptit">产品展厅</h2>
							<div class="inner">
								<ul class="left-menu">
									<?php echo nav_sub(3,0)?>
								</ul>
							</div>
						</div>
					</div>
					<div class="maincontent2-inner clearfix">
						<?php sys_parts() //内容调用的标签?>
					</div>
					<!-- END OF CONTENT -->
					<script>
					jQuery(document).ready(function(){
						var documentHeight = $(".maincontent2-inner").height()+50;
						var marginTop = 0;
						console.log('documentHeight:'+documentHeight);
						$(window).scroll(function() {
							var scrollTop = $(window).scrollTop();
							console.log('scrollTop:'+scrollTop);
							if(scrollTop > 219){
								if(scrollTop <= documentHeight){
									marginTop = scrollTop - 219;
								}
								$(".maincontent2-left").css({'margin-top':marginTop});
							}else{
								$(".maincontent2-left").css({'margin-top':0});
							}
						});
					});
					</script>
						
					<div id="bottom-wrapper">        
						<div id="bottom-content">
							<div class="logofooter-column">
								<img src="<?php echo $tag['path.skin']; ?>images/LogoParteSuperior_V6.png" alt="" class="footerlogo"/>
							</div>
						 <?php nav_main(1) //主导航调用的标签?>
						</div><!--#bottom-content-->
						<div id="slideshow-shadow" class="lastt"></div>
					</div><!--#bottom-wrapper-->           
					
					<?php include(dirname(__FILE__).DIRECTORY_SEPARATOR.'footer.php');?>
				</div><!--#conten-->
			</div><!--#glow-bg-->
		</div><!--#top-container-->
	</div><!--#container-->      
</body>
</html>