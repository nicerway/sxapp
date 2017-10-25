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
	</head>

	<body>
		<div class="container">
			<div class="topnav"style="background: #46c01b;">
				<a href="javascript:window.history.back()" style="padding-top: 1px;"><img src="/style/img/return_03.png" height="60" /> </a>
				<span style="color: #fff;">找回密码</span>
			</div>
			<div class="register form">
				<ul>
					<li style="background-image: url(/style/img/loging_03.png);background-repeat: no-repeat;background-position: 10% center;">
						<input name="telphone" type="tel" placeholder="请输入手机号"/>
					</li>
					<li style="background-image: url(/style/img/loging_07.png);background-repeat: no-repeat;background-position: 10% center;">
						<input name="yzm" type="number" placeholder="请输入验证码"/>
						<button onclick="return model(this,'<?php echo U('yzm/lookupSendSMS');?>')">获取验证码</button>
					</li>
					<li style="background-image: url(/style/img/loging_10.png);background-repeat: no-repeat;background-position: 10% center;">
						<input class="yanma" name="password" type="text" placeholder="请输入新密码"/>
						<a id="ym" class="fr"><img src="/style/img/ym_03.png" height="15"/></a>
					</li>
				</ul>
				<a onclick="return model(this,'<?php echo $this->_vars['request'];?>')" id="regBtn">确认</a>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/public/tools/js/jquery.js"></script>
<script type="text/javascript" src="/public/tools/js/alert.min.js"></script>
	<script src="/style/js/js.js"></script>
</html>
