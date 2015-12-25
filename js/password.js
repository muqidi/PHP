var i=120;
function remainTime(){  
    if(i<=0){  
    	$("#getyan").attr("disabled",false); 
    	$("#getyan").css("background","#E0FFFF");
    	document.getElementById('getyan').value="获取注册码";
    	return;
    }  
    i--;
    document.getElementById('getyan').value="获取注册码("+i+"秒)";
    setTimeout("remainTime()",1000);  
}  

$(function(){
	$("#getyan").mouseenter(function(){
		$("#getyan").css("background","#76EEC6");
	});
	$("#getyan").mouseleave(function(){
		$("#getyan").css("background","#E0FFFF");
	});
	
	$("#pass").focus(function(){
		
		document.getElementById('error_pass_tip').innerText="请输入8-20位，建议数字，字母，符号混合的密码。";
		
		});
	$("#pass").blur(function(){
		var pass = $('#pass').val();
		if(pass==""){
			document.getElementById('error_pass_tip').innerText="密码不能为空！";
		}else if(pass.length<8){
			document.getElementById('error_pass_tip').innerText="密码长度少于8位！";
		}
		else document.getElementById('error_pass_tip').innerText="";
		});
	
	$("#cpass").blur(function(){
		var cpass = $('#cpass').val();
		if(cpass==""){
			document.getElementById('error_pass_tip').innerText="确认密码不能为空！";
		}else{
			if(cpass!= $('#pass').val()){
				document.getElementById('error_pass_tip').innerText="两次输入的密码不一致！";
				return false;
			}
			document.getElementById('error_pass_tip').innerText="";
		}
		});
});


function submit(){
	var pass = $('#pass').val();
	if(pass==""){
		document.getElementById('error_pass_tip').innerText="密码不能为空！";
		$("#pass").focus();
		return false;
	}
	if(pass.length<8){
		document.getElementById('error_pass_tip').innerText="密码长度少于8位！";
		$("#pass").focus();
		return false;
	}
	
	var cpass = $('#cpass').val();
	if(cpass!=pass){
		document.getElementById('error_pass_tip').innerText="确认密码不能为空！";
		$("#cpass").focus();
		return false;
	}
	$.ajax({
		type: "POST",
		url: "../ajaxphp/password.php?action=xiupass",
		dataType: "json",
		data: {"data":pass},
		success: function(json){
			if(json.success==1){
				alert("密码修改成功！，即将转到登录页面。");
				window.location.href="user.php?action=login"; 
			}else{
				$(".getcode_gg").attr("src",'../ajaxphp/code_gg.php?' + Math.random());
				$('#error_pass_tip').html(json.msg);
				return false;
			}
		}
	});
	
}

function submityan(){
	var code_tel= $("#code_tel").val();
	if(code_tel==""){
		document.getElementById('error_tip').innerText="您还没有填写收到的验证码呢！";
		$("#code_tel").focus();
		return;
	}
	var code_gg = $("#code_gg").val();
	if(code_gg==""){
		document.getElementById('error_tip').innerText="验证码不能为空！";
		$("#code_gg").focus();
		return;
	}
	$.post("../ajaxphp/chk_code.php?act=gg",{code:code_gg},function(msg){
		if(msg==1){
	$.ajax({
		type: "POST",
		url: "../ajaxphp/password.php?action=yancode",
		dataType: "json",
		data: {"data":code_tel},
		success: function(json){
			if(json.success==1){
				$form_login = $('#first');
				$form_signup = $('#second');
				$form_login.removeClass('is-visible');
				$form_signup.addClass('is-visible');
			}else{
				$(".getcode_gg").attr("src",'../ajaxphp/code_gg.php?' + Math.random());
				$('#error_tip').html(json.msg);
				return false;
			}
		}
	});
		}else{
			$('#error_code_gg').html("验证码输入错误！");
			$("#code_gg").val("");
		}
	});
}


function submittel(){
	
	var tel = $("#tel").val();
	var email = $("#email").val();

	if(tel==""&&email==""){
		document.getElementById('error_tip').innerText="手机号和邮箱不能全部为空！";
		$("#tel").focus();
		return false;
	}
	
	var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
	var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
	var flag_tel = reg.test(tel);
	var flag_eml = preg.test(email);
	
	if(!flag_tel&&tel!=""){ 
		document.getElementById('error_tip').innerText="输入的手机号格式不正确！";
		$("#tel").focus();
		return false;
	}
	if(!flag_eml&&email!=""){ 
		document.getElementById('error_tip').innerText="输入的邮箱格式不正确！";
		$("#email").focus();
		return false;
	}
	
	if(email!=""){
		var data = {"tel":email,"type":21};
	}
	else{
		var data = {"tel":tel,"type":11};
	}
	
			
			$("#getyan").css("background","#959595");
			$("#getyan").attr("disabled","disabled");
			i=120;
			remainTime();
			document.getElementById('getyan').value="获取注册码(120)";
			$.ajax({
				type: "POST",
				url: "../ajaxphp/registertel.php",
				dataType: "json",
				data: data,
				success: function(json){
					if(json.success==1){
						$('#error_tip').html(json.msg);
					}else{
						i=0;
						$("#getyan").value="获取注册码";
						$(".getcode_gg").attr("src",'../ajaxphp/code_gg.php?' + Math.random());
						$('#error_tip').html(json.msg);
						return false;
					}
				}
			});

		
	
}


function changimg(){
	$(".getcode_gg").attr("src",'../ajaxphp/code_gg.php?' + Math.random());
}