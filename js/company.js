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
		$("#error_tel").css("color","#f30");
		var tel = $('#tel').val();
		if(tel==""){
			
			document.getElementById('error_tel').innerText="手机号不能为空！";
		}
		else{
			var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
			var flag_tel = reg.test(tel);
			if(!flag_tel){ 
				
				document.getElementById('error_tel').innerText="输入的手机号格式不正确！";
				return false;
			}else{
				document.getElementById('error_tel').innerText="";
				}
			
		}
		});
	
	
	$("#tel").focus(function(){
		
		$("#error_tel").css("color","#458B00");
		document.getElementById('error_tel').innerText="该手机号将作为登录名使用。";
		
		});
	
	$("#username").focus(function(){
		
		$("#error_username").css("color","#458B00");
		document.getElementById('error_username').innerText="该名词作为显示名称，不作为登录名使用。";
		
		});
	
	$("#username").blur(function(){
		$("#error_username").css("color","#f30");
		var name = $('#username').val();
		if(name==""){
			
			document.getElementById('error_username').innerText="用户名不能为空！";
		}else document.getElementById('error_username').innerText="";
		});
	
	$("#pass").focus(function(){
		
		$("#error_pass").css("color","#458B00");
		document.getElementById('error_pass').innerText="请输入8-20位，建议数字，字母，符号混合的密码。";
		
		});
	$("#pass").blur(function(){
		var pass = $('#pass').val();
		$("#error_pass").css("color","#f30");
		if(pass==""){
			document.getElementById('error_pass').innerText="密码不能为空！";
		}else if(pass.length<8){
			document.getElementById('error_pass').innerText="密码太弱！";
		}
		else document.getElementById('error_pass').innerText="";
		});
	$("#cpass").focus(function(){
		
		$("#error_cpass").css("color","#458B00");
		document.getElementById('error_cpass').innerText="请再次输入您的密码。";
		
		});
	$("#cpass").blur(function(){
		var cpass = $('#cpass').val();
		$("#error_cpass").css("color","#f30");
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
	$("#code_tel").focus(function(){
		
		$("#error_code_tel").css("color","#458B00");
		document.getElementById('error_code_tel').innerText="请输入您收到的4位手机验证码。";
		
		});
	$("#code_tel").blur(function(){
		$("#error_code_tel").css("color","#f30");
		var pass = $('#code_tel').val();
		if(pass==""){
			document.getElementById('error_code_tel').innerText="注册验证码不能为空！";
		}else document.getElementById('error_code_tel').innerText="";
		});
	
	$("#code_gg").blur(function(){
		$("#error_tel").css("color","#f30");
		var code_gg = $("#code_gg").val();
		if(code_gg==""){
			$('#error_code_gg').html("验证码不能为空！");
		}else{
			document.getElementById('error_code_gg').innerText="";
		}
		});
	
	$("#contactname").focus(function(){
		
		$("#error_contactname").css("color","#458B00");
		document.getElementById('error_contactname').innerText="请输入联系人的姓名";
		
		});
	$("#contactname").blur(function(){
		var pass = $('#contactname').val();
		$("#error_contactname").css("color","#f30");
		if(pass==""){
			document.getElementById('error_contactname').innerText="联系人的姓名不能为空！";
		}else document.getElementById('error_contactname').innerText="";
		});
	
	$("#contacttel").focus(function(){
		
		$("#error_contacttel").css("color","#458B00");
		document.getElementById('error_contacttel').innerText="请输入联系人常用电话，以便我们联系，例如：010-62332584";
		
		});
	$("#contacttel").blur(function(){
		var pass = $('#contacttel').val();
		
		
		$("#error_contacttel").css("color","#f30");
		var gud = /^0\d{2,3}-?\d{7,8}$/;
		var flag_gud = gud.test(pass);
		
		if(pass==""){
			document.getElementById('error_contacttel').innerText="联系人联系电话不能为空！";
		}else if(!flag_gud){ 
			document.getElementById('error_contacttel').innerText="输入的固定电话格式不正确！";
		}else document.getElementById('error_contacttel').innerText="";
		});
	
	
	
	
	
	$("#email").focus(function(){
		
		$("#error_email").css("color","#458B00");
		document.getElementById('error_email').innerText="请输入您的邮箱地址，审核信息用邮件通知";
		
		});
	$("#email").blur(function(){
		$("#error_email").css("color","#f30");
		var pass = $('#email').val();
		var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
		var flag_eml = preg.test(pass);
		if(!flag_eml){
			document.getElementById('error_email').innerText="邮箱地址格式有误！";
		}else
		document.getElementById('error_email').innerText="";
		});
	$("#comname").focus(function(){
		
		$("#error_comname").css("color","#458B00");
		document.getElementById('error_comname').innerText="请输入公司在工商局登记的名称";
		
		});
	$("#comname").blur(function(){
		$("#error_comname").css("color","#f30");
		var pass = $('#comname').val();
		if(pass==""){
			document.getElementById('error_comname').innerText="公司名称不能为空！";
		}else document.getElementById('error_comname').innerText="";
		});
	$("#comad").focus(function(){
		$("#error_comad").css("color","#458B00");
		document.getElementById('error_comad').innerText="请输入公司地址。";
		
		});
	$("#comad").blur(function(){
		$("#error_comad").css("color","#f30");
		var pass = $('#comad').val();
		if(pass==""){
			document.getElementById('error_comad').innerText="公司地址不能为空。";
		}else document.getElementById('error_comad').innerText="";
		});
});


