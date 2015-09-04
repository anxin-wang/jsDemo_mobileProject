<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		个人信息
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="box_account">
		<ul>
			<li>用户名：<span>测试账号</span></li>
			<li>等&emsp;级：<span>普通用户</span></li>
		</ul>
	</div>
	<ul class="book_item">
		<li>
			<label>姓名</label>
			<input type="text" />
		</li>
		<li>
			<label>性别</label>
			<label class="label_radio"><input type="radio" name="gender" /> 男</label>
			<label class="label_radio"><input type="radio" name="gender" /> 女</label>
		</li>
		<li>
			<label>生日</label>
			<input type="date" />
		</li>
		<li>
			<label>手机号</label>
			<input type="tel" />
		</li>
		<li>
			<label>Email</label>
			<input type="email" placeholder="a@b.c" />
		</li>
		<li>
			<label>详细地址</label>
			<input type="text" />
		</li>
		<li>
			<label>邮编</label>
			<input type="number" />
		</li>
	</ul>
	<div class="btn_box">
		<input type="submit" onclick="location.href='myctrip.php'" value="保 存" />
	</div>
</body>
</html>
