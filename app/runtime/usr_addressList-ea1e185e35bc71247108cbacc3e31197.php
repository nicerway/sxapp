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
		<script type="text/javascript" src="/style/js/jquery.js"></script>
		<style>
			.choice ul li div{width: 70%;margin-right: 0;}
		</style>
	</head>

	<body style="background: #F4F4F4;">
		<div class="topnav" style="color: #000000;border-bottom: 8px solid #F4F4F4;height: 65px;text-align: left;padding-left: 10%;">
			<a href="javascript:window.history.back()" style="padding-top: 1px;"><img src="/style/img/r_03.jpg" style="margin-top: 16px;height: 25px;" /> </a>
			<span>选择收货地址</span>
			<a href="#" style="left: 85%;line-height: 60px;color: #333;font-size: 0.36rem;">管理</a>
		</div>

		<div class="addadress clr">
			<a href="#" class="fl"><img src="/style/img/adr_03.png" />新增收货地址</a>
			<a href="#" class="fr"><img src="/style/img/x.png" /></a>
		</div>

		<div class="choice ">
			<ul>
				<li class="choicey clr">
					<div class="fl">
						<p>安徽省合肥市蜀山区高新区天波路天波...</p>
						<span>张三&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;先生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12345678910</span>
					</div>
					<a class="fr"><img src="/style/img/add_03.png" style="height: 1.3rem;margin-top: 0.1rem;" /></a>
				</li>
				<li class="clr">
					<div class="fl">
						<p>安徽省合肥市蜀山区高新区天波路天波...</p>
						<span>张三&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;先生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12345678910</span>
					</div>
					<a class="fr"><img src="/style/img/add_03.png" style="height: 1.3rem;margin-top: 0.1rem;" /></a>
				</li>
			</ul>
		</div>
<script>
	$(document).ready(function() {
	var add, reduce, num, num_txt;
	add = $(".J_jia"); //添加数量
	reduce = $(".J_jian"); //减少数量
	num = ""; //数量初始值
	num_txt = $(".num"); //接受数量的文本框
	//var num_val=num_txt.val();//给文本框附上初始值

	/*添加数量的方法*/
	add.click(function() {
		num = $(".num").val();
		num++;
		num_txt.val(num);
		//ajax代码可以放这里传递到数据库实时改变总价
	});

	/*减少数量的方法*/
	reduce.click(function() {
		//如果文本框的值大于0才执行减去方法
		num = $(".num").val();
		if(num > 0) {
			//并且当文本框的值为1的时候，减去后文本框直接清空值，不显示0
			if(num == 1) {
				num--;
				num_txt.val("");
			}
			//否则就执行减减方法
			else {
				num--;
				num_txt.val(num);
			}

		}
	});
})

</script>
	</body>
</html>
