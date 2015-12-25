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


	
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
    <script type="text/javascript" type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.style.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<section class="mod_12 mb30">
    <div class="container auto">
       <!-- <span>服装衣服：</span> -->
        <?php echo $this->_var['ur_here']; ?> 
    </div>
</section>
<section class="container auto mb20 fix">
    <div class="mod_13 fl">
        <div class="bd">
            <ul>
			<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <li>
                    <a href="#" target="_blank"><img src="<?php echo $this->_var['item']['img_url']; ?>" /></a>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="hd auto">
            <ul>
			<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <li><img src="<?php echo $this->_var['item']['img_url']; ?>" /></li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".mod_13").slide({mainCell:".bd ul",autoPlay:true});
    </script>
	 <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    <div class="mod_14 fl">
        <div class="c_1"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></div>
        <div class="c_2 mb10 fix">
            <div class="fl">
                <p>参  考  价： <span class="tdlt"><?php echo $this->_var['goods']['market_price']; ?></span></p>
               

	<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
	<p>热  贸  价： <span  class="tdlt" ><?php echo $this->_var['goods']['shop_price_formated']; ?></span></p>
      <p><?php echo $this->_var['lang']['promote_price']; ?><span  class="sp_1" ><?php echo $this->_var['goods']['promote_price']; ?></span></p>
      <p><?php echo $this->_var['lang']['residual_time']; ?><span>
      <font id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font></span></p>

	  <?php else: ?>
	  <p>热  贸  价： <span   class="sp_1"><?php echo $this->_var['goods']['shop_price_formated']; ?></span></p>
	        <?php endif; ?>
            </div>
            <div class="fr pt30">月销量<?php echo $this->_var['bought_notes']; ?> <span class="sp_2"></span> 丨 累计评价<span class="sp_2"><?php echo $this->_var['record_count']; ?></span></div>
        </div>
        <div class="c_3 mb15">
            <ul>
						
                <li class="fix">
                    <div class="name">商品编号：</div>
                    <div class="skin_3"><?php echo $this->_var['goods']['goods_sn']; ?></div>
                </li>
				<div id="select_spec">
			      
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
      <li class="fix">
	  <div class="name">选择<?php echo $this->_var['spec']['name']; ?>:</div>
<div  class="skin_3 fix">
                 <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <a name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>"  class="fix"  href="javascript:Price();" ><span>
                      <?php echo $this->_var['value']['label']; ?>[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]</span></a>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
      </div>
	  </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
	  </div>
                <li class="fix">
                    <div class="name">数       量： </div>
                    <div class="text fix">
                        <input name="number"  id="number" value="1" size="4" onblur="changePrice()" type="text" class="wbk_2 mr10 di fl" />
                        <span class="fl">
                            <img src="themes/ecmoban_jingdong/images/tb_22.jpg" class="db mb5" onclick="changenumber(1)"/>
                            <img src="themes/ecmoban_jingdong/images/tb_23.jpg" class="db" onclick="changenumber(-1)" />
                        </span>
						
						 <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <span><?php echo $this->_var['lang']['goods_number']; ?></span>
          <span class="fl pl10"><?php echo $this->_var['lang']['stock_up']; ?></span>
        <?php else: ?>
		 <span class="fl pl10"><?php echo $this->_var['lang']['goods_number']; ?> <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></span>
        <?php endif; ?>
      <?php endif; ?>
						
                        
                    </div>
                </li>
			<li class="fix">	 <strong><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font></li>
	<?php if ($this->_var['goods']['is_shipping']): ?>
      <li class="fix">
      <?php echo $this->_var['lang']['goods_free_shipping']; ?>
      </li>
      <?php endif; ?>
				
            </ul>
        </div>
        <div class="pl20">
            <input type="submit" value="立即购买" class="input_3 vm" />
            <input type="submit" value="" class="input_4 vm" />
        </div>

        <div class="c_4 pl20">温馨提示：支持7天无理由退货</div>
    </div>
	</form>
    <div class="mod_15 fr">
        <div class="img mb15">
            <a href="#"><img src="themes/ecmoban_jingdong/images/img_7.jpg" /></a>
        </div>
        <div class="text mb20">
            <p><a href="#">依然婷女装官方旗舰店</a></p>
            <p>公司名称：广州市婉蔻贸易有限公司</p>
            <p>所 在 地：广东 广州市</p>
        </div>
        <div class="f tc">
            <a href="#">进入店铺</a>
            <input type="submit" value="关注店铺" />
        </div>
    </div>
