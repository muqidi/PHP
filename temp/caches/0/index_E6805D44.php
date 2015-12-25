<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:62:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/index.dwt";i:1;s:76:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/page_header.lbi";i:2;s:76:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/page_footer.lbi";}s:7:"expires";i:1451033000;s:8:"maketime";i:1451029400;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.SuperSlide.2.1.1.js"></script>
  <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.style.js"></script>
<title>ECSHOP演示站 - Powered by ECShop</title>
</head>
<body>
<link href="themes/ecmoban_moonbasa2013/qq/images/qq.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   
   
   
   
   <section class="shortcut">
    <div class="container auto fix">
        <div class="welcome fl">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
        <div class="block_01 keep fr">
            <ul class="fix">
                <li><a href="#"><img src="themes/ecmoban_jingdong/images/tb_1.png" class="mr5 vm" />语言</a></li>
                <li><a href="#"><img src="themes/ecmoban_jingdong/images/tb_2.png" class="mr5 vm" />货币</a></li>
                <li><a href="javascript:bookmark();" id="vanclFavorite"><img src="themes/ecmoban_jingdong/images/tb_3.png" class="mr5 vm" />收藏</a></li>
                <li><a href="#"><img src="themes/ecmoban_jingdong/images/tb_4.png" class="mr5 vm" />手机用户</a></li>
				
                <li><a href="user.php"><img src="themes/ecmoban_jingdong/images/tb_5.png" class="mr5 vm" />登录</a></li>
                <li class="bgnone"><a href="user.php?act=register"><img src="themes/ecmoban_jingdong/images/tb_6.png" class="mr5 vm" />注册</a></li>
            </ul>
        </div>
    </div>
</section>
<header class="container auto fix">
    <div class="logo fl"><a href=""><img src="themes/ecmoban_jingdong/images/logo.jpg" /></a></div>
    <div class="search fl fix">
        <div class="zl_select fl">
            <span></span>
            <ul>
                <li class="option" title="商品"><a>商品</a></li>
                <li class="option" title="店铺"><a>店铺</a></li>
            </ul>
            <input name="ShowType" id="ShowType" type="hidden" value="" />
        </div>
		<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
              <input name="keywords" type="text" id="keyword" value=""  class="ssk_1 fl"/>
              <input type="submit" value="搜索" name="imageField" class="input_1 fl fw" style="cursor:pointer;">
        </form>
    </div>
    <div class="gw_cart fr tc"><a href="flow.php"><img src="themes/ecmoban_jingdong/images/tb_7.png" class="vm mr15" />购物车   ></a></div>
	
	           </div>
	
	
</header>
   
