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
  		
	<!-- 轮播图 -->
	<div class="wrap" id="wrap">
		<ul id="pic">
			<li><img src="/zhuoyue/Public/home/images/1.jpg" /></li>
			<li><img src="/zhuoyue/Public/home/images/2.jpg" /></li>
			<li><img src="/zhuoyue/Public/home/images/3.jpg" /></li>
			<li><img src="/zhuoyue/Public/home/images/4.jpg" /></li>
		</ul>
		<ol id="list">
			<li class="on" value="1"></li>
			<li value="2"></li>
			<li value="3"></li>
			<li value="4"></li>
		</ol>			
	</div>
	<!-- content -->
	<div class="bd1 clears">
		<!-- 最新产品 -->
		<div class="bd1-top">
			<h2>最新产品 ></h2>
			<hr/>
			<p>天光以独特的灯具设计、领先的光学应用，倾力打造道路照明解决方案，营造舒适健康、品味非凡的光环境，让您的生活简单，愉悦，更添乐趣。</p>
			<hr/>
		</div>
		<div class="bd1-left">
			<a href="#"><img src="/zhuoyue/Public/home/images/01.jpg" /></a>
			<div class="displays1">更多</div>
		</div>
		<div class="bd1-right">
			<div class="bd1-right-top">
				<div class="bd1-right-top1">
					<a href="#"><img src="/zhuoyue/Public/home/images/02.jpg" /></a>
					<div class="displays2">更多</div>
				</div>
				<div class="bd1-right-top2">
					<a href="#"><img src="/zhuoyue/Public/home/images/03.jpg" /></a>
					<div class="displays2">更多</div>
				</div>
			</div>
			<div class="bd1-right-bottom">
				<div class="bd1-right-bottom1">
					<a href="#"><img src="/zhuoyue/Public/home/images/04.jpg" /></a>
					<div class="displays2">更多</div>
				</div>
				<div class="bd1-right-bottom2">
					<a href="#"><img src="/zhuoyue/Public/home/images/05.jpg" /></a>
					<div class="displays2">更多</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 热销产品 -->
	<div class="bd2 clears">
  		<div class="bd2-top">
			<h2>热销产品 ></h2>
			<hr/>
			<p>天光以卓越的设计、研发、制造、服务能力所打造的商用照明系列，能为客户提供专业的整体解决方案，满足全方位商业需求。</p>
			<hr/>
		</div>
		<div class="bd2-bottom">
        	<div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/01.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="#" class="btn">查看更多</a>
                </div>
            </div>
            <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/02.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="#" class="btn">查看更多</a>
                </div>
            </div>
            <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/03.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="#" class="btn">查看更多</a>
                </div>
            </div>
            <div class="port effect">
            	<div class="image-box">
                	<img src="/zhuoyue/Public/home/images/04.jpg" />
                </div>
                <div class="text-desc">
                	<h3>高杆灯</h3>
                    <p>查看详细信息</p>
                	<a href="#" class="btn">查看更多</a>
                </div>
            </div>
		</div>
	</div>
	<!--猜你喜欢-->
	<div class="bd3 clears">
  		<div class="bd3-top">
			<h2>猜你喜欢 ></h2>
			<hr/>
			<p>天光以卓越的设计、研发、制造、服务能力所打造的商用照明系列，能为客户提供专业的整体解决方案，满足全方位商业需求。</p>
			<hr/>
		</div>
		<div id="demo">
			<div id="indemo">
				<div id="demo1">
					<a href="#"><img src="/zhuoyue/Public/home/images/01.jpg" alt="#" /></a>
					<a href="#"><img src="/zhuoyue/Public/home/images/02.jpg" alt="#" /></a>
					<a href="#"><img src="/zhuoyue/Public/home/images/03.jpg" alt="#" /></a>
					<a href="#"><img src="/zhuoyue/Public/home/images/04.jpg" alt="#" /></a>
					<a href="#"><img src="/zhuoyue/Public/home/images/05.jpg" alt="#" /></a>
				</div>
				<div id="demo2"></div>
			</div>
		</div>
	</div>
	<!-- body底部 -->
	<div class="page_footer">
		<table cellpadding="0" cellspacing="0" border="0" class="quick_entry clears">
			<tr>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_1.png" /><br>
						<span>严格质量保证</span><br>
						<p>QUALITY ASSURANCE</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />	
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_2.png" /><br>
						<span>精湛研发制造</span><br>
						<p>RESEARCH MANUFACTURE</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_3.png" /><br>
						<span>专业设计团队</span><br>
						<p>DESIGN TEAM</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_4.png" /><br>
						<span>系统服务体系</span><br>
						<p>SERVICE SYSTEM</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
				<td>
					<div>
						<img src="/zhuoyue/Public/home/images/footer_logo_5.png" /><br>
						<span>全程技术支持</span><br>
						<p>TECHNICAL SUPPORT</p><br>
						<img src="/zhuoyue/Public/home/images/footer_logo_0.jpg" />
					</div>
				</td>
			</tr>
		</table>
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