function changimg(){
	$(".getcode_gg").attr("src",'../ajaxphp/code_gg.php?' + Math.random());
}

$(function(){
	$("#getyan").mouseenter(function(){
		$("#getyan").css("background","#76EEC6");
	});
	$("#getyan").mouseleave(function(){
		$("#getyan").css("background","#E0FFFF");
	});
	
	$("#tel").blur(function(){
		var tel = $('#tel').val();
		if(tel==""){
			document.getElementById('error_tel').innerText="手机号或者邮箱不能为空！";
		}else{
			
			var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
			
			var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
			
			var flag_tel = reg.test(tel);
			var flag_eml = preg.test(tel);
			
			
			
			if(!flag_tel&&!flag_eml){ 
				document.getElementById('error_tel').innerText="输入的手机号或者邮箱格式不正确！";
				return false;
			}else{
				document.getElementById('error_tel').innerText="";
				}
			
		}
		});
	
	$("#name").focus(function(){
		
		$("#error_name").css("color","#458B00");
		document.getElementById('error_name').innerText="该名词作为显示名称，不作为登录名使用。";
		
		});
	$("#name").blur(function(){
		var name = $('#name').val();
		if(name==""){
			$("#error_name").css("color","#f30");
			document.getElementById('error_name').innerText="昵称不能为空！";
		}else document.getElementById('error_name').innerText="";
		});
	
	$("#pass").focus(function(){
		
		$("#error_pass").css("color","#458B00");
		document.getElementById('error_pass').innerText="请输入8-20位，建议数字，字母，符号混合的密码。";
		
		});
	$("#pass").blur(function(){
		$("#error_pass").css("color","#f30");
		var pass = $('#pass').val();
		if(pass==""){
			document.getElementById('error_pass').innerText="密码不能为空！";
		}else if(pass.length<8){
			$("#error_pass").css("color","#f30");
			document.getElementById('error_pass').innerText="密码长度少于8位！";
		}
		else document.getElementById('error_pass').innerText="";
		});
	
	$("#cpass").blur(function(){
		var cpass = $('#cpass').val();
		if(cpass==""){
			document.getElementById('error_cpass').innerText="确认密码不能为空！";
		}else{
			if(cpass!= $('#pass').val()){
				document.getElementById('error_cpass').innerText="两次输入的密码不一致！";
				return false;
			}
			document.getElementById('error_cpass').innerText="";
		}
		});
	
	$("#code_tel").blur(function(){
		var pass = $('#code_tel').val();
		if(pass==""){
			document.getElementById('error_code_tel').innerText="注册验证码不能为空！";
		}else document.getElementById('error_code_tel').innerText="";
		});
	
	
	
	$("#code_gg").blur(function(){
		var code_gg = $("#code_gg").val();
		if(code_gg==""){
			$('#error_code_gg').html("验证码不能为空！");
		}else{
			document.getElementById('error_code_gg').innerText="";
		}
		});
	
});

function chk_form(){
	var tel = $('#tel').val();
	if(tel==""){
		document.getElementById('error_tel').innerText="用户名不能为空！";
		$("#tel").focus();
		return false;
	}
	var name = $('#name').val();
	if(name==""){
		document.getElementById('error_name').innerText="昵称不能为空！";
		$("#name").focus();
		return;
	}
	var pass = $('#pass').val();
	if(pass==""){
		document.getElementById('error_pass').innerText="密码不能为空！";
		$("#pass").focus();
		return false;
	}
	if(pass.length<8){
		document.getElementById('error_pass').innerText="密码太弱！";
		$("#pass").focus();
		return false;
	}
	var cpass = $('#cpass').val();
	if(cpass!=pass){
		document.getElementById('error_cpass').innerText="确认密码不能为空！";
		$("#cpass").focus();
		return false;
	}

	if(cpass!=pass){
		document.getElementById('error_cpass').innerText="两次输入的密码不一致！";
		$("#cpass").focus();
		return false;
	}
	var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
	
	var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; ;
	
	var flag_tel = reg.test(tel);
	var flag_eml = preg.test(tel);
	
	
	
	if(!flag_tel&&!flag_eml){ 
		document.getElementById('error_tel').innerText="输入的手机号或者邮箱号格式不正确！";
		$("#tel").focus();
		return false;
	}
	
	var code_gg = $("#code_gg").val();
	if(code_gg==""){
		$('#error_code_gg').html("验证码不能为空！");
		$("#code_gg").focus();
		return;
	}
	
	var code_tel = $('#code_tel').val();
	if(code_tel==""){
		document.getElementById('error_code_tel').innerText="注册码不能为空！";
		$("#code_tel").focus();
		return;
	}

	 var checkbox = document.getElementById('accept-terms');// 
	 if(!checkbox.checked){ 
		 alert("请仔细阅读并同意用户协议！");
	    return;
	  }
	 
	var name = $('#name').val();
	if(name==""){
		document.getElementById('error_name').innerText="昵称不能为空！";
		$("#name").focus();
		return;
	}
	
	
	var code_gg = $("#code_gg").val();
	if(code_gg==""){
		$('#error_code_gg').html("验证码不能为空！");
		$("#code_gg").focus();
		return;
	}
	
	$.post("../ajaxphp/chk_code.php?act=gg",{code:code_gg},function(msg){
		if(msg==1){
	document.getElementById('submit').value="正在注册";
	$("#submit").attr("disabled","disabled");
	
	var data = {"tel":tel,"username":name,"password":pass,"telcode":code_tel,"person":1};
	$.ajax({
			type: "POST",
			url: "../ajaxphp/register.php",
			dataType: "json",
			data: data,
			success: function(json){
				if(json.success==1){
						alert("注册成功！跳转到登录界面");
						window.location.href="login.html"; 
				}else{
						$("#submit").attr("disabled",false); 
						document.getElementById('submit').value="登录";
						$("#error_code_tel").html(json.msg);
						return;
			}
		}
	});
		}else{
			$('#error_code_gg').html("验证码输入错误！");
			$("#code_gg").val("");
		}
	});
}

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



function submittel(){

	var flag123=2;
	var tel = $('#tel').val();
	if(tel==""){
		document.getElementById('error_tel').innerText="手机号或者邮箱不能为空！";
		$("#tel").focus();
		return false;
	}
	var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
	var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
	var flag_tel = reg.test(tel);
	if(flag_tel){
		flag123=1;
	}
	var flag_eml = preg.test(tel);
	if(!flag_tel&&!flag_eml){ 
		document.getElementById('error_tel').innerText="输入的手机号或者邮箱号格式不正确！";
		$("#tel").focus();
		return false;
	}
	


	
			var data = {"tel":tel,"type":flag123}
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
						$('#error_code_tel').html(json.msg);
					}else{
						i=0;
						$("#getyan").value="获取注册码";
						$(".getcode_gg").attr("src",'../ajaxphp/code_gg.php?' + Math.random());
						$('#error_code_tel').html(json.msg);
						return false;
					}
				}
			});
		
	
}