<script type="text/javascript">
/*收藏夹功能*/
function bookmark() {
	var httpUrl="http://"+location.hostname;
    var c;
    var a = /^http{1}s{0,1}:\/\/([a-z0-9_\\-]+\.)+(yihaodian|1mall|111|yhd){1}\.(com|com\.cn){1}\?(.+)+$/;
    if (a.test(httpUrl)) {
        c = "&ref=favorite"
    } else {
        c = "?ref=favorite"
    }
    var d = httpUrl + c;
    if ('undefined' == typeof (document.body.style.maxHeight)) {
        d = httpUrl
    }
    try {
        if (document.all) {
            window.external.AddFavorite(d, favorite)
        } else {
            try {
                window.sidebar.addPanel(favorite, d, "")
            } catch(b) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    } catch(b) {
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
    }
}
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#shoppingCarNone").html(res.content);
  }
}
</script> 
 
 
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
                            <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">1F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=53">手机数码:</a>
                          						<a href="category.php?id=1">手机</a>
                   		  						<a href="category.php?id=6">手机配件</a>
                   		  						<a href="category.php?id=12">充值卡</a>
                   		  						<a href="category.php?id=27">数码相机</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=53">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">2F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=54">家用电器:</a>
                                             </div>
                    <div class="c_3"><a href="category.php?id=54">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">3F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=55">电脑办公:</a>
                          						<a href="category.php?id=26">笔记本</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=55">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">4F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=56">家装、厨具:</a>
                                             </div>
                    <div class="c_3"><a href="category.php?id=56">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">5F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=57">服装首饰:</a>
                          						<a href="category.php?id=20">服装</a>
                   		  						<a href="category.php?id=66">饰品</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=57">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">6F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=58">个妆美护:</a>
                          						<a href="category.php?id=67">洗面奶</a>
                   		  						<a href="category.php?id=68">香氛</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=58">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">7F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=59">鞋包钟表:</a>
                          						<a href="category.php?id=28">箱包</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=59">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">8F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=61">食品饮料:</a>
                                             </div>
                    <div class="c_3"><a href="category.php?id=61">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">9F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=63">烟酒茶:</a>
                          						<a href="category.php?id=17">酒类</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=63">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">10F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=64">图书音像:</a>
                          						<a href="category.php?id=16">图书</a>
                   		                     </div>
                    <div class="c_3"><a href="category.php?id=64">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">11F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=65">生鲜水果:</a>
                                             </div>
                    <div class="c_3"><a href="category.php?id=65">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">12F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=60">汽车，汽车用品:</a>
                                             </div>
                    <div class="c_3"><a href="category.php?id=60">MORE</a></div>
                </li>
                             <li class="fix">
                    <div class="c_1">
                        <a href="#">
                            <span class="vm">13F</span>
                            <img src="themes/ecmoban_jingdong/images/tb_8.png" class="vm" />
                        </a>
                    </div>
                    <div class="c_2">
                       <a href="category.php?id=62">营养保健:</a>
                                             </div>
                    <div class="c_3"><a href="category.php?id=62">MORE</a></div>
                </li>
              
            </ul>
        </div>
    </div>
    </section>
        <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>1F</span>
        <a href="category.php?id=53">手机数码</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=1">手机</a></li>
             					<li class="bnone">	<a href="category.php?id=6">手机配件</a></li>
             					<li class="bnone">	<a href="category.php?id=12">充值卡</a></li>
             					<li class="bnone">	<a href="category.php?id=27">数码相机</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_53" class="tabs_tit">热卖商品</div>
                <div id="new_53" class="tabs_tit">新品推荐</div>
                <div id="best_53"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_53"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                                            
                        <li>
                            <a href="goods.php?id=54">
                                <img src="images/201512/goods_img/54_G_1449720065567.jpg" />
                                <p class="tc">佳能D700</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥5555元                                                                    </span>
                                    <span class="sp_2 fr">￥13333元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=35">
                                <img src="images/201512/goods_img/35_G_1449539593671.jpg" />
                                <p class="tc">苹果6S</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥111元                                                                    </span>
                                    <span class="sp_2 fr">￥5455747元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=55">
                                <img src="images/201512/goods_img/55_G_1449720222507.jpg" />
                                <p class="tc">尼康微单</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥44444元                                                                    </span>
                                    <span class="sp_2 fr">￥53333元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=37">
                                <img src="images/201512/goods_img/37_G_1449554969010.jpg" />
                                <p class="tc">iPhone5</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥555元                                                                    </span>
                                    <span class="sp_2 fr">￥666元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=35">
                                <img src="images/201512/goods_img/35_G_1449539593671.jpg" />
                               
                                <p class="tc"> 苹果6S</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥111元                                                                    </span>
                                    <span class="sp_2 fr">￥5455747元 </span>
                                </p>
                            </a>
                        </li>
                      
                                        
                        <li>
                            <a href="goods.php?id=55">
                                <img src="images/201512/goods_img/55_G_1449720222507.jpg" />
                               
                                <p class="tc"> 尼康微单</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥44444元                                                                    </span>
                                    <span class="sp_2 fr">￥53333元 </span>
                                </p>
                            </a>
                        </li>
                      
                                        
                        <li>
                            <a href="goods.php?id=37">
                                <img src="images/201512/goods_img/37_G_1449554969010.jpg" />
                               
                                <p class="tc"> iPhone5</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥555元                                                                    </span>
                                    <span class="sp_2 fr">￥666元 </span>
                                </p>
                            </a>
                        </li>
                      
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=55">
                                <img src="images/201512/goods_img/55_G_1449720222507.jpg" />
                                
                                <p class="tc"> 尼康微单</p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                                                    ￥44444元                                                                    </span>
                                    
                                    <span class="sp_2 fr">￥53333元 </span>
                                </p>
                            </a>
                        </li>
                        
                                        
                        <li>
                            <a href="goods.php?id=38">
                                <img src="images/201512/goods_img/38_G_1449703448774.jpg" />
                                
                                <p class="tc"> 小米3</p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                                                    ￥999元                                                                    </span>
                                    
                                    <span class="sp_2 fr">￥1199元 </span>
                                </p>
                            </a>
                        </li>
                        
                                        
                        <li>
                            <a href="goods.php?id=39">
                                <img src="images/201512/goods_img/39_G_1449703656862.jpg" />
                                
                                <p class="tc"> 诺基亚30001</p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                                                ￥222元                                                                    </span>
                                    
                                    <span class="sp_2 fr">￥400元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>2F</span>
        <a href="category.php?id=54">家用电器</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_54" class="tabs_tit">热卖商品</div>
                <div id="new_54" class="tabs_tit">新品推荐</div>
                <div id="best_54"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_54"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>3F</span>
        <a href="category.php?id=55">电脑办公</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=26">笔记本</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_55" class="tabs_tit">热卖商品</div>
                <div id="new_55" class="tabs_tit">新品推荐</div>
                <div id="best_55"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_55"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                                            
                        <li>
                            <a href="goods.php?id=41">
                                <img src="images/201512/goods_img/41_G_1449703910121.jpg" />
                                <p class="tc">戴尔笔记本</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥3333元                                                                    </span>
                                    <span class="sp_2 fr">￥4000元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=42">
                                <img src="images/201512/goods_img/42_G_1449704051233.jpg" />
                                <p class="tc">苹果笔记本</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥11111元                                                                    </span>
                                    <span class="sp_2 fr">￥13333元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=48">
                                <img src="images/201512/goods_img/48_G_1449705721779.jpg" />
                                <p class="tc">戴尔笔记本</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥5555元                                                                    </span>
                                    <span class="sp_2 fr">￥6666元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=41">
                                <img src="images/201512/goods_img/41_G_1449703910121.jpg" />
                                
                                <p class="tc"> 戴尔笔记本</p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                                                    ￥3333元                                                                    </span>
                                    
                                    <span class="sp_2 fr">￥4000元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>4F</span>
        <a href="category.php?id=56">家装、厨具</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_56" class="tabs_tit">热卖商品</div>
                <div id="new_56" class="tabs_tit">新品推荐</div>
                <div id="best_56"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_56"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>5F</span>
        <a href="category.php?id=57">服装首饰</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=20">服装</a></li>
             					<li class="bnone">	<a href="category.php?id=66">饰品</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_57" class="tabs_tit">热卖商品</div>
                <div id="new_57" class="tabs_tit">新品推荐</div>
                <div id="best_57"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_57"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                                            
                        <li>
                            <a href="goods.php?id=34">
                                <img src="images/201512/goods_img/34_G_1449538709264.jpg" />
                                <p class="tc">波斯顿冬季羽绒服</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥222元                                                                    </span>
                                    <span class="sp_2 fr">￥1066元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=40">
                                <img src="images/201512/goods_img/40_G_1449703778904.jpg" />
                                <p class="tc">北极人羽绒服</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥3333元                                                                    </span>
                                    <span class="sp_2 fr">￥4000元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=47">
                                <img src="images/no_picture.gif" />
                                <p class="tc">北极人羽绒服</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥333元                                                                    </span>
                                    <span class="sp_2 fr">￥533元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=49">
                                <img src="images/201512/goods_img/49_G_1449706091499.jpg" />
                                <p class="tc">红豆</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥333元                                                                    </span>
                                    <span class="sp_2 fr">￥400元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=34">
                                <img src="images/201512/goods_img/34_G_1449538709264.jpg" />
                               
                                <p class="tc"> 波斯顿冬季羽绒服</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥222元                                                                    </span>
                                    <span class="sp_2 fr">￥1066元 </span>
                                </p>
                            </a>
                        </li>
                      
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=40">
                                <img src="images/201512/goods_img/40_G_1449703778904.jpg" />
                                
                                <p class="tc"> 北极人羽绒服</p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                                                    ￥3333元                                                                    </span>
                                    
                                    <span class="sp_2 fr">￥4000元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>6F</span>
        <a href="category.php?id=58">个妆美护</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=67">洗面奶</a></li>
             					<li class="bnone">	<a href="category.php?id=68">香氛</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_58" class="tabs_tit">热卖商品</div>
                <div id="new_58" class="tabs_tit">新品推荐</div>
                <div id="best_58"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_58"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                                            
                        <li>
                            <a href="goods.php?id=56">
                                <img src="images/201512/goods_img/56_G_1449880142198.jpg" />
                                <p class="tc">香奈儿5号</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥888元                                                                    </span>
                                    <span class="sp_2 fr">￥1066元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=57">
                                <img src="images/201512/goods_img/57_G_1449880220581.jpg" />
                               
                                <p class="tc"> 香奈儿Coco</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥888元                                                                    </span>
                                    <span class="sp_2 fr">￥1200元 </span>
                                </p>
                            </a>
                        </li>
                      
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=56">
                                <img src="images/201512/goods_img/56_G_1449880142198.jpg" />
                                
                                <p class="tc"> 香奈儿5号</p>
                                <p class="fix">
                                
                                <span class="sp_1 fl">
                                                                    ￥888元                                                                    </span>
                                    
                                    <span class="sp_2 fr">￥1066元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>7F</span>
        <a href="category.php?id=59">鞋包钟表</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=28">箱包</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_59" class="tabs_tit">热卖商品</div>
                <div id="new_59" class="tabs_tit">新品推荐</div>
                <div id="best_59"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_59"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                                            
                        <li>
                            <a href="goods.php?id=43">
                                <img src="images/201512/goods_img/43_G_1449704768666.jpg" />
                                <p class="tc">LV</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥334433元                                                                    </span>
                                    <span class="sp_2 fr">￥401320元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=44">
                                <img src="images/201512/goods_img/44_G_1449704921172.jpg" />
                                <p class="tc">瑞士双肩包</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥444元                                                                    </span>
                                    <span class="sp_2 fr">￥533元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=45">
                                <img src="images/201512/goods_img/45_G_1449704973308.jpg" />
                                <p class="tc">蓝宝</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥444元                                                                    </span>
                                    <span class="sp_2 fr">￥533元 </span>
                                </p>
                            </a>
                        </li>
                        
                                           
                        <li>
                            <a href="goods.php?id=46">
                                <img src="images/201512/goods_img/46_G_1449705600890.jpg" />
                                <p class="tc">测试包</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                ￥444元                                                                    </span>
                                    <span class="sp_2 fr">￥41元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>8F</span>
        <a href="category.php?id=61">食品饮料</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_61" class="tabs_tit">热卖商品</div>
                <div id="new_61" class="tabs_tit">新品推荐</div>
                <div id="best_61"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_61"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>9F</span>
        <a href="category.php?id=63">烟酒茶</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=17">酒类</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_63" class="tabs_tit">热卖商品</div>
                <div id="new_63" class="tabs_tit">新品推荐</div>
                <div id="best_63"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_63"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>10F</span>
        <a href="category.php?id=64">图书音像</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
              					<li class="bnone">	<a href="category.php?id=16">图书</a></li>
            
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_64" class="tabs_tit">热卖商品</div>
                <div id="new_64" class="tabs_tit">新品推荐</div>
                <div id="best_64"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_64"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                                            
                        <li>
                            <a href="goods.php?id=36">
                                <img src="images/201512/goods_img/36_G_1449539785836.jpg" />
                                <p class="tc">Python</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥88元                                                                    </span>
                                    <span class="sp_2 fr">￥106元 </span>
                                </p>
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                                       
                        <li>
                            <a href="goods.php?id=36">
                                <img src="images/201512/goods_img/36_G_1449539785836.jpg" />
                               
                                <p class="tc"> Python</p>
                                <p class="fix">
                                   <span class="sp_1 fl">
                                                                    ￥88元                                                                    </span>
                                    <span class="sp_2 fr">￥106元 </span>
                                </p>
                            </a>
                        </li>
                      
                      
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>11F</span>
        <a href="category.php?id=65">生鲜水果</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_65" class="tabs_tit">热卖商品</div>
                <div id="new_65" class="tabs_tit">新品推荐</div>
                <div id="best_65"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_65"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>12F</span>
        <a href="category.php?id=60">汽车，汽车用品</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_60" class="tabs_tit">热卖商品</div>
                <div id="new_60" class="tabs_tit">新品推荐</div>
                <div id="best_60"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_60"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
    <section class="container tabs auto mb20">
    <div class="tit_2">
        <span>13F</span>
        <a href="category.php?id=62">营养保健</a>
    </div>
    <div class="fix">
        <div class="mod_03 fl">
            <ul class="fix">
             
            </ul>
        </div>
        <div class="mod_04 tabs fl">
            <div class="title fix">
                <div id="hot_62" class="tabs_tit">热卖商品</div>
                <div id="new_62" class="tabs_tit">新品推荐</div>
                <div id="best_62"  class="tabs_tit">潮人推荐</div>
                <div id="promotion_62"  class="tabs_tit">年中大促</div>
            </div>
            <div class="content">
             
                <div style="position:relative" class="list_01">
                    <ul class="fix">
                       
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                  <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                 <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
                    </ul>
                    <div class="more"><a href="#">MORE+</a></div>
                </div>
                
                
                
                   <div style="position:relative" class="list_01">
                    <ul class="fix">
                    
                     
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
 
