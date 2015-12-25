<?php

error_reporting(E_ALL || ~E_NOTICE);
define('IN_ECS', true);
require('../includes/init.php');


try {
	
	$tel = stripslashes(trim($_POST['tel']));
	$type = stripslashes(trim($_POST['type']));
	
	
	$feml= "/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/"; //匹配Email
	$ftel = "/^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/";
	if(($type=="11"||$type=="1")&&preg_match($ftel,$tel)){
		//$query = mysql_query("select id from users where tel='$tel'");
		$sql ="select user_id from ". $GLOBALS['ecs']->table('users')." where tel='$tel'";
	}else if(preg_match($feml,$tel)&&$type=="21"){//只有个人才能用邮箱找回密码
		//$query = mysql_query("select id from users where email='$tel' and person = 1");
		$sql ="select user_id from ". $GLOBALS['ecs']->table('users')." where email='$tel' and person = 1";
	}else if(preg_match($feml,$tel)){
		//$query = mysql_query("select id from users where email='$tel'");
		$sql ="select user_id from ". $GLOBALS['ecs']->table('users')." where email='$tel'";
	}else{
		$arr1['success'] = 0;
		$arr1['msg'] = "输入信息的格式错误".$type;
		$json = json_encode($arr1);
		echo $json;
		exit;
	}
	$num = $GLOBALS['db']->getOne($sql);
	
	
	
	
	if($num>=1 && $type != '11' && $type!='21'){//11 21 是找回密码
		$err1['success']=3;
		$err1['msg']="该手机或者邮箱已经被注册。";
		$json = json_encode($err1);
		echo $json;
		exit;
	}
	if($num==0 && ($type == '11'||$type=='21')){
		$err1['success']=0;
		$err1['msg']="没有该账号的信息";
		$json = json_encode($err1);
		echo $json;
		exit;
	}
	

	$_SESSION['id']=$num;
	

	
	$value = rand(1000,9000);
	$_SESSION['code_tel'] =$value;
	$_SESSION['tel']=$tel;
	if($type=='1' || $type=='11'){
		$arr['success'] = 1;
		$arr['msg'] = '验证码发送成功，请注意查看短信息。'.$value.'+'.$num;
		$json = json_encode($arr);
		echo $json;
	}else{
		require_once("smtp.php");
		//使用163邮箱服务器
		$smtpserver = "smtp.163.com";
		//163邮箱服务器端口
		$smtpserverport = 25;
		//你的163服务器邮箱账号
		$smtpusermail = "muqidi1@163.com";
		//收件人邮箱
		$smtpemailto = $tel;
		//你的邮箱账号(去掉@163.com)
		$smtpuser = "muqidi1";//SMTP服务器的用户帐号
		//你的邮箱密码
		$smtppass = "gao_741"; //SMTP服务器的用户密码
		//邮件主题
		$mailsubject = "注册激活码";
		//邮件内容
		$mailbody = "欢迎你注册XX网站，请将下面的的注册码填入注册码栏".$value;
		//邮件格式（HTML/TXT）,TXT为文本邮件
		$mailtype = "TXT";
		//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
		//是否显示发送的调试信息
		$smtp->debug = FALSE;
		//发送邮件
		$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
	
		$arr['success'] = 1;
		$arr['msg'] = "邮件发送成功，请打开邮件查看注册码。";
		$json = json_encode($arr);
		echo $json;
	}
	
} catch (Exception $e) {
	$arr['success'] = 0;
	$arr['msg'] = "验证码发送失败，请重新点击按钮获取。";
	$json = json_encode($arr);
	echo $json;
}

?>