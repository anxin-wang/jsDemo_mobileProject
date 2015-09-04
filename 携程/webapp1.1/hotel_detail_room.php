<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		酒店详情
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="hotel_album">
		<img src="http://images4.c-ctrip.com/target/hotel/78000/77663/187f24262c5740b1ab9bddeedd6caeb3_300_225.jpg" width="290" height="163" />
		<div class="album_info">
			<ul class="album_slide">
				<li></li>
				<li class="slide_current"></li>
				<li></li>
			</ul>
			<div class="hotel_star">
				<span class="star4"></span>
				<span class="h_score">4.6分</span>
			</div>
		</div>
	</div>
	<div class="room_title">
		入住：2012-10-18&emsp;退房：2012-10-26
	</div>
	<ul class="room_list">
		<?php for($i=0; $i<8; $i++){ ?>
		<li>
			<a href="hotel_book.php">
				<input type="button" value="预订" />
				<h3 class="h_title">高级大床房测试宽度测试宽度测试宽度测试宽度测试宽度</h3>
				<div class="h_info">单早 大床 免费宽带</div>
				<div class="h_price"><dfn>&yen;</dfn><strong>35800</strong></div>
			</a>
		</li>
		<?php } ?>
	</ul>
	
	<footer class="appbar_5">
		<a href="hotel_detail_room.php" class="current"><span class="icon_room">room</span></a>
		<a href="hotel_detail_intro.php"><span class="icon_intro">intro</span></a>
		<a href="hotel_detail_comment.php"><span class="icon_comment">comment</span></a>
		<a href="hotel_detail_pic.php"><span class="icon_pic">pic</span></a>
		<a href="hotel_detail_map.php"><span class="icon_map">map</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
</body>
</html>
