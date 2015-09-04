<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		酒店详情
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="comment_score">
		<div class="score_total"><strong>4.2</strong>分</div>
		<div class="score_detail">
			<span>卫生4.0</span><span>服务4.2</span><span>设施4.4</span><span>环境4.3</span>
		</div>
	</div>
	<ul class="comment_list">
		<?php for($i=0; $i<3; $i++){ ?>
		<li>
			<p>位置非常中心，逛街很方便，但很难找，位于一条单选的街道上。早餐略显局促，但很好吃。</p>
			<div class="h_post">1368163**** 2012-7-26</div>
		</li>
		<li>
			<p>
				定的998元特价的大床房，到店时被升级到了套房。<br />前台和新荣记共享一个大厅，很小，只有一个人打理，但也显得别有风情。<br />预订时另外一个客人的日期填错了，前台也迅速和携程联系，修改了订单，很不错。<br />房间真的可以用美轮美奂形容啊，老牌的风格，现代的设施，浴缸非常大，还有曾经贝公馆遗留下的小浴池，用玻璃镶嵌着展示了。<br />酒店挨着恒隆广场，喧闹的同仁路，却闹中取静，在四周的高楼大厦，灯红酒绿中，有股时光 交错的感觉。<br />酒店整体服务还是可以的，但和五星级酒店还是有差距。比如晚上的room service,居然只有意大利面和比萨。<br />而前台居然不能帮助订餐，这简直匪夷所思。即使是住汉庭，也可以让前台打电话订周围餐厅的餐啊。<br />所有服务都不错，除了晚上值班那个带眼镜的女服务员，一副爱答不理的样子，态度非常冷漠。这种态度和服务精神，恐怕不适合在服务行业做。
			</p>
			<div class="h_post">1368163**** 2012-7-26</div>
		</li>
		<?php } ?>
	</ul>
	
	<footer class="appbar_5">
		<a href="hotel_detail_room.php"><span class="icon_room">room</span></a>
		<a href="hotel_detail_intro.php"><span class="icon_intro">intro</span></a>
		<a href="hotel_detail_comment.php" class="current"><span class="icon_comment">comment</span></a>
		<a href="hotel_detail_pic.php"><span class="icon_pic">pic</span></a>
		<a href="hotel_detail_map.php"><span class="icon_map">map</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
</body>
</html>
