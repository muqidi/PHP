<link href="themes/ecmoban_moonbasa2013/qq/images/qq.css" rel="stylesheet" type="text/css" />
   <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   
   
   
   
   <section class="shortcut">
    <div class="container auto fix">
        <div class="welcome fl"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
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
              <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"  class="ssk_1 fl"/>
              <input type="submit" value="搜索" name="imageField" class="input_1 fl fw" style="cursor:pointer;">
        </form>
    </div>

    <div class="gw_cart fr tc"><a href="flow.php"><img src="themes/ecmoban_jingdong/images/tb_7.png" class="vm mr15" />购物车   ></a></div>
	
	          <?php if ($this->_var['searchkeywords']): ?>
          <div class="searchWordsBox">
            <div class="searchWords"> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" class="track"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
          </div>
          <?php endif; ?> </div>
	
	
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
 

 


