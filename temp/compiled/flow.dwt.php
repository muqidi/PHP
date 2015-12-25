<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="js/jquery.style.js"></script>
	<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.min.js')); ?>
	<?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
  <?php if ($this->_var['step'] == "cart"): ?>
  
<section class="container auto mb30">
    <div class="mod_18 fix">
        <div class="name fl">全部商品</div>
        <div class="text fr">为避免选购商品售罄或恢复原价，请尽快<span>结算！</span></div>
    </div>
    <div class="mod_19" id="list">
        <div class="title fix tc mb5">
            <div class="c_1 tl"><input name="" type="checkbox" value="" class="all mr15 vm" />全选</div>
            <div class="c_2"><?php echo $this->_var['lang']['goods_attr']; ?></div>
            <div class="c_3"><?php echo $this->_var['lang']['shop_prices']; ?></div>
            <div class="c_4"><?php echo $this->_var['lang']['number']; ?></div>
            <div class="c_5"><?php echo $this->_var['lang']['subtotal']; ?></div>
            <div class="c_5"><?php echo $this->_var['lang']['handle']; ?></div>
        </div>
        <div class="con_1 tc mb5">
            <ul>
			<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <li class="fix">
                    <div class="c_1 tl"><input name="" type="checkbox" value="<?php echo $this->_var['goods']['goods_id']; ?>" class="vm" /></div>
                    <div class="c_2 fix">
                        <div class="fl"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
						<img  src="<?php echo $this->_var['goods']['goods_thumb']; ?>"/></a></div>
                        <div style="width: 223px;" class="fl ml10 di tl pt20">
						<a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"" ><?php echo $this->_var['goods']['goods_name']; ?>(<?php echo nl2br($this->_var['goods']['goods_attr']); ?>)</a></div>
                    </div>
                    <div class="c_3"><span id ="goods_price_<?php echo $this->_var['goods']['rec_id']; ?>" ><?php echo $this->_var['goods']['goods_price']; ?></span></div>
                    <div class="c_4">
                        <a href="#"><img src="themes/ecmoban_jingdong/images/tb_25.jpg" onclick="reducenumber('goods_number_<?php echo $this->_var['goods']['rec_id']; ?>')" class="vm" /></a>
				<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                <input type="text" maxlength="2" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" class="wbk_10 vm tc" onkeydown="showdiv(this)"/>
                <?php else: ?>
                <?php echo $this->_var['goods']['goods_number']; ?>
                <?php endif; ?>
                        <a href="#"><img src="themes/ecmoban_jingdong/images/tb_26.jpg" onclick="addnumber('goods_number_<?php echo $this->_var['goods']['rec_id']; ?>')" class="vm" /></a>
                    </div>
                    <div class="c_5" style="line-height: 44px;"><span id="goods_subtotal_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></span></div>
                    <div class="c_5" style="line-height: 22px;">
					<p><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
                <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                </p><p><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="f6"><?php echo $this->_var['lang']['drop_to_collect']; ?></a></p>
                <?php endif; ?>    
                    </div>
                </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="con_2 fix ovh mb20">
            <div class="fl">
			<input name="" type="checkbox" value="" class="all ml10 mr10 vm" />全选
			<a href="#" class="a_1 ml10">删除</a></div>
            <div class="fr">运费：<span class="sp_1 mr20">¥ 0.00</span>
			<span class="fs_18 mr20">
			<span class="sp_1"><?php if ($this->_var['discount'] > 0): ?><p id="your_discount"><?php echo $this->_var['your_discount']; ?></p><?php endif; ?><?php echo $this->_var['shopping_money']; ?>
			</span></span>
			<a href="./" class="a_2 mr20 tc">继续购物</a>
			<a href="flow.php?step=checkout" class="a_3 mr20 tc">去结算</a>
			</div>
        </div>
    </div>
    <section class="mod_16">
        <div class="tit_3">猜你喜欢</div>
        <div class="content pt30 pb30" style="border: 1px solid #e0e0e0; border-top: none;">
            <ul class="fix">
                <li>
                    <a href="#">
                        <img src="themes/ecmoban_jingdong/images/img_8.jpg" />依然婷 2015冬装新款女装韩版修身大毛领中
                        <p>￥269.00</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="themes/ecmoban_jingdong/images/img_8.jpg" />依然婷 2015冬装新款女装韩版修身大毛领中
                        <p>￥269.00</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="themes/ecmoban_jingdong/images/img_8.jpg" />依然婷 2015冬装新款女装韩版修身大毛领中
                        <p>￥269.00</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="themes/ecmoban_jingdong/images/img_8.jpg" />依然婷 2015冬装新款女装韩版修身大毛领中
                        <p>￥269.00</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="themes/ecmoban_jingdong/images/img_8.jpg" />依然婷 2015冬装新款女装韩版修身大毛领中
                        <p>￥269.00</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="themes/ecmoban_jingdong/images/img_8.jpg" />依然婷 2015冬装新款女装韩版修身大毛领中
                        <p>￥269.00</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</section>
