<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="stylesheet" type="text/css" href="/CSS/user.css" />
<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>

</head>
<body>

<?php if ($this->_var['action'] == 'login'): ?>
<script type="text/javascript" src="/js/login.js"></script>
<div id="main">
	<div class="cd-user-modal is-visible"> 
		<div class="cd-user-modal-container login">
				<ul class="cd-switcher">
				<li style="width:100%;"><a style="font-family:'微软雅黑';color:red;background:green;font-size:20px;" href="#">用户登录</a></li>
			</ul>
			<div id="cd-login" class="is-selected"> 
				<div class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">用户名</label>
						<input name="username" class="full-width has-padding has-border" id="user" type="text" placeholder="输入用户名">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">密码</label>
						<input name="password" class="full-width has-padding has-border" id="pass" type="password"  placeholder="输入密码">
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">验证码</label>
						<input class="half-width has-padding has-border" id="code_gg" type="text" placeholder="请输入验证码">
						<img style="width:30%" src="/ajaxphp/code_gg.php" class="getcode_gg"  onclick="changimg()"  title="看不清，点击换一张" >
					</p>
					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">记住登录状态</label>
					</p>
					<p class="fieldset">
						<label  class="error_tip" id="error_tip"> 您需要使用电话号码或者邮箱登录</label>
					</p>
					
					<p class="fieldset">
						<input id="submit" class="full-width2" type="submit" value="登 录" onclick="submit()">
					</p>
					<div class="dibu"><a href="user.php?act=get_password">找回密码</a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=register">注册账号</a> </div>
				</div>
			</div>
		</div>
	</div> 
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'register'): ?>
<script type="text/javascript" src="/js/person.js"></script>
    <div id="main">
	<div class="cd-user-modal is-visible"> 
		<div class="cd-user-modal-container">
		<ul class="cd-switcher">
				<li><a class="selected" href="#">个人用户注册</a></li>
				<li><a href="user.php?act=register_company">企业用户注册</a></li>
			</ul>
		<div id="cd-login" class="is-selected"> 
				<div class="cd-form">
				<div class="dibu"><a href="user.php">已经有账号了，返回登录</a> </div>
				<p class="fieldset">
						<label class="image-replace cd-email" for="signin-username">手机</label>
						<input class="full-width has-padding has-border" id="tel" type="text" placeholder="输入手机号码或者邮箱">
						<span class="reerror_tip" id="error_tel"></span>
					</p>
										<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">手机或者邮箱验证码</label>
						<input id="getyan" class="half-width" type="submit" value="获取注册码" onclick="submittel()">
						<input class="half-width has-padding has-border" id="code_tel" type="text" placeholder="请输入收到的验证码">
						<span class="reerror_tip" id="error_code_tel"></span>
						
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">昵称</label>
						<input class="full-width has-padding has-border" id="name" type="text" placeholder="输入昵称">
						<span class="reerror_tip" id="error_name"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">密码</label>
						<input maxlength="20"  class="full-width has-padding has-border" id="pass" type="password"  placeholder="输入密码">
						<span class="reerror_tip" id="error_pass"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">确认密码</label>
						<input maxlength="20"  class="full-width has-padding has-border" id="cpass" type="password"  placeholder="确认密码">
						<span class="reerror_tip" id="error_cpass"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">验证码</label>
						<input class="half-width has-padding has-border" id="code_gg" type="text" placeholder="请输入验证码">
						<img 	style="width:30%" src="/ajaxphp/code_gg.php" class="getcode_gg"  onclick="changimg()"  title="看不清，点击换一张" >
						<span class="reerror_tip" id="error_code_gg"></span>
					</p>

					<p class="fieldset">
						<label  class="error_tip" id="error_tip"> </label>
					</p>
						<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">我已阅读并同意 <a href="http://zc.qq.com/chs/agreement1_chs.html">用户协议</a></label>
					</p>
					<p class="fieldset">
						<input id="submit" class="full-width2" type="submit" value="注册" onclick="chk_form()">
					</p>
				</div>
			</div>
		</div>
	</div> 
</div>
<?php endif; ?>




    <?php if ($this->_var['action'] == 'register_company'): ?>
