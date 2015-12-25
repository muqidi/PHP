<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.SuperSlide.2.1.1.js"></script>
  <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.style.js"></script>
<title><?php echo $this->_var['page_title']; ?></title>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<section class="container auto fix mb20">
    <div class="w_383 fl">
        <div class="tit_1">选择国家</div>
        <div class="mod_01">
            <ul>
                <li class="fix">
                    <div class="c_1">
                        <a href="#" class="a_1">亚洲</a>
                        <a href="#" class="a_2 tr">MORE+</a>
                    </div>
                    <div class="c_2 fix">
                        <div class="img">
                            <a href="#">
                                <img src="themes/ecmoban_jingdong/images/001.png" />
                                <p>中国</p>
                            </a>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="themes/ecmoban_jingdong/images/001.png" />
                                <p>日本</p>
                            </a>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="themes/ecmoban_jingdong/images/001.png" />
                                <p>菲律宾</p>
                            </a>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="themes/ecmoban_jingdong/images/001.png" />
                                <p>越南</p>
                            </a>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="themes/ecmoban_jingdong/images/001.png" />
                                <p>韩国</p>
                            </a>
                        </div>
                        <div class="img">
                            <a href="#">
                                <img src="themes/ecmoban_jingdong/images/001.png" />
                                <p>朝鲜</p>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
     <div class="w_817 fl">
        <div class="tit_1">网站导航</div>
        <div class="mod_02">
            <ul>
            <?php $_from = $this->_var['index_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
                <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm"><?php echo $this->_foreach['foo']['iteration']; ?>F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?>:</a>
                         <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
 						<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                   		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <div class="c_3"><a href="<?php echo $this->_var['cat']['url']; ?>">MORE</a></div>
                </li>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </ul>
        </div>
    </div>
    </section>
    <?php $_from = $this->_var['index_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span><?php echo $this->_foreach['foo']['iteration']; ?>F</span>
        <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
 					<li class="bnone">	<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_<?php echo $this->_var['cat']['id']; ?>" class="tabs_tit">热卖商品</div>
                <div id="new_<?php echo $this->_var['cat']['id']; ?>" class="tabs_tit">新品推荐</div>
                <div id="best_<?php echo $this->_var['cat']['id']; ?>"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_<?php echo $this->_var['cat']['id']; ?>"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                      <?php $_from = $this->_var['cat']['hot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                      
                        <li>
                            <a href="<?php echo $this->_var['goods']['url']; ?>">
                                <img src="<?php echo $this->_var['goods']['goods_img']; ?>" />
                                <p class="tc"><?php echo $this->_var['goods']['name']; ?></p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                                <?php echo $this->_var['goods']['promote_price']; ?>
                                <?php else: ?>
                                    <?php echo $this->_var['goods']['shop_price']; ?>
                                <?php endif; ?>
                                    </span>
                                    <span class="sp_2 fr"><?php echo $this->_var['goods']['market_price']; ?> </span>
                                </p>
                            </a>
                        </li>
                        
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>

                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                    <?php $_from = $this->_var['cat']['new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                   
                        <li>
                            <a href="<?php echo $this->_var['goods']['url']; ?>">
                                <img src="<?php echo $this->_var['goods']['goods_img']; ?>" />
                               
                                <p class="tc"> <?php echo $this->_var['goods']['name']; ?></p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                                <?php echo $this->_var['goods']['promote_price']; ?>
                                <?php else: ?>
                                    <?php echo $this->_var['goods']['shop_price']; ?>
                                <?php endif; ?>
                                    </span>
                                    <span class="sp_2 fr"><?php echo $this->_var['goods']['market_price']; ?> </span>
                                </p>
                            </a>
                        </li>
                      
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                    <?php $_from = $this->_var['cat']['best']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                   
                        <li>
                            <a href="<?php echo $this->_var['goods']['url']; ?>">
                                <img src="<?php echo $this->_var['goods']['goods_img']; ?>" />
                                
                                <p class="tc"> <?php echo $this->_var['goods']['name']; ?></p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                                <?php echo $this->_var['goods']['promote_price']; ?>
                                <?php else: ?>
                                    <?php echo $this->_var['goods']['shop_price']; ?>
                                <?php endif; ?>
                                    </span>
                                    
                                    <span class="sp_2 fr"><?php echo $this->_var['goods']['market_price']; ?> </span>
                                </p>
                            </a>
                        </li>
                        
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                    <?php $_from = $this->_var['cat']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                    
                        <li>
                            <a href="<?php echo $this->_var['goods']['url']; ?>">
                                <img src="<?php echo $this->_var['goods']['goods_img']; ?>" />
                                
                                <p class="tc"> <?php echo $this->_var['goods']['names']; ?></p>
                                <p class="fix">
                                
                                    <span class="sp_1 fl"><?php echo $this->_var['goods']['promote_price']; ?></span>
                                    <span class="sp_2 fr"><?php echo $this->_var['goods']['market_price']; ?> </span>
                                </p>
                            </a>
                        </li>
                       
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                <div class="list_01">
                 <div class="more"><a href="#">MORE+</a></div>
                </div>
            </div>
        </div>
        <div class="slide_1 fl">
            <div class="hd">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="bd">
                <ul>
                    <li>
                        <a href="#" target="_blank"><img src="themes/ecmoban_jingdong/images/img_1.jpg" /></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="themes/ecmoban_jingdong/images/img_2.jpg" /></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="themes/ecmoban_jingdong/images/img_1.jpg" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
<script type="text/javascript">
    jQuery(".slide_1").slide({mainCell:".bd ul",autoPlay:true});
</script>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
  
</html>
