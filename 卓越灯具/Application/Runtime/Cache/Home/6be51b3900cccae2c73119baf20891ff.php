<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
	  	<meta charset="utf-8">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/style.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/font-awesome.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/conceal.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/intro.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/message.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/news.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/detail.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/product.css">
<link rel="stylesheet" href="/zhuoyue/Public/home/css/show.css">
<script src="/zhuoyue/Public/home/js/jquery.min.js"></script>
<script src="/zhuoyue/Public/home/js/wrap.js"></script>
<script src="/zhuoyue/Public/home/js/slide.js"></script>
	  	<title>卓越灯具</title>
  	</head>
  	<body>
  		<!-- 头部 -->
<div class="header clears">
	<div class="header-left">
		<img src="/zhuoyue/Public/home/images/logo.png" />
	</div>
	<div class="header-right">
		<img src="/zhuoyue/Public/home/images/phone.png" />
		<p>全国服务热线</p>
		<span>17796911177</span>
	</div>
</div>
<!-- 导航栏 -->
<div class="top">
	<div class="nav">
		<ul class="bar"> 
		    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li> 
		    <li><a href="<?php echo U('Home/Intro/intro');?>">走进卓越</a>
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/Intro/intro');?>">公司简介</a></li>
					<li><a href="<?php echo U('Home/Intro/intro');?>">宣传视频</a></li>
					<li><a href="<?php echo U('Home/Intro/intro');?>">公司荣誉</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/Product/product');?>">产品展示</a>
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/Product/product');?>">高中杆灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">道路灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">华灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">景观灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">庭院灯系列</a></li>
					<li><a href="<?php echo U('Home/Product/product');?>">太阳能灯系列</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/News/news');?>">新闻中心</a> 
		    	<ul class="sub">
					<li><a href="<?php echo U('Home/News/news');?>">公司新闻</a></li>
					<li><a href="<?php echo U('Home/News/news');?>">行业动态</a></li>
					<li><a href="<?php echo U('Home/News/news');?>">常见问题</a></li>
		    	</ul>
		    </li>
		    <li><a href="<?php echo U('Home/Example/example');?>">成功案例</a></li>
		    <li><a href="<?php echo U('Home/Message/message');?>">在线留言</a></li> 
		    <li><a href="<?php echo U('Home/Contact/contact');?>">联系我们</a></li>
		</ul>
	</div>
	<div class="search">
		<input type="text" name="search" placeholder="搜索关键词..."><a href="#"><i class="fa fa-search"></i></a>
	</div>
</div>
<!--右侧悬浮菜单-->
<div class="slide">
	<ul class="icon">
		<a href="javascript:scrollTo(0,0);"><li class="up" title="顶部"></li></a>
		<li class="qq"></li>
		<li class="tel"></li>
		<li class="wx"></li>
		<a href="javascript:scrollTo(9999,9999);"><li class="down" title="底部"></li></a>
	</ul>
	<ul class="info">
		<li class="qq">
			<p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes" target="_blank">在线咨询</a></p>
		</li>
		<li class="tel">
			<p>咨询热线：<br>177-9691-1177<br>客服qq：<br>123456789</p>
		</li>
		<li class="wx">
			<div class="img"><img src="/zhuoyue/Public/home/images/1441956938.png" /></div>
		</li>
	</ul>
