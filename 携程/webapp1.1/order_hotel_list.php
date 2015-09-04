<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		酒店订单
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<ul class="order_hotel_list">
		<?php for($i=0; $i<20; $i++){ ?>
		<li>
			<a href="order_hotel_detail.php">
				<div class="h_price"><dfn>&yen;</dfn><strong>35800</strong></div>
				<div class="h_order">123456878<span class="status1">（处理中）</span></div>
				<h3 class="h_title">上海虹桥迎宾馆测试宽度测试宽度测试宽度测试宽度</h3>
				<div class="h_info">日期：2012-07-25 至 2012-07-26</div>
			</a>
		</li>
		<?php } ?>
	</ul>
</body>
</html>