<?php endif; ?>



<?php if ($this->_var['step'] == "checkout"): ?>
<section class="container auto mb30">
    <div class="mod_22 tc mb20"><img src="themes/ecmoban_jingdong/images/tb_29.jpg" /></div>
    <div class="mod_18 fix">
        <div class="name fl">填写核对订单信息</div>
        <div class="text fr">为避免选购商品售罄或恢复原价，请尽快<span>结算！</span></div>
    </div>
    <div class="mod_20">
        <div class="title"><img src="themes/ecmoban_jingdong/images/tb_27.jpg" class="vm ml10 mr10" />收货人信息</div>
        <div class="con_1">
<div id="address">
			<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee_0_93758100_1451029527');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee_0_93758100_1451029527']):
?>
            <div id="div<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" class="z_1 fix">
				
				
				
				
				<?php if ($this->_var['consignee_0_93758100_1451029527']['address_id'] == $this->_var['address_id']): ?>
				<div class="fl">
				<input type="radio" name="dx" value="<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" checked="checked" class="vm" />
				<span class="ml10 mr10" id="address_name<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>"><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['consignee']); ?></span>
				<?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['country_name']); ?>
				<?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['province_name']); ?><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['city_name']); ?><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['district_name']); ?>
				<span class="ml10 mr10" id="address_address<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>"><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['address']); ?></span>
				<span class="ml10 mr10" id="address_tel<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>"><?php echo $this->_var['consignee_0_93758100_1451029527']['tel']; ?></span></div>
                <div id="caozuo_<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" class="fr"><a href="javascript:updataAddress(<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>)">修改&nbsp;|</a>
				<a href="javascript:deleteAddress(<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>)">删除</a></div>
				<?php else: ?>
				<div class="fl"><input type="radio" value="<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" name="dx"  class="vm" />
				<span class="ml10 mr10" id="address_name<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>"><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['consignee']); ?></span>
				<?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['country_name']); ?>
				<?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['province_name']); ?><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['city_name']); ?><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['district_name']); ?>
				<span class="ml10 mr10" id="address_address<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>"><?php echo htmlspecialchars($this->_var['consignee_0_93758100_1451029527']['address']); ?></span>
				<span class="ml10 mr10" id="address_tel<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>"><?php echo $this->_var['consignee_0_93758100_1451029527']['tel']; ?></span></div>
                <div id="caozuo_<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" class="fr"><a id="a_<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" href="javascript:morenAddress(<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>)">设为默认&nbsp;|</a><a href="javascript:updataAddress(<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>)">修改&nbsp;|</a>
				<a href="javascript:deleteAddress(<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>)">删除</a></div>
				<?php endif; ?>
				<input type="hidden" id ="country_id<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" value="<?php echo $this->_var['consignee_0_93758100_1451029527']['country']; ?>"/>
				<input type="hidden" id="province_id<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" value="<?php echo $this->_var['consignee_0_93758100_1451029527']['province']; ?>" />
				<input type="hidden" id="city_id<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" value="<?php echo $this->_var['consignee_0_93758100_1451029527']['city']; ?>" />
				<input type="hidden" id="district_id<?php echo $this->_var['consignee_0_93758100_1451029527']['address_id']; ?>" value="<?php echo $this->_var['consignee_0_93758100_1451029527']['district']; ?>" />
			</div> 
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

            <div class="skin_7 pt20">
			<input type="hidden" id="address_id" value="" />
                <ul>
                    <li class="fix"><?php echo $this->_var['country_list_text']; ?>
                        <div class="c_1"><span class="mr10">*</span>收 货 人：</div>
                        <div class="c_2"><input type="text" id="address_name" value="" class="wbk_7" /></div>
                    </li>
                    <li class="fix">
                        <div class="c_1"><span class="mr10">*</span>收货城市：</div>
                        <div class="c_2">
                                <select name="country" id="selCountries" onchange="region.changed(this, 1, 'selProvinces')" >
								<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
								<?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
								<option value="<?php echo $this->_var['country']['region_id']; ?>" ><?php echo $this->_var['country']['region_name']; ?></option>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</select>
								<select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')" >
								<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
								<?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
								<option value="<?php echo $this->_var['province']['region_id']; ?>" ><?php echo $this->_var['province']['region_name']; ?></option>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</select>
								<select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')" >
								<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
								<?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
								<option value="<?php echo $this->_var['city']['region_id']; ?>" ><?php echo $this->_var['city']['region_name']; ?></option>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</select>
								<select name="district" id="selDistricts" <?php if (! $this->_var['district_list']): ?> style="display:none"<?php endif; ?> >
								<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
								<?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
								<option value="<?php echo $this->_var['district']['region_id']; ?>" ><?php echo $this->_var['district']['region_name']; ?></option>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</select>
                        </div>
                    </li>
                    <li class="fix">
                        <div class="c_1"><span class="mr10">*</span>详细地址：</div>
                        <div class="c_2"><input type="text" id="address_address" value="" class="wbk_8" /></div>
                    </li>
                    <li class="fix">
                        <div class="c_1"><span class="mr10">*</span>电话号码：</div>
                        <div class="c_2"><input type="text" id= "address_tel" value="" class="wbk_7" /></div>
                    </li>
                    <li class="fix">
                        <div class="c_1">&nbsp;</div>
                        <div class="c_2">
                            <input type="submit" value="保存地址" class="input_5 mr10" onclick="saveAddress()"/>
                            <input type="reset" value="取消" class="input_6" onclick="hiddendiv()" />
                        </div>
                    </li>
                </ul>
            </div>
            <div class="skin_6 tc">添加新地址</div>
        </div>
        <div class="title"><img src="themes/ecmoban_jingdong/images/tb_27.jpg" class="vm ml10 mr10" />支付方式</div>
        <div class="con_2 fix">
            <div class="c_1">支付方式：</div>
            <div class="c_2">
                <p><input type="radio" name="dx2" class="vm mr10" /><span class="mr10">在线支付</span>支付宝支付&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为了保证及时处理您的订单，请您下单后尽快付款。</p>
                <p class="pl20"><img src="themes/ecmoban_jingdong/images/tb_28.jpg" class="db" /></p>
            </div>
        </div>
        <div class="con_2 fix bnone">
            <div class="c_1">发票信息：</div>
            <div class="c_2">
                <p>部分商品可开增值税发票，如有需要，请联系客服400-007-0958。</p>
                <p><input type="radio" name="dx3" class="vm mr10" /><span>暂不需要发票</span></p>
                <p><input type="radio" name="dx3" class="vm mr10" /><span>普通发票</span><a href="javascript:void(0);" class="skin_8 ml30">修改</a></p>
            </div>
        </div>
        <div class="skin_9 mb10">
            <div class="fix mb5">
                <div class="c_1">发票抬头：</div>
                <div class="c_2">
                    <select class="xlk_4">
                        <option>个人</option>
                    </select>
                    <input type="text" class="wbk_11" />
                </div>
            </div>
            <div class="fix">
                <div class="c_1">发票内容：</div>
                <div class="c_2">
                    <p>
                        <span><input type="radio" name="dx4" class="vm mr10" />日用品</span>
                        <span><input type="radio" name="dx4" class="vm mr10" />药品</span>
                        <span><input type="radio" name="dx4" class="vm mr10" />医疗器械</span>
                        <span><input type="radio" name="dx4" class="vm mr10" />参茸饮片</span>
                    </p>
                    <p>
                        <span><input type="radio" name="dx4" class="vm mr10" />保健品</span>
                        <span><input type="radio" name="dx4" class="vm mr10" />食品</span>
                        <span><input type="radio" name="dx4" class="vm mr10" />化妆品</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="title"><img src="themes/ecmoban_jingdong/images/tb_27.jpg" class="vm ml10 mr10" />购物清单</div>
        <div class="con_3">
            <div class="z_1 fix tc">
                <div class="c_1">商品信息</div>
                <div class="c_2">数量</div>
                <div class="c_3">金额</div>
                <div class="c_4">商品合计</div>
            </div>
            <div class="z_2 fix tc">
                <div class="c_1 tl fix">
                    <div class="fl mr30 di"><a href="#"><img src="themes/ecmoban_jingdong/images/img_9.jpg" /></a></div>
                    <div class="fl pt20" style="width: 180px;"><a href="#">百思绒 2015秋冬新款立领修身韩版轻薄羽绒服女短款女士冬季外套 紫色 M</a></div>
                </div>
                <div class="c_2">1</div>
                <div class="c_3">¥58.0</div>
                <div class="c_4"><span>¥58.0</span></div>
            </div>
            <div class="z_2 fix tc">
                <div class="c_1 tl fix">
                    <div class="fl mr30 di"><a href="#"><img src="themes/ecmoban_jingdong/images/img_9.jpg" /></a></div>
                    <div class="fl pt20" style="width: 180px;"><a href="#">百思绒 2015秋冬新款立领修身韩版轻薄羽绒服女短款女士冬季外套 紫色 M</a></div>
                </div>
                <div class="c_2">1</div>
                <div class="c_3">¥58.0</div>
                <div class="c_4"><span>¥58.0</span></div>
            </div>
            <div class="z_3 fix">
                <div class="fl">产品数量总计：<span>1件</span><br>配  送  方  式：厂家配送</div>
                <div class="fr">商品金额：<span>58 元</span></div>
            </div>
        </div>
    </div>
    <div class="mod_21 tr b">
        <span class="mr30">您共需要为订单支付：58.00元</span>
        <input type="submit" value="提交订单" class="input_7 vm" />
    </div>