function chk_form(){
	var flag_error=1;
	var tel = $('#tel').val();
	if(tel==""){
		document.getElementById('error_tel').innerText="手机号码不能为空！";
		flag_error=0;
	}
	var name = $('#username').val();
	if(name==""){
		document.getElementById('error_username').innerText="用户名不能为空！";
		flag_error=0;
	}
	var pass = $('#pass').val();
	if(pass==""){
		document.getElementById('error_pass').innerText="密码不能为空！";
		flag_error=0;
	}
	if(pass.length<8){
		document.getElementById('error_pass').innerText="密码太弱！";
		flag_error=0;
	}
	var cpass = $('#cpass').val();
	if(cpass!=pass){
		document.getElementById('error_cpass').innerText="确认密码不能为空！";
		flag_error=0;
	}

	if(cpass!=""&&cpass!=pass){
		document.getElementById('error_cpass').innerText="两次输入的密码不一致！";
		flag_error=0;
	}
	var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email
	
	var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
	
	var flag_tel = reg.test(tel);
	
	var email = $("#email").val();
	
	var flag_eml = preg.test(email);
	
	if(!flag_eml&&email!=""){ 
		document.getElementById('error_email').innerText="输入的邮箱格式不正确！";
		flag_error=0;
	}
	
	
	if(!flag_tel&&tel!=""){ 
		document.getElementById('error_tel').innerText="输入的手机号格式不正确！";
		flag_error=0;
	}
	
	var code_gg = $("#code_gg").val();
	if(code_gg==""){
		$('#error_code_gg').html("验证码不能为空！");
		flag_error=0;
	}
	
	var code_tel = $('#code_tel').val();
	if(code_tel==""){
		document.getElementById('error_code_tel').innerText="注册码不能为空！";
		flag_error=0;
	}
	
	var name = $('#username').val();
	if(name==""){
		document.getElementById('error_username').innerText="用户名不能为空！";
		flag_error=0;
	}
	var contactname = $('#contactname').val();
	if(contactname==""){
		document.getElementById('error_contactname').innerText="联系人的姓名不能为空！";
		flag_error=0;
	}
	
	var contacttel = $('#contacttel').val();
	if(contacttel==""){
		document.getElementById('error_contacttel').innerText="联系人的联系方式不能为空！";
		flag_error=0;
	}
	
	var gud = /^0\d{2,3}-?\d{7,8}$/;
	var flag_gud = gud.test(contacttel);
	if(!flag_gud&&contacttel!=""){ 
		document.getElementById('error_contacttel').innerText="输入的固定电话格式不正确！";
		flag_error=0;
	}
	
	var comname = $('#comname').val();
	if(comname==""){
		document.getElementById('error_comname').innerText="公司名称不能为空！";
		flag_error=0;
	}
	var comad = $('#comad').val();
	if(comad==""){
		document.getElementById('error_comad').innerText="公司地址不能为空！";
		flag_error=0;
	}
	 var checkbox = document.getElementById('accept-terms');// 
	 if(!checkbox.checked){ 
		 alert("请仔细阅读并同意用户协议！");
		 flag_error=0;
	  }
	var code_gg = $("#code_gg").val();
	if(code_gg==""){
			$('#error_code_gg').html("验证码不能为空！");
			flag_error=0;
	}

	if(flag_error){
		$.post("../ajaxphp/chk_code.php?act=gg",{code:code_gg},function(msg){
			if(msg==1){
		document.getElementById('submit').value="正在注册";
		$("#submit").attr("disabled","disabled");
	
		var data = {"tel":tel,"username":name,"password":pass,"telcode":code_tel,"person":2,"email":email,
				"contactname":contactname,"contacttel":contacttel,"comname":comname,"comad":comad}
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
						$("#error_tip").html(json.msg);
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
	else {
		return;
	}
	

}

 var i=120;
function remainTime(){  
    if(i==0){  
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

	var tel = $('#tel').val();
	if(tel==""){
		document.getElementById('error_tel').innerText="用户名不能为空！";
		$("#tel").focus();
		return false;
	}
	var reg = /^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; ;
	var flag_tel = reg.test(tel);
	if(!flag_tel){ 
		document.getElementById('error_tel').innerText="输入的手机号格式不正确！";
		$("#tel").focus();
		return false;
	}
	


	
			var data = {"tel":tel,"type":1};
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







