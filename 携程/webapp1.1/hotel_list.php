<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		上海酒店列表
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="hotel_title">
		入住：2012-10-18&emsp;退房：2012-10-26
	</div>
	<div class="h_nodata" style="display:none;">很抱歉，没有找到相关内容。</div>
	<ul class="search_list">
		<?php for($i=0; $i<10; $i++){ ?>
		<li>
			<a href="hotel_detail_room.php">
				<img src="http://images4.c-ctrip.com/target/hotel/78000/77663/187f24262c5740b1ab9bddeedd6caeb3_100_75.jpg" width="80" height="60" class="h_pic" />
				<h3 class="h_title">上海虹桥迎宾馆测试宽度测试宽度测试宽度测试宽度</h3>
				<div class="h_data">
					<div class="h_price"><dfn>&yen;</dfn><strong>35800</strong>起</div>
					<span class="star4"></span>
					<span class="h_score">4.6分</span>
				</div>
				<div class="h_addr">浦东陆家嘴金融贸易区</div>
			</a>
		</li>
		<?php } ?>
	</ul>
	<div class="h_loading">请稍候...</div>
	
	<footer class="appbar_4">
		<a href="hotel_index.php"><span class="icon_search">search</span></a>
		<a href="hotel_map.php"><span class="icon_map">map</span></a>
		<a href="###"><span class="icon_sort">sort</span></a>
		<a href="###"><span class="icon_filter">filter</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
	
	<div style="position:absolute;position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,0.7);z-index:901;visibility:;"></div>
	<div id="shim" style="visibility:hidden;"></div>
	<!--- 排序的弹出层 --->
	<div class="layer_slide" style="z-index:902;visibility:hidden;">
		<ul class="layer_filter">
			<li><a href="###">携程推荐</a></li>
			<li><a href="###">价格从高到低</a></li>
			<li><a href="###">价格从低到高</a></li>
			<li><a href="###">星级从高到低</a></li>
			<li><a href="###">星级从低到高</a></li>
			<li><a href="###">点评分从高到低</a></li>
			<li><a href="###">点评分从低到高</a></li>
		</ul>
	</div>
	<!--- 筛选的弹出层 --->
	<div class="layer_slide" style="z-index:902;visibility:;">
		<div class="filter_all">
			<ul class="filter_tab">
				<li><a href="###" class="current">价格</a></li>
				<li><a href="###">星级</a></li>
			</ul>
			<ul class="filter_list">
				<li><a href="###">全部</a></li>
				<li><a href="###">二星级及以下/经济</a></li>
				<li><a href="###">三星级/舒适</a></li>
				<li><a href="###">四星级/高档</a></li>
				<li><a href="###">五星级/豪华</a></li>
			</ul>
			<ul class="filter_list" style="display:none;">
				<li><a href="###">不限</a></li>
				<li><a href="###">&yen;150以下</a></li>
				<li><a href="###">&yen;150-300</a></li>
				<li><a href="###">&yen;301-450</a></li>
				<li><a href="###">&yen;451-600</a></li>
				<li><a href="###">&yen;600以上</a></li>
			</ul>
			<input type="submit" value="确　定" />
		</div>
	</div>
	
	<!--- 全局loading --->
	<div class="c_loading bounceoutup" style="z-index:902;visibility:hidden;">努力加载中，请稍候…</div>
	
</body>
</html>
