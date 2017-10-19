<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8" />
		<title><?php echo $GLOBALS['system_seotitle'];?></title>
		<meta name="keywords" content="<?php echo $GLOBALS['system_keywords'];?>">
		<meta name="description" content="<?php echo $GLOBALS['system_description'];?>">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<link rel="stylesheet" href="/style/css/style.css" />
		<script type="text/javascript" src="/style/js/rem.js"></script>
		<script type="text/javascript" src="/style/js/jquery.js" ></script>
		<script type="text/javascript" src="/style/js/js.js" ></script>
		<style>
			.yk-nav-pills li{width: 2.2rem;}
			.yk-nav .yk-nav-pills li a{padding: 0 !important;}
		</style>
	</head>

	<body style="background: #f4f4f4;">
		<div class="container">
			<div class="topnav">
				<a href="javascript:window.history.back()" style="padding-top: 1px;"><img src="/style/img/return.png" height="60" /> </a>
				<span>商品详情</span>
			</div>
			<div class="product">
				<div>
					<img src="/style/img/listxq_03.jpg" />
					<div class="name"><?php echo $GLOBALS['view']->goods_name;?>&nbsp;<?php echo $GLOBALS['view']->goods_name_added;?></div>
					<div class="price">￥<em><?php echo $GLOBALS['view']->market_price;?></em></div>
				</div>
				<div style="padding-bottom: 10px;padding-top: 5px">
					<div class="format">规格<span><?php echo $GLOBALS['view']->size;?></span></div>
					<div class="num">数量
						<div class="num_box">
								<a class="J_jian">-</a>
								<label><input type="text" class="num" value="0"/></label>
								<a class="J_jia">+</a>
						</div>
						<input type="hidden" id="d_stock" value="<?php echo $GLOBALS['view']->stock;?>">
					</div>
				</div>
				<div class="check clr">
					<?php echo $this->_vars['stockInfo'];?>
					<p class="fr">截止中午12点之前可选择当天派送，超过中午12点延迟一天</p>
				</div>
			</div>
			<link id="headercss" href="css/mheader.css" type="text/css" rel="stylesheet">
			<div class="yk-nav yk-pro" id="mheader_nav">
				<div>大家都在买</div>
				<div class="yk-nav-box">
					<div class="yk-nav-list" id="mheader_navbox" style="overflow: hidden;height: 3.58rem;">
						<ul class="yk-nav-pills" style="width: 878px; transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, 0px) translateZ(0px);">
							<li>
								<div class="seckill-item-img bdr-r">
									<a href="#" class="seckill-new-link J_ping">
										<img src="/style/img/listxq_07.jpg" />
									</a>
									<p>青椒</p>
								</div>
								<div class="seckill-item-price clr">
									<span class="fl">￥9.90</span>
									<a class="fr"><img src="/style/img/add.jpg" width="40" /></a>
								</div>
							</li>
							<li>
								<div class="seckill-item-img bdr-r">
									<a href="#" class="seckill-new-link J_ping">
										<img src="/style/img/listxq_07.jpg" />
									</a>
									<p>青椒</p>
								</div>
								<div class="seckill-item-price clr">
									<span class="fl">￥9.90</span>
									<a class="fr"><img src="/style/img/add.jpg" width="40" /></a>
								</div>
							</li>

							<li>
								<div class="seckill-item-img bdr-r">
									<a href="#" class="seckill-new-link J_ping">
										<img src="/style/img/listxq_07.jpg" />
									</a>
									<p>青椒</p>
								</div>
								<div class="seckill-item-price clr">
									<span class="fl">￥9.90</span>
									<a class="fr"><img src="/style/img/add.jpg" width="40" /></a>
								</div>
							</li>

							<li>
								<div class="seckill-item-img bdr-r">
									<a href="#" class="seckill-new-link J_ping">
										<img src="/style/img/listxq_07.jpg" />
									</a>
									<p>青椒</p>
								</div>
								<div class="seckill-item-price clr">
									<span class="fl">￥9.90</span>
									<a class="fr"><img src="/style/img/add.jpg" width="40" /></a>
								</div>
							</li>

							<li>
								<div class="seckill-item-img bdr-r">
									<a href="#" class="seckill-new-link J_ping">
										<img src="/style/img/listxq_07.jpg" />
									</a>
									<p>青椒</p>
								</div>
								<div class="seckill-item-price clr">
									<span class="fl">￥9.90</span>
									<a class="fr"><img src="/style/img/add.jpg" width="40" /></a>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="js/iscroll.js" ></script>
			<script type="text/javascript" src="js/mheader.js" ></script>
			<div class="recommend" >
				<div class="details">
					<div style="border-bottom: 1px solid #dddddd;">
						<span>继续拖动,查看图文详情</span>
					</div>
					<div><?php echo $GLOBALS['view']->content;?></div>
				</div>

			</div>
			<div style="height: 65px;"></div>
			<div class="shanchu shanchu1">
			<label>
				<a class="xuanzhong fl">
					<img src="/style/img/c_03.png" />
				    <span class="snum">1</span>
				</a>
			</label>
			<a class="fr">加入购物车</a>

		</div>

		</div>
	</body>
	<script type="text/javascript" src="/style/js/jquery.js"></script>
	<script type="text/javascript">
	$(function () {
		//加的效果
		$(".adds").click(function () {
			$(this).prevAll().css("display", "inline-block");
			var n = $(this).prev().text();
			var num = parseInt(n) + 1;
			if (num == 0) { return; }
			$(this).prev().text(num);
			var danjia = $(this).next().text();//获取单价
			var a = $("#totalpriceshow").html();//获取当前所选总价
			$("#totalpriceshow").html((a * 1 + danjia * 1).toFixed(2));//计算当前所选总价

			var nm = $("#totalcountshow").html();//获取数量
			$("#totalcountshow").html(nm*1+1);
			jss();//<span style='font-family: Arial, Helvetica, sans-serif;'></span>   改变按钮样式
		});
		//减的效果
		$(".minus").click(function () {
			var n = $(this).next().text();
			var num = parseInt(n) - 1;

			$(this).next().text(num);//减1

			var danjia = $(this).nextAll(".price").text();//获取单价
			var a = $("#totalpriceshow").html();//获取当前所选总价
			$("#totalpriceshow").html((a * 1 - danjia * 1).toFixed(2));//计算当前所选总价

			//如果数量小于或等于0则隐藏减号和数量
			if (num <= 0) {
				$(this).next().css("display", "none");
				$(this).css("display", "none");
				jss();//改变按钮样式
				return
			}
			var nm = $("#totalcountshow").html();//获取数量
			$("#totalcountshow").html(nm * 1 - 1);
		});
		function jss() {
			var m = $("#totalcountshow").html();
			if (m > 0) {
				$(".right").find("a").removeClass("disable");
			} else {
			   $(".right").find("a").addClass("disable");
			}
		};

	});
	</script>
</html>