 <div class="con_3">累计评价 <font class="f1"><?php echo $this->_var['pager']['record_count']; ?></font>条</div>
                    <div class="con_4">
                        <div class="c_1">
                            <input type="radio" class="vm" />全部
                            <input type="radio" class="vm" />图片 （238）
                            <input type="radio" class="vm" />追评 （358）
                            <input type="radio" class="vm" />好评 （238）
                            <input type="radio" class="vm" />中评 （214）
                            <input type="radio" class="vm" />差评 （0）
                        </div>
						                       <ul>
						
						
												       <?php if ($this->_var['comments']): ?>
       <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
                            <li class="fix">
                                <div class="c_2">
                                    <p class="mb10"><?php echo $this->_var['comment']['content']; ?></p>
                                    <span> <?php echo $this->_var['comment']['add_time']; ?> 颜色：黑色  尺码：M</span>
									<?php if ($this->_var['comment']['re_content']): ?>
									<p><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><?php echo $this->_var['comment']['re_content']; ?></p>
									<?php endif; ?>
                                </div>
                                <div class="c_3">
								
								<?php if ($this->_var['comment']['username']): ?>  
                                    <img src="themes/ecmoban_jingdong/images/tb_24.png" />
                                    <p>用户名：<?php echo htmlspecialchars($this->_var['comment']['username']); ?></p>
									<?php else: ?>
									<img src="themes/ecmoban_jingdong/images/tb_24.png" />
                                    <p>用户名：<?php echo $this->_var['lang']['anonymous']; ?></p>
									<?php endif; ?>
                                </div>
                            </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		        <?php else: ?>
        <li><?php echo $this->_var['lang']['no_comments']; ?></li>
        <?php endif; ?>
                        </ul>
                        <div class="page">
						
						
						

						
						
						
						
						       
       <div id="pagebar" class="f_r">
        <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

         <div id="pager" class="pagebar">
          
          <?php if ($this->_var['pager']['page_prev'] != ''): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
		 <?php if ($this->_var['pager']['page_first'] != ''): ?>
		  <?php if ($this->_var['pager']['page'] != 1): ?>
		 <a href="<?php echo $this->_var['pager']['page_first']; ?>">1</a>
		 <?php else: ?>
		 <a href="#" class="current">1</a>
		 <?php endif; ?>
		 <?php endif; ?>
		  <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['item']['key']): ?>
				
                <a  href="#" class="current"><?php echo $this->_var['item']['key']; ?></a>
                <?php else: ?>
                <a href="<?php echo $this->_var['item']['url']; ?>"><?php echo $this->_var['item']['key']; ?></a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php if ($this->_var['pager']['page_last'] != ''): ?>
		  <?php if ($this->_var['pager']['page'] != $this->_var['pager']['page_count']): ?>
		  <a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['pager']['page_count']; ?></a>
		  <?php else: ?>
		  <a href="#" class="current"><?php echo $this->_var['pager']['page_count']; ?></a>
		  <?php endif; ?>
		  <?php endif; ?>
		  <?php if ($this->_var['pager']['page_next'] != ''): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_kbd']): ?>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
            <?php endif; ?>
        </div>
  
        </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
                        </div>
                    </div>