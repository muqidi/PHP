<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:62:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/goods.dwt";i:1;s:76:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/page_header.lbi";i:2;s:73:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/comments.lbi";i:3;s:82:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/bought_note_guide.lbi";i:4;s:76:"D:/php project/ECShop/upload/themes/ecmoban_jingdong/library/page_footer.lbi";}s:7:"expires";i:1450949667;s:8:"maketime";i:1450946067;}<!DOCTYPE html>
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
	
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.min.js"></script><script type="text/javascript" src="js/common.js"></script>    <script type="text/javascript" type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="themes/ecmoban_jingdong/js/jquery.style.js"></script>
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
 
 
<section class="mod_12 mb30">
    <div class="container auto">
       <!-- <span>服装衣服：</span> -->
        <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=53">手机数码</a> <code>&gt;</code> <a href="category.php?id=27">数码相机</a> <code>&gt;</code> <a href="category.php?id=33">微单</a> <code>&gt;</code> 尼康微单 
    </div>
</section>
<section class="container auto mb20 fix">
    <div class="mod_13 fl">
        <div class="bd">
            <ul>
			                <li>
                    <a href="#" target="_blank"><img src="images/201512/goods_img/55_P_1449720222917.jpg" /></a>
                </li>
                            </ul>
        </div>
        <div class="hd auto">
            <ul>
			                <li><img src="images/201512/goods_img/55_P_1449720222917.jpg" /></li>
                       </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".mod_13").slide({mainCell:".bd ul",autoPlay:true});
    </script>
	 <form action="javascript:addToCart(55)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
    <div class="mod_14 fl">
        <div class="c_1">尼康微单</div>
        <div class="c_2 mb10 fix">
            <div class="fl">
                <p>参  考  价： <span class="tdlt">￥53333元</span></p>
               
		  <p>热  贸  价： <span   class="sp_1">￥44444元</span></p>
	                    </div>
            <div class="fr pt30">月销量0 <span class="sp_2"></span> 丨 累计评价<span class="sp_2">0</span></div>
        </div>
        <div class="c_3 mb15">
            <ul>
						
                <li class="fix">
                    <div class="name">商品编号：</div>
                    <div class="skin_3">ECS000055</div>
                </li>
				<div id="select_spec">
			      
            
	  </div>
                <li class="fix">
                    <div class="name">数       量： </div>
                    <div class="text fix">
                        <input name="number"  id="number" value="1" size="4" onblur="changePrice()" type="text" class="wbk_2 mr10 di fl" />
                        <span class="fl">
                            <img src="themes/ecmoban_jingdong/images/tb_22.jpg" class="db mb5" onclick="changenumber(1)"/>
                            <img src="themes/ecmoban_jingdong/images/tb_23.jpg" class="db" onclick="changenumber(-1)" />
                        </span>
						
						         		 <span class="fl pl10">商品库存： 1 </span>
              						
                        
                    </div>
                </li>
			<li class="fix">	 <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font></li>
					
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
	      <li >
      <a href="goods.php?id=54" target="_blank"><img src="images/201512/thumb_img/54_thumb_G_1449720065216.jpg" alt="" class="B_blue" /></a>
	  <a href="goods.php?id=54" target="_blank" title="">佳能D700</a>
      本店售价：<font class="f1">￥11111元</font><br />
      </li>
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
                <tr>
          <th colspan="2" bgcolor="#FFFFFF"> <h2 class="h2bg">商品属性</h2></th>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[类型]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">微单</td>
        </tr>
                		<tr>
          <th colspan="2" bgcolor="#FFFFFF"> <h2 class="h2bg"> <h2>商品描述：</h2></th>
        </tr>
		 <tr>
          <td  colspan="2" bgcolor="#FFFFFF" > </td>
         
        </tr>
      </table>      
      </div>
	  
                <div class="list_01">
                    
						
						
												<div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:55;}554fcae493e564ee0dc75bdf2ebf94ca</div>
						
</div>
				
				<div class="list_01">
				
				
				<div id="ECS_BOUGHT">554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:55;}554fcae493e564ee0dc75bdf2ebf94ca</div>				
								
				
				
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
var goods_id = 55;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 55;
var now_time = 1450917267;
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