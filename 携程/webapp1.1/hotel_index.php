<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		<i class="c_logo"></i>携程
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	
	<div class="search_form">
		<ul>
			<li><a href="###">入住城市</a></li>
			<li class="option_date">
				<a href="###">
					<strong>入住</strong>
					<div class="date_year"><span>2012</span>年</div>
					<date><em>10</em>月<em>18</em>日</date>
				</a>
				<a href="###">
					<strong>退房</strong>
					<div class="date_year"><span>2012</span>年</div>
					<date><em>10</em>月<em>26</em>日</date>
				</a>
			</li>
			<li class="option_grade">
				<a href="###" class="dropdown_select">酒店级别</a>
				<select>
					<option>不限</option>
					<option>五星级/豪华</option>
					<option>四星级/高档</option>
					<option>三星级/舒适</option>
					<option>二星级以下/经济</option>
				</select>
			</li>
			<li><a href="###">行政区/商圈/地铁/酒店名</a></li>
		</ul>
		<input type="submit" value="搜　索" />
	</div>
	
	<footer class="appbar_3">
		<a href="hotel_map.php"><span class="icon_nearby">nearby</span></a>
		<a href="myctrip.php"><span class="icon_user">ctrip</span></a>
		<a href="tel:10106666"><span class="icon_phone">phone</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
	
	<!--- 滑动层：日历 --->
	<div style="position:absolute;position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,0.7);z-index:901;visibility:hidden;"></div>
	<div id="shim" style="visibility:hidden;"></div>
	<div class="layer_slide" style="z-index:902;visibility:hidden;">
		<div class="layer_title"><a href="###" class="c_back"></a>入住日期</div>
		<div class="calendar">
			<div class="calendar_month">
				<a href="###">上一月</a>
				<h3>十月 2012</h3>
				<a href="###">下一月</a>
			</div>
			<table class="calendar_day">
				<tr>
					<th class="weekend">日</th>
					<th>一</th>
					<th>二</th>
					<th>三</th>
					<th>四</th>
					<th>五</th>
					<th class="weekend">六</th>
				</tr>
			</table>
			<table class="calendar_day">
				<tr>
					<?php for($i=0; $i<4; $i++) { ?>
					<td><a href="###" class="day_no"></a></td>
					<?php } ?>
					<?php for($i=0; $i<31; $i++) { ?>
					<td><a href="###"<?php if($i==7) echo(' class="day_today"'); if($i==13) echo(' class="day_selected"'); if($i<13) echo(' class="day_invalid"'); ?>><?php echo($i+1); ?></a></td>
					<?php if(($i+1)%7==3) echo('</tr><tr>'); ?>
					<?php } ?>
				</tr>
			</table>
		</div>
	</div>
	<!--- 滑动层：入住城市 --->
	<div class="layer_slide" style="height:384px;z-index:902;visibility:hidden;">
		<div class="layer_title"><a href="###" class="c_back"></a>入住城市</div>
		<div class="city_search">
			<input type="text" placeholder="请输入城市名称" />
			<input type="button" value="确定" class="btn_confirm" />
		</div>
		<div class="city_all">
			<ul class="city_tab">
				<li><a href="###" class="current">热门城市</a></li>
				<li><a href="###">ABCD</a></li>
				<li><a href="###">EFGHJ</a></li>
				<li><a href="###">KLMN</a></li>
				<li><a href="###">PQRSTW</a></li>
				<li><a href="###">XYZ</a></li>
			</ul>
			<ul class="city_list">
				<li>
					<?php for($i=0; $i<10; $i++){ ?>
					<a href="###">北京</a>
					<a href="###">上海</a>
					<a href="###">天津</a>
					<a href="###">哈尔滨</a>
					<a href="###">青岛</a>
					<a href="###">伊金霍洛旗</a>
					<a href="###">南京</a>
					<?php } ?>
				</li>
			</ul>
		</div>
	</div>
	<!--- 滑动层：关键字 --->
	<div class="layer_slide" style="height:384px;z-index:902;visibility:hidden;">
		<div class="layer_title"><a href="###" class="c_back"></a>关键字</div>
		<div class="city_search">
			<input type="text" placeholder="请输入关键字" />
			<input type="button" value="确定" class="btn_confirm" />
		</div>
		<div class="city_all">
			<ul class="city_tab">
				<li><a href="###">行政区</a></li>
				<li><a href="###" class="current">商圈</a></li>
				<li><a href="###">地铁</a></li>
			</ul>
			<ul class="city_list city_area">
				<li>
					<?php for($i=0; $i<10; $i++){ ?>
					<a href="###">浦东新国际博览中心</a>
					<a href="###">虹桥地区</a>
					<a href="###">八万人体育场地区</a>
					<a href="###">徐家汇地区</a>
					<a href="###">浦东陆家嘴金融贸易区</a>
					<a href="###">光大会展中心</a>
					<a href="###">宝钢工业园区</a>
					<?php } ?>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
