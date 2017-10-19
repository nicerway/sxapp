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
		<div class="topnav" style="border-bottom: 1px solid #ECECEC;">
			<a href="javascript:window.history.back()" style="padding-top: 1px;"><img src="/style/img/return.png" height="60" /> </a>
			<span>新品需求</span>
		</div>
		<form class="proposal form" onsubmit="return false;">
			<div style="padding: 0.2rem 0 0.1rem 0;border-bottom: 1px solid #d8d8d8;">
				<textarea name="proposal" style="resize:none" rows="3" cols="5" placeholder="您有什么意见或建议，快来告诉我吧..."></textarea>
				<div style="background-image: url(/style/img/flie_03.png);background-repeat: no-repeat;background-position: 3% top;background-size: auto 1.5rem;line-height: 1.5rem;">
					<input onchange="previewImage(this,'imageViewBox','imageView')" name="img" type="file" class="filer" />
					<label style="color: #999999;font-size: 0.34rem;">添加图片说明</label>
					<div style="text-align:center" id="imageViewBox"></div>
				</div>
			</div>

			<div style="margin-top: 0.32rem;border-top: 1px solid #d8d8d8;border-bottom: 1px solid #d8d8d8;">
				<label>联系电话</label>
				<input name="telphone" type="tel" style="width: 5rem;" placeholder="选填，便于我们联系你" />
			</div>

			<input onclick="return model(this,'<?php echo $this->_vars['needRequest'];?>')" class="submit" type="submit" value="提交" />
		</form>
	</body>
	<script type="text/javascript" src="/public/tools/js/jquery.js"></script>
<script type="text/javascript" src="/public/tools/js/kwjAlert.min.js"></script>
	<script>
		//图片上传预览    IE是用了滤镜。
		function previewImage(file,id,mid)
		{
			var div = document.getElementById(id);
			if (file.files && file.files[0])
			{
				div.innerHTML ='<img id='+mid+' class="sctps">';

				var img = document.getElementById(mid);
				var reader = new FileReader();
				reader.onload = function(evt){
					src = evt.target.result
					img.src = src;
				}
				reader.readAsDataURL(file.files[0]);
			}
			// $("#"+mid).css("width","184px");
			// $("#"+mid).css("height","184px");
		}
	</script>
</html>