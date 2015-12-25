// JavaScript Document
	function submit(){
		var user = $("#user").val();
		var pass = $("#pass").val();
		var code_gg = $("#code_gg").val();
		if(user==""){
			document.getElementById('error_tip').innerText="用户名不能为空！";
			$("#user").focus();
			return false;
		}
		if(pass==""){
			document.getElementById('error_tip').innerText="密码不能为空";
			$("#pass").focus();
			return false;
		}
		if(code_gg==""){
			document.getElementById('error_tip').innerText="验证码不能为空！";
			return;
		}
		
		var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
		var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
		var istel = reg.test(user);
		var isemali = preg.test(user);
		if(!istel &&!isemali){ 
			document.getElementById('error_tip').innerText="您的登录名格式错误！请使用您的手机号或者邮箱登录。";
			$("#user").focus();
			return false;
		}
		
		
		$.post("../ajaxphp/chk_code.php?act=gg",{code:code_gg},function(msg){
			if(msg==1){
				$("#submit").attr("disabled","disabled");
				$("#submit").html("正在登录");
				$.ajax({
					type: "POST",
					url: "../ajaxphp/login.php?action=login",
					dataType: "json",
					data: {"user":user,"pass":pass,"flag":istel},
					beforeSend: function(){
						document.getElementById('error_tip').innerText="正在登录。";
					},
					success: function(json){
						if(json.success==1){
							window.location.href="../index.php"; 
						}else{
							$("#submit").removeAttr("disabled","disabled");
							$("#submit").html("登录");
							document.getElementById('error_tip').innerText=json.msg;
							$(".getcode_gg").attr("src",'/ajaxphp/code_gg.php?' + Math.random());
							 $("#code_gg").val("");
							 $("#pass").val("");
							return false;
						}
					}
				});
			}else{
				document.getElementById('error_tip').innerText="验证码错误！";
				$("#code_gg").val("");
				$("#code_gg").focus();
				$(".getcode_gg").attr("src",'/ajaxphp/code_gg.php?' + Math.random());
			}
		});
		
		
		
		
		

	}
	
	function register(){
		window.location.href="../register/index.html"; 
	}
	
	function changimg(){
		$(".getcode_gg").attr("src",'/ajaxphp/code_gg.php?' + Math.random());
	}
	
	function logout(){
		$.post("login.php?action=logout",function(msg){
			if(msg==1){
			    $("#result").remove();
			    var div = "<div id='login_form'><p><label>用户名：</label> <input type='text' class='input' name='user' id='user' /></p><p><label>密 码：</label> <input type='password' class='input' name='pass' id='pass' /></p><div class='sub'><input type='submit' class='btn' value='登 录' /></div></div>";
			    $("#login").append(div);
			}
		});
	}