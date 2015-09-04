<?php include('head_config.php') ?>
<body>
	<header>
		<a href="javascript:window.history.go(-1)" class="c_back"></a>
		酒店详情
		<a href="hotel_index.php" class="c_home"></a>
	</header>
	<div class="hotel_intro">
		<!--- 点击切换折叠展开状态，样式为menu_fold/menu_unfold --->
		<div class="intro_box menu_fold">
			<a href="###" class="intro_title">位置交通</a>
			<dl class="intro_content">
				<dt>火车站</dt>
				<dd>
					上海火车站 距离酒店18.97公里<br />
					虹桥火车站 距离酒店24.97公里<br />
					上海火车站 距离酒店10.23公里
				</dd>
				<dt>机场</dt>
				<dd>
					上海浦东国际机场 距离酒店33.68公里<br />
					上海虹桥机场（一号航站楼） 距离酒店20.93公里<br />
					上海虹桥机场（二号航站楼） 距离酒店24.52公里
				</dd>
				<dt>商业中心/知名餐饮</dt>
				<dd>
					八佰伴 距离酒店2.48公里<br />
					正大广场 距离酒店4.53公里
				</dd>
				<dt>市中心</dt>
				<dd>人民广场 距离酒店10000公里</dd>
				<dt>公园/游乐场/景点/景区</dt>
				<dd>东方明珠 距离酒店6公里</dd>
				<dt>工业区/开发区</dt>
				<dd>陆家嘴金融区 距离酒店3公里</dd>
			</dl>
		</div>
		<div class="intro_box menu_unfold">
			<a href="###" class="intro_title">酒店位置</a>
			<dl class="intro_content">
				<dt>附加选择</dt>
				<dd>自助早餐价 <span class="c_price"><dfn>&yen;</dfn>120</span></dd>
				<dt>酒店服务</dt>
				<dd>出租车 滚梯/电梯 会议厅 商务中心 有可无线上网的公共区域 接机服务 外币兑换服务 前台贵重物品保险柜 免费旅游交通图(可赠送) 行李存放服务 洗衣服务 邮政服务 叫醒服务</dd>
				<dt>餐饮设施</dt>
				<dd>西餐厅 酒吧 大堂吧 全天送餐服务</dd>
				<dt>娱乐健身</dt>
				<dd>健身室</dd>
				<dt>客房设施</dt>
				<dd>国内长途电话 国际长途电话 中央空调 浴室化妆放大镜 24小时热水 免费洗漱用品 浴衣 吹风机 拖鞋 雨伞 独立写字台 熨斗/熨衣板 多种规格电源插座 110V电压插座 保险箱 电热水壶 咖啡壶/茶壶 免费瓶装水 迷你酒吧 小冰箱</dd>
			</dl>
		</div>
		<div class="intro_box menu_unfold">
			<a href="###" class="intro_title">酒店介绍</a>
			<div class="intro_content">
				　　上海JIA酒店一家极具设计感的世界级精品酒店，其前身为1920年代的老上海建筑，由世界级的著名设计师联手设计而成，地处上海最繁华的南京西路地段。<br />　　雅致大堂，由得奖室内设计师──香港建筑公司AFSO的ANDREFU设计，简约舒适间注入引人入胜的设计品，让人倍感新奇。安静私密的各类套房，秉承了稳健又时髦的设计风格。浴室里金色的马赛克包围着浴缸，让其中的水变成金色，还配备三温暖设备，浪漫之余让人尽享便利。部分套房配有露台及多款特别设施，即使是追求完美的宾客也会称心满意。房间内的木铅笔盒、熊猫图案记事本，玲珑的白色窗头凳、床头灯都可以被客人订购，作为礼物或装饰自己的家，体现出JIA以“家”作为蓝本，但有高于“家”的设计心思。<br />
				　　ISSIMORESTAURANT&BAR是酒店的一大亮点，Issimo在中文里是“最好”的意思。餐厅的设计可谓是整个酒店设计的点睛之笔，以大块原木为主的自然风格，搭以线条简约的桌椅，沉稳基础色碰上真皮、藤元素，从而展现不同的自然面貌，非常符合意大利人天性奔放渴望自由、却又骨子里热爱时尚的生活格调。光是看着展示午餐卡上摆满的红色果酱、精致火腿、培根卷，就好似置身意大利乡村田园，让人垂涎欲滴。<br />
				　　上海JIA酒店，用其专业极致的酒店文化，为您创造一个低调、舒适、奢华的私密空间！
			</div>
		</div>
	</div>
	
	<footer class="appbar_5">
		<a href="hotel_detail_room.php"><span class="icon_room">room</span></a>
		<a href="hotel_detail_intro.php" class="current"><span class="icon_intro">intro</span></a>
		<a href="hotel_detail_comment.php"><span class="icon_comment">comment</span></a>
		<a href="hotel_detail_pic.php"><span class="icon_pic">pic</span></a>
		<a href="hotel_detail_map.php"><span class="icon_map">map</span></a>
	</footer>
	<script src="scripts/ui.js?<?php echo date(is) ?>"></script>
</body>
</html>