</section>
<?php endif; ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>


</body>
<script type="text/javascript">
function addnumber(type){
	var n = $('#'+type);
	var number = parseInt(n.val())+ 1;
	data = type.split('_')[2];
	$.ajax({
	type:"POST",
	dataType: "json",
	url:'ajaxphp/changeGoodsCart.php?'+Math.random(),
	data:{"data":data,"number":number},
	success: function(json){
	if(json.success==1){
		n.val(number);
	var a= $('#goods_price_'+data).text().split('￥')[1];
	var price = parseFloat(a)*number;
	$("#goods_subtotal_"+data).text(num2string(price));
	}
	else 
		alert(json.msg);
}
});
	
}

function reducenumber(type){
	var n = $('#'+type);
	var number = parseInt(n.val()) - 1;
	if(number <= 0)
	{number	=1; return false;}
	data = type.split('_')[2];
	$.ajax({
	type:"POST",
	dataType: "json",
	url:'ajaxphp/changeGoodsCart.php?'+Math.random(),
	data:{"data":data,"number":number},
	success: function(json){
	if(json.success==1){
	n.val(number);
	var a= $('#goods_price_'+data).text().split('￥')[1];
	var price = parseFloat(a)*number;
	$("#goods_subtotal_"+data).text(num2string(price));
		
	}
	else 
		alert(json.msg);
}
});

}


function num2string(x){
	var f= x.toString();
	var s = f.indexOf('.');
	if(s<0){
		s = f.length;
		f += '.';
	}
	while(f.length<=s+2){
		f+='0';
	}
	f = '￥'+ f+ "元";
	return f;

}

function Price(){

	var attr = getSelectedAttributes1($("#select_spec a"));
  
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}


</script>


</html>