</div>
<div id="btn" class="index_cy"></div>
  			  	
	<!--content-->
	<div class="content clears">
		<!--面包屑-->
  		<div class="bread">
			<ol>
			    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
			    <li class="active">新闻中心</li>
			</ol>
		</div>
  		<!--广告图-->
  		<div class="news_bannar">
			<img src="/zhuoyue/Public/home/images/2.jpg" alt="">
  		</div>
  		<div class="new_content">
  			<!-- 最新产品 -->
			<div class="new_con_top">
				<div>					
					<div class="program clears">						
						<div class="bre_action">
							<a href="#"><li>公司新闻</li>
							<span></span></a>
						</div>
						<div>
							<li><a href="#">行业动态</a></li>
							<span></span>
						</div>
						<div>
							<li><a href="#">常见问题</a></li>		
							<span></span>
						</div>						
					</div>
				</div>
			</div>
			<div class="new_con_bottom clears">
				<div class="bottom_out">
					<div class="new_img">
						<img src="/zhuoyue/Public/home/images/03.jpg" alt="">
					</div>
					<div class="new_text">
						<h3><a href="<?php echo U('Home/Detail/detail');?>">精准扶贫进展如火如荼，天光用光添薄力</a></h3>
						<h5>时间：2017年04月14日</h5>
						<p>4月7日，天光照明新农村房屋灯光改造，暨爱心公益捐赠仪式在云南省楚雄市苍岭镇举行。在这次捐赠活动中，天光向楚雄市苍岭镇捐助了灯管、灯泡、吸顶灯、台灯等共计7725个灯具，总价值近63万人民币。</p>
						<span><a href="<?php echo U('Home/Detail/detail');?>">详情>></a></span>
					</div>
				</div>
				<div class="bottom_out">
					<div class="new_img">
						<img src="/zhuoyue/Public/home/images/03.jpg" alt="">
					</div>
					<div class="new_text">
						<h3><a href="<?php echo U('Home/Detail/detail');?>">精准扶贫进展如火如荼，天光用光添薄力</a></h3>
						<h5>时间：2017年04月14日</h5>
						<p>4月7日，天光照明新农村房屋灯光改造，暨爱心公益捐赠仪式在云南省楚雄市苍岭镇举行。在这次捐赠活动中，天光向楚雄市苍岭镇捐助了灯管、灯泡、吸顶灯、台灯等共计7725个灯具，总价值近63万人民币。</p>
						<span><a href="<?php echo U('Home/Detail/detail');?>">详情>></a></span>
					</div>
				</div>
				<div class="bottom_out">
					<div class="new_img">
						<img src="/zhuoyue/Public/home/images/03.jpg" alt="">
					</div>
					<div class="new_text">
						<h3><a href="<?php echo U('Home/Detail/detail');?>">精准扶贫进展如火如荼，天光用光添薄力</a></h3>
						<h5>时间：2017年04月14日</h5>
						<p>4月7日，天光照明新农村房屋灯光改造，暨爱心公益捐赠仪式在云南省楚雄市苍岭镇举行。在这次捐赠活动中，天光向楚雄市苍岭镇捐助了灯管、灯泡、吸顶灯、台灯等共计7725个灯具，总价值近63万人民币。</p>
						<span><a href="<?php echo U('Home/Detail/detail');?>">详情>></a></span>
					</div>
				</div>
				<div class="bottom_out">
					<div class="new_img">
						<img src="/zhuoyue/Public/home/images/03.jpg" alt="">
					</div>
					<div class="new_text">
						<h3><a href="<?php echo U('Home/Detail/detail');?>">精准扶贫进展如火如荼，天光用光添薄力</a></h3>
						<h5>时间：2017年04月14日</h5>
						<p>4月7日，天光照明新农村房屋灯光改造，暨爱心公益捐赠仪式在云南省楚雄市苍岭镇举行。在这次捐赠活动中，天光向楚雄市苍岭镇捐助了灯管、灯泡、吸顶灯、台灯等共计7725个灯具，总价值近63万人民币。</p>
						<span><a href="<?php echo U('Home/Detail/detail');?>">详情>></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="footer">
	<div class="footer-left">
		<div class="btn">
			<a href="<?php echo U('Home/Sitemap/sitemap');?>"><i class="fa fa-map-signs"></i>&nbsp&nbsp网站地图</a>
		</div>
		<ul>
			<li style="border:0px"><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
			<li><a href="<?php echo U('Home/Secret/secret');?>">隐私声明</a></li>
			<li><a href="<?php echo U('Home/Conceal/conceal');?>">法律条款</a></li>
			<li><a href="<?php echo U('Home/Index/index');?>">友情链接</a></li>
		</ul>
	</div>
	<div class="wechat">
		<img src="/zhuoyue/Public/home/images/wechat.jpg" />
		<h5>官方微信</h5>
	</div>
	<div class="wechat">
		<img src="/zhuoyue/Public/home/images/wechat.jpg" />
		<h5>官方微信</h5>
	</div>
	<div class="contact">
		<a><i class="fa fa-phone-square"></i>&nbsp&nbsp17796911177</a>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes"><i class="fa fa-user"></i>&nbsp&nbsp在线客服</a>
		<a><i class="fa fa-envelope"></i>&nbsp&nbsp客服邮箱<p>kefu@example.com</p></a>
	</div>
	<div class="clears"></div>
	<p class="p">  2017 by 新乐市天光灯具有限公司&nbsp&nbsp&nbsp&nbsp经营许可证编号：冀000000</p>
</div>
  	</body>
</html>