</section>
<section class="container mod_16 auto mb30">
    <div class="title mb30"><span>最佳搭配</span></div>
    <div class="content">
        <ul class="fix">	
	<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
      <li >
      <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['linked_goods_data']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['linked_goods_data']['name']); ?>" class="B_blue" /></a>
	  <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>"><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?></a>
      <?php echo $this->_var['lang']['shop_price']; ?><font class="f1"><?php echo $this->_var['linked_goods_data']['shop_price']; ?></font><br />
      </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
</section>
<section class="container auto fix mb20">
    <div class="w_955 fl">
        <div class="mod_17 tabs">
            <div class="title fix">
                <div class="tabs_tit">商品详情</div>
                <div class="tabs_tit">累计评价</div>
                <div class="tabs_tit">月成交记录</div>
            </div>
            <div class="content">
                <div class="list_01">
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2" bgcolor="#FFFFFF"> <h2 class="h2bg"><?php echo htmlspecialchars($this->_var['key']); ?></h2></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<tr>
          <th colspan="2" bgcolor="#FFFFFF"> <h2 class="h2bg"> <h2><?php echo $this->_var['lang']['goods_brief']; ?></h2></th>
        </tr>
		 <tr>
          <td  colspan="2" bgcolor="#FFFFFF" > <?php echo $this->_var['goods']['goods_desc']; ?></td>
         
        </tr>
      </table>      
      </div>
	  
                <div class="list_01">
                    
						
						
												<?php echo $this->fetch('library/comments.lbi'); ?>
						
</div>
				
				<div class="list_01">
				
				
				<?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
				
				<?php if ($this->_var['bought_goods']): ?>
     <div class="box">
     <div class="box_1">
      <h3><span class="text"><?php echo $this->_var['lang']['shopping_and_other']; ?></span></h3>
      <div class="boxCenterList clearfix ie6">
       <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['bought_goods_data']):
?>
        <div class="goodsItem">
         <a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"  class="goodsimg" /></a><br />
         <p><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a></p> 
         <?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?>
        <font class="shop_s"><?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?></font>
        <?php else: ?>
        <font class="shop_s"><?php echo $this->_var['bought_goods_data']['shop_price']; ?></font>
        <?php endif; ?>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
    <?php endif; ?>
				
				
				
				</div>
				
				
            </div>
        </div>
    </div>
    <div class="w_226 fr">
        <div class="mod_11">
            <div class="title mb15">推荐产品</div>
            <div class="content">
                <ul>
                    <li>
                        <div class="img">
                            <a href="#"><img src="themes/ecmoban_jingdong/images/img_4.jpg" /></a>
                        </div>
                        <div class="text fix">
                            <span class="sp fl">￥429.00</span>
                            <span class="fr">销量：21</span>
                        </div>
                    </li>
                    <li>
                        <div class="img">
                            <a href="#"><img src="themes/ecmoban_jingdong/images/img_4.jpg" /></a>
                        </div>
                        <div class="text fix">
                            <span class="sp fl">￥429.00</span>
                            <span class="fr">销量：21</span>
                        </div>
                    </li>
                    <li>
                        <div class="img">
                            <a href="#"><img src="themes/ecmoban_jingdong/images/img_4.jpg" /></a>
                        </div>
                        <div class="text fix">
                            <span class="sp fl">￥429.00</span>
                            <span class="fr">销量：21</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  Price();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}




function changenumber(type){
	var number = parseInt($("#number").val())+ parseInt(type);
	if(number <= 0)
	number	=1;
	$("#number").val(number);
	Price();
}



function Price(){

	var attr = getAttributes($("#select_spec a"));
  
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}


/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  //var attr = getSelectedAttributes(document.getElementById('select_spec').getElementsByTagName('a'));
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>

</html>