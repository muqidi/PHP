<?php
try{

define('IN_ECS', true);

require('../includes/init.php');
session_start();
		
	$username = stripslashes(trim($_POST['username']));//用户名
	$email = stripslashes(trim($_POST['email']));
	$password = stripslashes(trim($_POST['password']));
	$code_tel= stripslashes(trim($_POST['telcode']));//手机验证码

	$tel=stripslashes(trim($_POST['tel']));
	$contactname=stripslashes(trim($_POST['contactname']));
	$contacttel=stripslashes(trim($_POST['contacttel']));
	$comname=stripslashes(trim($_POST['comname']));
	$comad=stripslashes(trim($_POST['comad']));
	$person = stripslashes(trim($_POST['person']));
	
	if (empty ($tel)||empty($username) ||empty ($password) ||empty($code_tel)) {
		$arr['success'] = 0;
		$arr['msg'] = "填写的信息不完整";
		$json = json_encode($arr);
		echo $json;
		exit;
	}
	if($tel!=$_SESSION["tel"]){
		$arr['success'] = 0;
		$arr['msg'] = "注册验证码填写有误。";
		$json = json_encode($arr);
		echo $json;
		exit;
	}
	
	if($code_tel!=$_SESSION["code_tel"]){
		$arr['success'] = 0;
		$arr['msg'] = "注册验证码填写有误。";
		$json = json_encode($arr);
		echo $json;
		exit;
	}
	
	
	if($person=="1"){//个人注册
		$feml= "/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/"; //匹配Email
		$ftel = "/^(((13[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/";
		if(preg_match($ftel,$tel)){
			$sql= "select user_id from ".$GLOBALS['ecs']->table('users'). " where tel='$tel'";
		}else if(preg_match($feml,$tel)){
			$sql="select user_id from ".$GLOBALS['ecs']->table('users'). " where email='$tel'";
			$email = $tel;
			$tel = "";
		}else{
			$arr['success'] = 0;
			$arr['msg'] = "填写的信息不完整";
			$json = json_encode($arr);
			echo $json;
			exit;
		}
	}
	else if($person=="2"){//公司注册
		$sql = "select user_id from ".$GLOBALS['ecs']->table('users'). " where tel='$tel'" ;
	}
		
	$num = $GLOBALS['db']->getOne($sql);
	if($num==1){
		$err1['success']=0;
		$err1['msg']="该手机或者邮箱已经被注册。";
		$json = json_encode($err1);
		echo $json;
		exit;
	}
		
	$password = md5(trim($_POST['password']));
	$ip = get_client_ip();
	$regtime = date('Y-m-d H:i:s',time());
	$sql = "insert into ".$GLOBALS['ecs']->table('users'). 
	" (user_name,password,permission,last_ip,email,tel,contactname,comname,reg_time,comad,contacttel,person)
	values ('$username','$password',0,'$ip','$email','$tel','$contactname','$comname','$regtime','$comad','$contacttel','$person')";
	$rs =  $GLOBALS['db']->query($sql);
		
	if($rs){
			
		$err1['success']=1;
		$err1['msg']='注册成功!';
		$json = json_encode($err1);
		echo $json;
	}else{
		$err1['success']=0;
		$err1['msg']='哎呀!出现一个错误.'.$sql;
		$json = json_encode($err1);
		echo $json;
	}
}catch(Exception $e){
	$err1['success']=0;
	$err1['msg']=$e;
	$json = json_encode($err1);
	echo $json;
}


function get_client_ip() {
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
		else
			if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
				$ip = getenv("HTTP_X_FORWARDED_FOR");
				else
					if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
						$ip = getenv("REMOTE_ADDR");
						else
							if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
								$ip = $_SERVER['REMOTE_ADDR'];
								else
									$ip = "unknown";
									return ($ip);
}


?>