<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:65:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/category.dwt";i:1;s:76:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/page_header.lbi";i:2;s:76:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/page_footer.lbi";}s:7:"expires";i:1450948010;s:8:"maketime";i:1450944410;}<!DOCTYPE html>
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
 
 
<section class="container mod_05 auto">
    <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=57">服装首饰</a> <code>&gt;</code> <a href="category.php?id=66">饰品</a> ：
	     <select id="categroychild"  style="display:none" onchange="getchildid2()" class="xlk_1 vm">
 
    </select>
</section>
<section class="container auto fix">
    <div class="w_941 fl">
        <div class="mod_06 fix">
            <div class="fl"><b style="color:#e4393c;font-size:14px" id="categroyname"></b>&nbsp;&nbsp;
			商品筛选
			&nbsp;&nbsp;&nbsp;&nbsp;共0件商品</div>
            <a href="javascript:void(0);" class="skin_1 fr">收起筛选</a>
        </div>
        <div class="mod_07 mb10">
            <ul>
                <li class="fix">
                    <div class="c_1">品牌：</div>
                    <div class="c_2 skin_2">
                        					                    <a href="#">全部</a>
                  	 				 
                    </div>
                </li>
                <li class="fix">
                    <div class="c_1">价格：</div>
                    <div class="c_2 skin_2">
                                    </div>
                </li>
	
            </ul>
        </div>
        <div class="mod_08 fix">
            <div class="con_1 fl fix">
			
			
			
			  <form method="GET" class="sort" name="listform"> 
			  <a href="javascript:void(0);">综合排序</a>
                <a href="category.php?category=66&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=comment_num&order=DESC#goods_list">评论数</a>
  <a href="category.php?category=66&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list">上架时间</a>
  <a href="category.php?category=66&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格</a>
  <a href="category.php?category=66&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list">更新时间</a>
  <a href="category.php?category=66&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_volume&order=DESC#goods_list">销量</a>
  <input type="hidden" name="category" value="66" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
    </form>
			
			
			
               
            </div>
            <div class="con_2 fr fix">
                <span class="fl"> &nbsp;&nbsp;&nbsp;</span>
				 					            </div>
        </div>
        <div class="mod_09 mb20">
            <input type="checkbox" class="vm mr10 ml20" />货到付款
            <input type="checkbox" class="vm mr10 ml20" />仅显示有货
        </div>
        <div class="mod_10">
            <ul class="fix">
			</ul>
 <div id="pager" class="page">
      
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
<script type="text/javascript">
	var value= $('#categroytree').val();
	if( typeof(value)!="undefined" && value != ""){
		var cat_id = value.split('_')[0];
	Bingcategroychild(cat_id);}
</script>
</html>