<script type="text/javascript" src="/js/company.js"></script>
    <div id="main">
	<div class="cd-user-modal is-visible"> 
		<div class="cd-user-modal-container">
		<ul class="cd-switcher">
				<li><a  href="user.php?act=register">个人用户注册</a></li>
				<li><a  class="selected" href="#">企业用户注册</a></li>
			</ul>
		<div id="cd-login" class="is-selected"> 
				<div class="cd-form">
				<div class="dibu"><a href="user.php">已经有账号了，返回登录</a> </div>
				<p class="fieldset fieldset-tip">
						<span class="" id="">账户信息</span>
				</p>
				<p class="fieldset ">
						<label class="image-replace cd-email" for="signin-username">手机</label>
						<input maxlength="11" class="full-width has-padding has-border" id="tel" type="text" placeholder="请输入手机号码">
						<span class="reerror_tip" id="error_tel"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">手机验证码</label>
						<input id="getyan" class="half-width" type="submit" value="获取注册码" onclick="submittel()">
						<input class="half-width has-padding has-border" id="code_tel" type="text" placeholder="请输入收到的验证码">
						<span class="reerror_tip" id="error_code_tel"></span>
						
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">用户名</label>
						<input class="full-width has-padding has-border" id="username" type="text" placeholder="请输入用户名">
						<span class="reerror_tip" id="error_username"></span>
					</p>
					<p class="fieldset" style="margin-top: 0px; margin-bottom: 0px;">
						<label class="image-replace cd-password" for="signin-password">密码</label>
						<input class="full-width has-padding has-border" id="pass" type="password" maxlength="20"  placeholder="请输入密码">
						<span class="reerror_tip" id="error_pass"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">请确认密码</label>
						<input class="full-width has-padding has-border" id="cpass" type="password" maxlength="20"  placeholder="请确认密码">
						<span class="reerror_tip" id="error_cpass"></span>
					</p>
				<p class="fieldset-tip fieldset">
						<span class="" id="">联系人信息</span>
				</p>
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-username">联系人姓名</label>
						<input class="full-width has-padding has-border" id="contactname" type="text" placeholder="请输入联系人姓名">
						<span class="reerror_tip" id="error_contactname"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">联系人固定电话</label>
						<input class="full-width has-padding has-border" id="contacttel" type="text" placeholder="请输入联系人固定电话">
						<span class="reerror_tip" id="error_contacttel"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">电子邮箱</label>
						<input class="full-width has-padding has-border" id="email" type="text"  placeholder="请输入邮箱地址">
						<span class="reerror_tip" id="error_email"></span>
					</p>

				<p class="fieldset-tip fieldset">
						<span class="" id="">公司信息</span>
				</p>
				<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">公司名称</label>
						<input class="full-width has-padding has-border" id="comname" type="text"  placeholder="请输入公司名称">
						<span class="reerror_tip" id="error_comname"></span>
					</p>
				<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">公司地址</label>
						<input class="full-width has-padding has-border" id="comad" type="text"  placeholder="请输入公司地址">
						<span class="reerror_tip" id="error_comad"></span>
					</p>
					
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">验证码</label>
						<input class="half-width has-padding has-border" id="code_gg" type="text" placeholder="请输入验证码">
						<img style="width:30%" src="/ajaxphp/code_gg.php" class="getcode_gg"  onclick="changimg()"  title="看不清，点击换一张" >
						<span class="reerror_tip" id="error_code_gg"></span>
					</p>
					
					<p class="fieldset">
						<label  class="error_tip" id="error_tip"> </label>
					</p>
						<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">我已阅读并同意 <a href="http://zc.qq.com/chs/agreement1_chs.html">用户协议</a></label>
					</p>
					<p class="fieldset">
						<input id="submit" class="full-width2" type="submit" value="注册" onclick="chk_form()">
					</p>
				</div>
			</div>
		</div>
	</div> 
</div>

<?php endif; ?>






    <?php if ($this->_var['action'] == 'get_password'): ?>
	<script type="text/javascript" src="/js/password.js"></script>
    <div id="main">
	<div id="first" class="cd-user-modal is-visible"> 
		<div class="cd-user-modal-container login">
				<ul class="cd-switcher">
				<li style="width:100%;"><a style="font-family:'微软雅黑';color:red;background:green;font-size:20px;" href="#">找回密码</a></li>
			</ul>
			<div id="cd-login" class="is-selected"> 
				<div class="cd-form">
					<p class="fieldset">
						<label class="" >第一步：验证邮箱或者手机号</label>
					</p>
				
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">邮箱</label>
						<input class="full-width has-padding has-border" id="email" type="text" placeholder="输入邮箱账号">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-password">手机号</label>
						<input class="full-width has-padding has-border" id="tel" type="text"  placeholder="请输入电话号码">
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">验证码</label>
						<input class="half-width has-padding has-border" id="code_gg" type="text" placeholder="请输入验证码">
						<img src="/ajaxphp/code_gg.php" style="width:30%" class="getcode_gg"  onclick="changimg()"  title="看不清，点击换一张" >
					</p>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signin-username">手机或者邮箱验证码</label>
						<input id="getyan" class="half-width" type="submit" value="获取验证码" onclick="submittel()">
						<input class="half-width has-padding has-border" id="code_tel" type="text" placeholder="请输入收到的验证码">
						<span class="reerror_tip" id="error_code_tel"></span>
						
					</p>
					<p class="fieldset">
						<label  class="error_tip" id="error_tip"> 电话号码和邮箱号码您只需要填写一个</label>
					</p>
					
					<p class="fieldset">
						<input id="submit" class="full-width2" type="submit" value="找回密码" onclick="submityan()">
					</p>
					<div class="dibu"><a href="user.php">登录</a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=register">注册账号</a> </div>
				</div>
			</div>
		</div>
	</div> 
	
		<div id="second" class="cd-user-modal"> 
		<div class="cd-user-modal-container login">
				<ul class="cd-switcher">
				<li style="width:100%;"><a style="font-family:'微软雅黑';color:red;background:green;font-size:20px;" href="#">找回密码</a></li>
			</ul>
				<div id="#cd-signup" class="is-selected"> 
				<div class="cd-form">
					<p class="fieldset">
						<label class="" >第二步：找回密码</label>
					</p>
				
					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">输入密码</label>
						<input maxlength="20"  class="full-width has-padding has-border" id="pass" type="password" placeholder="输入新的密码">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">确认密码</label>
						<input maxlength="20"  class="full-width has-padding has-border" id="cpass" type="password"  placeholder="请确认密码">
					</p>
					<p class="fieldset">
						<label  class="error_tip" id="error_pass_tip"> </label>
					</p>
					
					<p class="fieldset">
						<input id="submit" class="full-width2" type="submit" value="确认" onclick="submit()">
					</p>
					<div class="dibu"><a href="login.html">登录</a>&nbsp;&nbsp;&nbsp;<a href="company_register.html">注册账号</a> </div>
				</div>
			</div>
			
			</div>
			</div>
	
</div>

<?php endif; ?>





</body>
</html>
