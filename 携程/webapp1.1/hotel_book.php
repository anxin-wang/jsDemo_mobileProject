<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		订单填写
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="hotel_title">
		<img src="http://images4.c-ctrip.com/target/hotel/1000/622/60E328412CC94891B643689DB77DF108_100_75.Jpg" width="80" height="60" class="h_pic" />
		<ul class="hotel_info">
			<li>酒店：<strong>虹桥喜来登上海太平洋大饭店虹桥喜来登上海太平洋大饭店</strong></li>
			<li>房型：高级大床房</li>
			<li>日期：2012-07-20至2012-07-21</li>
		</ul>
	</div>
	<ul class="book_item">
		<li>
			<label>预订间数</label>
			<div class="room_num"><i class="num_invalid">-</i>3<i>+</i></div>
			<div class="room_price">共：<span class="h_price"><dfn>&yen;</dfn><strong>35800</strong></span></div>
		</li>
		<li>
			<label>入住人</label>
			<input type="text" />
			<input type="text" />
			<input type="text" />
			<input type="text" />
			<input type="text" />
			<input type="text" />
			<a href="###" class="link_customer">常用入住人</a>
		</li>
		<li>
			<label>手机号</label>
			<input type="tel" class="error_input" />
			<div class="error_tip">请正确填写11位手机号码</div>
		</li>
		<li>
			<label>到店时间</label>
			<span class="item_option">
				<span class="dropdown_select" style="width: 147px;">12:00-15:00</span>
				<select style="width: 154px;">
					<option>12:00-15:00</option>
					<option>12:30-15:30</option>
					<option>13:00-16:00</option>
				</select>
			</span>
		</li>
		<li>
			<textarea placeholder="更多需求"></textarea>
		</li>
	</ul>
	<div class="btn_box"><input type="submit" value="提交订单" /></div>
	
	<div style="position:absolute;position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,0.7);z-index:901;visibility:hidden;"></div>
	<div id="shim" style="visibility:hidden;"></div>
	<!--- loading，显示在最上方 --->
	<div class="h_loading" style="position:fixed; left:0; top:0; width:100%; background-color:#fff; z-index:902;visibility:hidden;">正在加载常用入住人信息，请稍候…</div>
	
	<!--- 滑动层 --->
	<div class="layer_slide" style="height:384px;z-index:902;visibility:hidden;">
		<div class="layer_title"><a href="###" class="c_back"></a>常用入住人</div>
		<ul class="customer_list">
			<?php for($i=0; $i<10; $i++){ ?>
			<li>
				<!--- 注意：label加了空的onclick是为修正iOS里<label>无效的bug --->
				<label for="name<?php echo($i); ?>" onclick="">
					<input id="name<?php echo($i); ?>" type="checkbox" />
					<span>入住人姓名</span>
				</label>
				<!--<a href="###" class="delete">X</a>-->
			</li>
			<?php } ?>
		</ul>
		<div class="layer_btn">
			<input type="button" value="确 认" class="btn_confirm" />
		</div>
	</div>
</body>
</html>
