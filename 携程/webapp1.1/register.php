<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		<i class="c_logo"></i>携程
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<ul class="register">
		<li class="icon_account focus"><!--- 当用户名和密码的<input>获取到焦点时，父级<li>加样式focus --->
			<input type="text" placeholder="手机号作为您的登录账号" />
		</li>
		<li class="icon_pwd"><!--- 错误提示给input加样式error_input，错误文字喷在value里 --->
			<input type="password" placeholder="密码为6位以上字符" class="error_input" />
		</li>
		<li class="icon_pwd">
			<input type="password" placeholder="重复密码" />
		</li>
	</ul>
	<div class="verif">
		<p>点击<strong>获取验证码</strong>，您会收到一条短信，其中包含了6位数的验证码，请输入</p>
		<input type="text" placeholder="验证码" />
		<input type="button" value="获取验证码" />
	</div>
	<div class="btn_box">
		<input type="submit" value="立即注册" />
	</div>
</body>
</html>