<script type="text/javascript">
    jQuery(".slide_1").slide({mainCell:".bd ul",autoPlay:true});
</script>
<footer>
    <div class="block_02 mb20">
        <div class="container auto fix">
            <div class="web_map fl">
                <ul class="fix">
                    <li>
                        <a href="#"><p>买家指南</p></a>
                        <a href="#">购物流程</a>
                        <a href="#">会员介绍</a>
                        <a href="#">积分规则</a>
                        <a href="#">常见问题</a>
                    </li>
                    <li>
                        <a href="#"><p>买家指南</p></a>
                        <a href="#">购物流程</a>
                        <a href="#">会员介绍</a>
                        <a href="#">积分规则</a>
                        <a href="#">常见问题</a>
                    </li>
                    <li>
                        <a href="#"><p>买家指南</p></a>
                        <a href="#">购物流程</a>
                        <a href="#">会员介绍</a>
                        <a href="#">积分规则</a>
                        <a href="#">常见问题</a>
                    </li>
                    <li>
                        <a href="#"><p>买家指南</p></a>
                        <a href="#">购物流程</a>
                        <a href="#">会员介绍</a>
                        <a href="#">积分规则</a>
                        <a href="#">常见问题</a>
                    </li>
                    <li>
                        <a href="#"><p>买家指南</p></a>
                        <a href="#">购物流程</a>
                        <a href="#">会员介绍</a>
                        <a href="#">积分规则</a>
                        <a href="#">常见问题</a>
                    </li>
                    <li>
                        <a href="#"><p>买家指南</p></a>
                        <a href="#">购物流程</a>
                        <a href="#">会员介绍</a>
                        <a href="#">积分规则</a>
                        <a href="#">常见问题</a>
                    </li>
                </ul>
            </div>
            <div class="wechat fl tc">
                <p class="mb5">热贸网微信公众号</p>
                <img src="themes/ecmoban_jingdong/images/erwei.jpg" /><br />
                关注扫码有惊喜！
            </div>
        </div>
    </div>
	<div class="block_03 tc">
  <div   id="footer-2013"> 
        <div class="links"> 
       
      <a href="article.php?id=1" >免责条款</a> 
       |  
       
      <a href="article.php?id=2" >隐私保护</a> 
       |  
       
      <a href="article.php?id=3" >咨询热点</a> 
       |  
       
      <a href="article.php?id=4" >联系我们</a> 
       |  
       
      <a href="article.php?id=5" >公司简介</a> 
       |  
       
      <a href="wholesale.php" >批发方案</a> 
       |  
       
      <a href="myship.php" >配送方式</a> 
       
       
    </div>
        
    <div class="copyright"> 
     &copy; 2005-2015 ECSHOP 版权所有，并保留所有权利。<br />
      
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br />
      
       
      
    </div>
    
    
        
  </div>
</div>
    <div class="block_03 tc">
        <p><a href="#">联系我们</a>丨<a href="#">关于我们</a>丨<a href="#">加入我们</a>丨<a href="#">友情链接</a>丨<a href="#">建议</a>丨<a href="#">热贸公益</a></p>
        <p class="mb10">热贸网 Copyright(c) 2015-2016 版权所有 京ICP0000085</p>
        <img src="themes/ecmoban_jingdong/images/001.jpg" />
    </div>
</footer>
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                                                                                  
    
  
  
  
  
  
  
  
  
  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script></body>
  
</html>
