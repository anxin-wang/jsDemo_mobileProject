<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		信用卡担保
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="box_card">
		您选择的入住时间因酒店房间紧张，需提供信用卡担保<span class="emphasis"><dfn>&yen;</dfn><strong>1,490</strong></span>。该订单一经确认后不可被取消或修改，若未按时入住酒店，我们将扣除您的相应担保费用。
	</div>
	<ul class="book_item book_card">
		<li>
			<label>发卡银行</label>
			<span class="item_option">
				<span class="dropdown_select" style="width: 147px;">中国建设银行</span>
				<select style="width: 154px;">
					<option>中国建设银行</option>
					<option>招商银行</option>
					<option>中国银行</option>
					<option>中国民生银行</option>
				</select>
			</span>
		</li>
		<li>
			<label>卡号</label>
			<input type="text" pattern="[0-9]*" />
		</li>
		<li>
			<label>有效期</label>
			<span class="item_option">
				<span class="dropdown_select" style="width: 53px;">08</span>
				<select style="width: 60px;">
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
			</span>
			月
			<span class="item_option">
				<span class="dropdown_select" style="width: 53px;">12</span>
				<select style="width: 60px;">
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
				</select>
			</span>
			年
		</li>
		<li>
			<label>验证码</label>
			<input type="text" pattern="[0-9]*" />
		</li>
		<li>
			<label>持卡人姓名</label>
			<input type="text" />
		</li>
		<li>
			<label>办卡证件类型</label>
			<span class="item_option">
				<span class="dropdown_select" style="width: 147px;">身份证</span>
				<select style="width: 154px;">
					<option>身份证</option>
					<option>军人证</option>
					<option>护照</option>
				</select>
			</span>
		</li>
		<li>
			<label>持卡人证件号码</label>
			<input type="text" pattern="[0-9]*" />
		</li>
	</ul>
	<div class="btn_box">
		<input type="submit" value="提交订单" />
	</div>
</body>
</html>
