<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		我的携程
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="box_account">
		<ul>
			<li>用户名：<span>测试账号</span></li>
			<li>等&emsp;级：<span>普通用户</span></li>
		</ul>
		<input type="button" onclick="location.href='account.php'" value="编辑个人信息" class="btn_confirm" />
	</div>
	<ul class="list_order">
		<li><a href="order_hotel_list.php">酒店订单</a></li>
		<!---<li><a href="###">常用旅客信息</a></li>--->
	</ul>
	
	<footer class="appbar_3">
		<a href="hotel_index.php"><span class="icon_search">search</span></a>
		<a href="hotel_map.php"><span class="icon_map">map</span></a>
		<a href="tel:10106666"><span class="icon_phone">phone</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
</body>
</html>
