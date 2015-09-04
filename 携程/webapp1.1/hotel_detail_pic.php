<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		酒店详情
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="pic_list">
		<?php for($i=0; $i<23; $i++){ ?>
		<img src="http://images4.c-ctrip.com/target/hotel/78000/77663/187f24262c5740b1ab9bddeedd6caeb3_100_75.jpg" width="100" height="75" />
		<?php } ?>
	</div>
	
	<footer class="appbar_5">
		<a href="hotel_detail_room.php"><span class="icon_room">room</span></a>
		<a href="hotel_detail_intro.php"><span class="icon_intro">intro</span></a>
		<a href="hotel_detail_comment.php"><span class="icon_comment">comment</span></a>
		<a href="hotel_detail_pic.php" class="current"><span class="icon_pic">pic</span></a>
		<a href="hotel_detail_map.php"><span class="icon_map">map</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
</body>
</html>
