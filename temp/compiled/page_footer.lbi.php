
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
    <?php if ($this->_var['navigator_list']['bottom']): ?>
    <div class="links"> 
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
      <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> 
      <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> | <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    
    <div class="copyright"> 
     <?php echo $this->_var['copyright']; ?><br />
     <?php if ($this->_var['shop_address']): ?> 
     <?php echo $this->_var['shop_address']; ?> <br /> 
     <?php endif; ?> 
      <?php if ($this->_var['shop_postcode']): ?> 
     <?php echo $this->_var['shop_postcode']; ?><br /> 
          <?php endif; ?> 
      <?php if ($this->_var['service_phone']): ?> 
      Tel: <?php echo $this->_var['service_phone']; ?><br /> 
      <?php endif; ?> 
      <?php if ($this->_var['service_email']): ?> 
      E-mail: <?php echo $this->_var['service_email']; ?><br />
      <?php endif; ?> 
      <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/ecmoban_jingdong/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <img src="themes/ecmoban_jingdong/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
      <?php if ($this->_var['im']): ?> 
      <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
      
      <?php if ($this->_var['icp_number']): ?> 
      <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a> 
      <?php endif; ?> 
      
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
 
  
  
  
  
  
   <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
       <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> </li>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <li><a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a></li>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <li><a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/ecmoban_jingdong/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a></li>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <li><img src="themes/ecmoban_jingdong/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a></li>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <li><img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a></li>
      <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  
  
  
  
  
  
  
  
  
  

	 <?php if ($this->_var['service_phone']): ?>
     <li> 服务热线: <?php echo $this->_var['service_phone']; ?></li>
 <?php endif; ?>
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
</script>