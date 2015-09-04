<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		<i class="c_logo"></i>携程
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<ul class="login">
		<li class="icon_account focus"><!--- 当用户名和密码的<input>获取到焦点时，父级<li>加样式focus --->
			<input type="text" placeholder="用户名/卡号/手机号" />
		</li>
		<li class="icon_pwd"><!--- 错误提示给input加样式error_input，错误文字喷在value里 --->
			<input type="password" placeholder="密码" class="error_input" />
		</li>
		<li>
			<label for="savePwd" onclick="" class="c_check">
				<input id="savePwd" type="checkbox" />
				<span class="c_check_text">保存密码</span>
			</label>
		</li>
	</ul>
	<div class="btn_box"><input type="submit" value="登　录" /></div>
	<div class="link_register">还不是携程会员？ <a href="###">马上注册</a></div>
</body>
</html>
