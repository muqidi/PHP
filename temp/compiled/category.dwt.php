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
    <script src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="js/jquery.style.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<section class="container mod_05 auto">
    <?php echo $this->_var['ur_here']; ?> ：
	<?php if ($this->_var['categories']): ?>
    <select id="categroytree" onchange="getchildid()"class="xlk_1 vm">
	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
        <option value="<?php echo $this->_var['cat']['id']; ?>_<?php echo $this->_var['cat']['url']; ?>"  ><?php echo $this->_var['cat']['name']; ?></option>
	     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </select>
	<?php endif; ?>
     <select id="categroychild"  style="display:none" onchange="getchildid2()" class="xlk_1 vm">
 
    </select>
</section>


<section class="container auto fix">
    <div class="w_941 fl">
        <div class="mod_06 fix">
            <div class="fl"><b style="color:#e4393c;font-size:14px" id="categroyname"></b>&nbsp;&nbsp;
			商品筛选
			&nbsp;&nbsp;&nbsp;&nbsp;共<?php echo $this->_var['pager']['record_count']; ?>件商品</div>
            <a href="javascript:void(0);" class="skin_1 fr">收起筛选</a>
        </div>
        <div class="mod_07 mb10">
            <ul>
                <li class="fix">
                    <div class="c_1">品牌：</div>
                    <div class="c_2 skin_2">
                        <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
                    <a href="#"><?php echo $this->_var['brand']['brand_name']; ?></a>
                  	 <?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                </li>
                <li class="fix">
                    <div class="c_1">价格：</div>
                    <div class="c_2 skin_2">
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<a href="#"><?php echo $this->_var['grade']['price_range']; ?></a>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </li>
	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_11022000_1450770618');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_11022000_1450770618']):
?>
      <li class="fix">
	   <div class="c_1"><?php echo htmlspecialchars($this->_var['filter_attr_0_11022000_1450770618']['filter_attr_name']); ?> :</div>
			<div class="c_2 skin_2">
			<?php $_from = $this->_var['filter_attr_0_11022000_1450770618']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<a href="#"><?php echo $this->_var['attr']['attr_value']; ?></a>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </li>
  			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </ul>
        </div>
        <div class="mod_08 fix">
            <div class="con_1 fl fix">
			
			
			
			  <form method="GET" class="sort" name="listform"> 
			  <a href="javascript:void(0);">综合排序</a>
                <a href="category.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=comment_num&order=<?php if ($this->_var['pager']['sort'] == 'comment_num' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">评论数</a>
  <a href="category.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">上架时间</a>
  <a href="category.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格</a>
  <a href="category.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">更新时间</a>
  <a href="category.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">销量</a>
  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />

    </form>
			
			
			

               
            </div>
            <div class="con_2 fr fix">
                <span class="fl"> &nbsp;&nbsp;&nbsp;</span>
				 <?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>"><</a><?php endif; ?>
					<?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>">></a><?php endif; ?>
            </div>
        </div>
        <div class="mod_09 mb20">
            <input type="checkbox" class="vm mr10 ml20" />货到付款
            <input type="checkbox" class="vm mr10 ml20" />仅显示有货
        </div>
        <div class="mod_10">
            <ul class="fix">
			<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
			<?php if ($this->_var['goods']['goods_id']): ?>
                <li>
				
                    <div class="img mb15"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="goodsimg" /></a></div>
                    <div class="text">
                        <div class="c_1 fix">
						            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
           <span class="sp_1 fl"><?php echo $this->_var['goods']['promote_price']; ?></span>
            <?php else: ?>
           <span class="sp_1 fl"><?php echo $this->_var['goods']['shop_price']; ?></span>
            <?php endif; ?>
                            
                            <span class="fr">421人付款</span>
                        </div>
                        <div class="c_2">
                           <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a>
                        </div>
                        <div class="fix">
                            <a href="#" class="a_2 fl">优衣库官方旗舰店</a>
                            <span class="fr">上海</span>
                        </div>
                    </div>
                </li>
				
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>

 <div id="pager" class="page">

  <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?> ...</a><?php endif; ?>
  <?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
  <?php if ($this->_var['pager']['page_count'] != 1): ?>
    <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
      <a class="current"><?php echo $this->_var['key']; ?></a>
      <?php else: ?>
      <a href="<?php echo $this->_var['item']; ?>"><?php echo $this->_var['key']; ?></a>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>

  <?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>
  <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>">...<?php echo $this->_var['lang']['page_last']; ?></a><?php endif; ?>
  <?php if ($this->_var['pager']['page_kbd']): ?>
    <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      <?php if ($this->_var['key'] == 'keywords'): ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
        <?php else: ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
    <?php endif; ?>
</div>



</form>				
			
        </div>
    </div>
    <div class="w_248 fr">
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
	var value= $('#categroytree').val();
	if( typeof(value)!="undefined" && value != ""){
		var cat_id = value.split('_')[0];
	Bingcategroychild(cat_id);}
</script>
</html>